<?php
$arrwarna = array ("Blue","Black","Red","Yellow" ,"Green");

echo "Menampilkan isi array dengan for : <br>";
for ($i=0; $i<count($arrwarna);$i++){
    echo "apakah kamu suka <font color=$arrwarna[$i]>".$arrwarna[$i]."</font> ? <br>";
}

echo "<br>Menampilkan isi array dengan foreach : <br>";
foreach ($arrwarna as $warna){
    echo "apakah kamu suka <font color = $warna>".$warna."</font>?<br>";
}
?>