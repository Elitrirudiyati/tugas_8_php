<!DOCTYPE html>
<html>
<?php
echo "<h3> Tugas 8 PHP </h3>";
echo " Buatlah belah ketupat menggunakan perulangan sehingga akan tampil gambar sebagai berikut ini : ";
echo "<br>";

function belah_ketupat(){
for ($a=10; $a>0; $a--){
  for ($i=1; $i<=$a; $i++){
      echo "_";
  }
  for ($a1=10; $a1>$a; $a1--){
    echo "*";
  }
  for ($a2=10; $a2>$a; $a2--){
      echo "*";  
  }
  
  echo "<br>";
  }

for ($b=0; $b<=10; $b++){
  for ($j=1; $j<=$b; $j++){
    echo "_";
  }
  for ($b1=10; $b1>$b; $b1--){
    echo "*";
  }
  for ($b2=10; $b2>$b; $b2--){
    echo "*";
  }
    echo "<br>";
}

}
echo "<table>";
echo "<tr>";
for ($i=0; $i<=8;$i++){
	echo "<td>";
	echo belah_ketupat();
	echo "<td>";
}
echo "</tr>";
echo "<tr>";
for ($i=0; $i<=8; $i++){
	echo "<td>";
	echo belah_ketupat();
	echo "<td>";
}
echo "</tr>";
echo "</table>";
?>
</html>