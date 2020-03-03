<?php
$nama = "Noe";
function tampil_nama(){
    global $nama;
    echo "Nama Saya : " .$nama;
}
tampil_nama();
?>