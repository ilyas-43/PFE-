<?php
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'projet_fdt';

$con = mysqli_connect($hname, $uname, $pass, $db);

if (!$con) {
    die("Cannot connect to Database: " . mysqli_connect_error());
}

// Filtration sécurisée des données utilisateur
function filteration($data) {
    foreach ($data as $key => $value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        $value = strip_tags($value);
        $data[$key] = $value;
    }
    return $data;
}

// Récupérer toutes les données d'une table
function selectAll($table) {
    $con = $GLOBALS['con'];
    
    // Optionnel mais conseillé : vérification simple du nom de table (alphanum uniquement)
    if (!preg_match('/^[a-zA-Z0-9_]+$/', $table)) {
        die("Nom de table invalide");
    }

    $res = mysqli_query($con, "SELECT * FROM `$table`");
    return $res;
}

// Requête SELECT préparée
function select($sql, $values, $datatypes) {
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - select");
        }
    } else {
        die("Query cannot be prepared - select");
    }
}

// Requête UPDATE préparée
function update($sql, $values, $datatypes) {
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - update");
        }
    } else {
        die("Query cannot be prepared - update");
    }
}

// Requête INSERT préparée
function insert($sql, $values, $datatypes) {
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - insert");
        }
    } else {
        die("Query cannot be prepared - insert");
    }
}
?>
