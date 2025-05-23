<?php 
require('../inc/db-config.php');
require('../inc/essentials.php');
adminlogin();

// Récupérer les réglages généraux
if(isset($_POST['get_general'])) {
    $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $res = select($q, [1], "i");
    $data = mysqli_fetch_assoc($res);
    echo json_encode($data);
}

// Mettre à jour le champ 'site_about'
if(isset($_POST['upd_general'])) {
    $frm_data = filteration($_POST);
    $q = "UPDATE `settings` SET `site_about`=? WHERE `sr_no`=?";
    $values = [$frm_data['site_about'], 1];
    $res = update($q, $values, 'si');
    echo $res;
}

// Basculer l'état de shutdown (1 ↔ 0)
if(isset($_POST['upd_shutdown'])) {
    $frm_data = ($_POST['upd_shutdown'] == 0) ? 1 : 0;
    $q = "UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?";
    $values = [$frm_data, 1];
    $res = update($q, $values, 'ii');
    echo $res;
}

// Récupérer les coordonnées de contact
if(isset($_POST['get_contacts'])) {
    $q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
    $res = select($q, [1], "i");
    $data = mysqli_fetch_assoc($res);
    echo json_encode($data);
}

// Mettre à jour les coordonnées de contact
if(isset($_POST['upd_contacts'])) {
    $frm_data = filteration($_POST);
    $q = "UPDATE `contact_details` SET 
            `address`=?, 
            `gmap`=?, 
            `pn1`=?, 
            `pn2`=?, 
            `email`=?, 
            `fb`=?, 
            `insta`=?, 
            `tw`=?, 
            `iframe`=? 
          WHERE `sr_no`=?";
    $values = [
        $frm_data['address'],
        $frm_data['gmap'],
        $frm_data['pn1'],
        $frm_data['pn2'],
        $frm_data['email'],
        $frm_data['fb'],
        $frm_data['insta'],
        $frm_data['tw'],
        $frm_data['iframe'],
        1
    ];
    $res = update($q, $values, 'sssssssssi');
    echo $res;
}
?>
