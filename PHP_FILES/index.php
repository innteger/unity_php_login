<?php
require_once('inc/config.php');
require_once(ROOT_PATH.'inc/app_top.php');


if ($_POST['Islem'] == "Kayit") {
    $Kontrol = $db->get_row("select id from tbl_kullanicilar where email = '".$_POST['Email']."' ");
    if ($Kontrol->id > 0) {

        echo "E-posta kayıtlı!";

    } else {
        $db->query("insert into tbl_kullanicilar set 
            ad_soyad = '".addslashes($_POST['AdSoyad'])."',
            kullanici_adi = '".addslashes($_POST['Kullanici'])."',
            parola = '".md5($_POST['Parola'])."',
            email = '".addslashes($_POST['Email'])."' ");

       echo 'Kayit başarılı';     
    }
}


if ($_POST['Islem'] == "Giris") {
    $Kontrol = $db->get_row("select id,parola from tbl_kullanicilar where kullanici_adi = '".$_POST['Kullanici']."' ");
    if ($Kontrol->id > 0) {
        if (md5($_POST['Parola']) != $Kontrol->parola) 
            echo "HATALI KULLANICI ADI VEYA PAROLA";
        else 
            echo "GİRİŞ BAŞARILI";

    } else {         
        echo "HATALI KULLANICI ADI VEYA PAROLA";
    }
}
