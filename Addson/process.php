 <!-- ------------------------------Page de process PHP pour la consultation 
 des flux de la caisse et de la banque------------------------------------>
   <!-- Chercher le total pour afficher Caisse -->
<?php

$stmt_find = $connect->prepare("SELECT * FROM `content` WHERE num_compte=571");
$stmt_find->execute();
$valeur = 0;//initialisation

while ($find_row = $stmt_find->fetch()) {
  $fetch_prix=$find_row['mont'];
  $total= $fetch_prix;
  $valeur += $total;

}
?>
<!-- Chercher le total pour afficher Banque -->
<?php

$stmt_find = $connect->prepare("SELECT * FROM `content` WHERE num_compte=521");
$stmt_find->execute();
$valeur_ban = 0;//initialisation

while ($find_row = $stmt_find->fetch()) {
  $fetch_prix=$find_row['mont'];
  $total= $fetch_prix;
  $valeur_ban += $total;

}
?>
<!-- Chercher les rechetttes du jour-->
<?php

$stmt_find = $connect->prepare("SELECT * FROM `content` WHERE num_compte=521 AND genre='crédit' ");
$stmt_find->execute();
$count1 = 0;//initialisation

while ($find_row = $stmt_find->fetch()) {
 $fetch_recette=$find_row['mont'];
$total= $fetch_recette;
 $count1 += $total;

}
?> 
<!-- Chercher les rechetttes du jour-->
<?php

$stmt_find = $connect->prepare("SELECT * FROM `content` WHERE num_compte=571 AND genre='débit' ");
$stmt_find->execute();
$count2 = 0;//initialisation

while ($find_row = $stmt_find->fetch()) {
 $fetch_recette=$find_row['mont'];
$total= $fetch_recette;
 $count2 += $total;

}
?> 
<?php 
$count_enc=$count1+$count2;
?>
<!-- --------------------------------------------------------------------- -->

<!-- Chercher les dépenses du jour-->
<?php

$stmt_find = $connect->prepare("SELECT * FROM `content` WHERE num_compte=521 AND genre='débit' ");
$stmt_find->execute();
$count01 = 0;//initialisation

while ($find_row = $stmt_find->fetch()) {
 $fetch_recette=$find_row['mont'];
$total0= $fetch_recette;
 $count01 += $total0;

}
?> 
<!-- Chercher les dépenses du jour-->
<?php

$stmt_find = $connect->prepare("SELECT * FROM `content` WHERE num_compte=571 AND genre='crédit' ");
$stmt_find->execute();
$count02 = 0;//initialisation

while ($find_row = $stmt_find->fetch()) {
 $fetch_recette=$find_row['mont'];
$total= $fetch_recette;
 $count02 += $total;

}
?> 
<?php 
$count_dec=$count01+$count02;
?>

   <!-- ---------------------------------------------------------- -->