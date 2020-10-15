<!--<meta http-equiv='refresh' content='60' /> refresh la page pour actualiser les donnés-->
<?php
//initialisation des variables globales
$num_caisse=571;
$num_banque=521;
$encaissement='débit';
$decaissement='crédit';
$sortie='débit';
$entre='crédit';
?>


<?php
require '../connect.php'; ?>
 <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Votre tableau de bord
                                        <div class="page-title-subheading">Vous verrez ici, à travers de simples et intuives présentations,
										un aperçu de l'évolution de votre tresorerie.
                                        </div>
                                    </div>
                                   
                                </div>
                              </div>
                            </div>

                                <br>
                                <div class="app-page-title">
                                    <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-attention icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>


                                <!-------Encaissement-------->


                                <?php
                                require '../connect.php'; ?>




                                <?php
                                if (isset($_POST['submitEnc'])) {


                                 $date_enc=htmlspecialchars($_POST['date_enc']);
                                 $libelle=htmlspecialchars($_POST['libelle']);
                                 $montant=htmlspecialchars($_POST['montant']);

                                
                                  $ins_produitr=$connect->prepare("INSERT INTO `content` (`id`, `num_compte`, `date_op`, `libe`, `mont`, `genre`) VALUES (NULL, 571, :date_enc, :libelle, :montant, 'débit');");
                                  $ins_produitr->bindParam(':date_enc' ,$date_enc , PDO::PARAM_STR);
                                  $ins_produitr->bindParam(':libelle' ,$libelle, PDO::PARAM_STR);
                                  $ins_produitr->bindParam(':montant' ,$montant , PDO::PARAM_STR);
                                  $ins_produitr->execute();

                                  if (isset($ins_produitr)) {
                                   echo"
                                   <div>Opération réussie
                                   <div class='page-title-subheading'>L'opération \" $libelle \" a été enregistré avec succès.
                    
                                       </div>
                                  </div>";


                                  }                     

                                } // fin du grand if


                                ?>
                                <!--fin encaissement-->

                                <!-------Décaissement-------->


                                <?php
                                require '../connect.php'; ?>




                                <?php
                                if (isset($_POST['submitDec'])) {


                                 $date_dec=htmlspecialchars($_POST['date_dec']);
                                 $libelle=htmlspecialchars($_POST['libelle']);
                                 $montant=htmlspecialchars($_POST['montant']);

                                
                                  $ins_produitr=$connect->prepare("INSERT INTO `content` (`id`, `num_compte`, `date_op`, `libe`, `mont`, `genre`) VALUES (NULL, 571, :date_dec, :libelle, :montant, 'crédit');");
                                  $ins_produitr->bindParam(':date_dec' ,$date_dec , PDO::PARAM_STR);
                                  $ins_produitr->bindParam(':libelle' ,$libelle, PDO::PARAM_STR);
                                  $ins_produitr->bindParam(':montant' ,$montant , PDO::PARAM_STR);
                                  $ins_produitr->execute();

                                  if (isset($ins_produitr)) {
                                   echo"
                                   <div>Opération réussie
                                   <div class='page-title-subheading'>L'opération \" $libelle \" a été enregistré avec succès.
                    
                                       </div>
                                  </div>";


                                  }                     

                                } // fin du grand if


                                ?>
                                <!--fin décaissement-->

                                    <!-------Entrée dans la banque-------->


                                    <?php
                                require '../connect.php'; ?>




                                <?php
                                if (isset($_POST['submitEn'])) {


                                 $date_enc=htmlspecialchars($_POST['date_ban']);
                                 $libelle=htmlspecialchars($_POST['libelle']);
                                 $montant=htmlspecialchars($_POST['montant']);

                                
                                  $ins_produitr=$connect->prepare("INSERT INTO `content` (`id`, `num_compte`, `date_op`, `libe`, `mont`, `genre`) VALUES (NULL, 521, :date_ban, :libelle, :montant, 'crédit');");
                                  $ins_produitr->bindParam(':date_ban' ,$date_enc , PDO::PARAM_STR);
                                  $ins_produitr->bindParam(':libelle' ,$libelle, PDO::PARAM_STR);
                                  $ins_produitr->bindParam(':montant' ,$montant , PDO::PARAM_STR);
                                  $ins_produitr->execute();

                                  if (isset($ins_produitr)) {
                                   echo"
                                   <div>Opération réussie
                                   <div class='page-title-subheading'>L'opération \" $libelle \" a été enregistré avec succès.
                    
                                       </div>
                                  </div>";


                                  }                     

                                } // fin du grand if


                                ?>
                                <!--fin entrée dans la banque-->

                                 <!-------Sortie dans la banque-------->


                                 <?php
                                require '../connect.php'; ?>




                                <?php
                                if (isset($_POST['submitSor'])) {


                                 $date=htmlspecialchars($_POST['date_ban']);
                                 $libelle=htmlspecialchars($_POST['libelle']);
                                 $montant=htmlspecialchars($_POST['montant']);

                                
                                  $ins_produit=$connect->prepare("INSERT INTO `content` (`id`, `num_compte`, `date_op`, `libe`, `mont`, `genre`) VALUES (NULL, 521, :date_ban, :libelle, :montant, 'débit');");
                                  $ins_produit->bindParam(':date_ban' ,$date , PDO::PARAM_STR);
                                  $ins_produit->bindParam(':libelle' ,$libelle, PDO::PARAM_STR);
                                  $ins_produit->bindParam(':montant' ,$montant , PDO::PARAM_STR);
                                  $ins_produit->execute();

                                  if (isset($ins_produit)) {
                                   echo"
                                   <div>Opération réussie
                                   <div class='page-title-subheading'>L'opération \" $libelle \" a été enregistré avec succès.
                    
                                       </div>
                                  </div>";


                                  }                     

                                } // fin du grand if


                                ?>
                                <!--fin sortie dans la banque-->


                                <!------changement Identifiant----->
                                <?php
                                if (isset($_POST['submitId'])) {

                                  $oldid=htmlspecialchars($_POST['oldid']);
                                  $newid=htmlspecialchars($_POST['newid']);
                                  $pass=htmlspecialchars($_POST['pass']);

                                  ///tester si le nom existe

                                    $stmtr = $connect->prepare("SELECT * FROM `user` WHERE identifiant = :oldid"); //tester si le nom existe
                                  $stmtr->bindParam(':oldid' ,$oldid , PDO::PARAM_STR);
                                    $stmtr->execute();

                                      $find_rowe = $stmtr->fetch();
                                    $fetch_nome=$find_rowe['identifiant'];
                                    $name =  $fetch_nome;

                                       if ($name==NULL){
                                        echo "
                                  <div>Attention, petite erreur.
                                     <div class='page-title-subheading'>\"$oldid\" ne figure pas dans la base de donnée en tant que Utilisateur,
                                  Veuillez contacter l'Administrateur.

                                     </div>
                                  </div>";

                                     }


                                    else { //else nom
                                      $stmtr = $connect->prepare("SELECT * FROM `user` WHERE identifiant = :oldid"); //tester si le nom existe
                                    $stmtr->bindParam(':oldid' ,$oldid , PDO::PARAM_STR);
                                      $stmtr->execute();

                                        $find_rower = $stmtr->fetch();
                                      $fetch_nomer=$find_rower['mdp'];
                                      $passt =  $fetch_nomer;

                                 if  ($passt!=$pass) { // test de la validité du mdp

                                   echo "
                             <div>Attention, petite erreur.
                                <div class='page-title-subheading'>Le mot de passe saisie est invalide.


                                </div>
                             </div>";
                                 }



                                  //////////fin du test nom

                                   else{

                                  $inst=$connect->prepare("UPDATE user SET identifiant = :newid, date=NOW() WHERE identifiant = :oldid");
                                  $inst->bindParam(':oldid' ,$oldid , PDO::PARAM_STR);
                                  $inst->bindParam(':newid' ,$newid , PDO::PARAM_STR);
                                  $inst->execute();


                                   if (isset($inst)) {
                                     echo "
                                  <div>Opération réussie
                                     <div class='page-title-subheading'> L'identifiant \"$oldid \" est changé en  \" $newid \"
                                   avec sussès.

                                     </div>
                                  </div>

                                   ";
                                   }


                                 }

                                }//fi du else nom

                                 } // fin du grand if


                                ?>
                                <!--fin Changement d'Identifiant-->

                                <!------changement mdp----->
                                <?php
                                if (isset($_POST['submitCm'])) {

                                  $iden=htmlspecialchars($_POST['iden']);
                                  $oldpass=htmlspecialchars($_POST['oldpass']);
                                  $newpass=htmlspecialchars($_POST['newpass']);
                                  $newpasscon=htmlspecialchars($_POST['newpasscon']);


                                  ///tester si le nom existe

                                    $stmtro = $connect->prepare("SELECT * FROM `user` WHERE identifiant = :iden"); //tester si le nom existe
                                  $stmtro->bindParam(':iden' ,$iden , PDO::PARAM_STR);
                                    $stmtro->execute();

                                      $find_roweo = $stmtro->fetch();
                                    $fetch_nomeo=$find_roweo['identifiant'];
                                    $name =  $fetch_nomeo;

                                       if ($name==NULL){
                                        echo "
                                  <div>Attention, petite erreur.
                                     <div class='page-title-subheading'>\"$iden\" ne figure pas dans la base de donnée en tant que Utilisateur,
                                  Veuillez contacter l'Administrateur.

                                     </div>
                                  </div>";

                                     }


                                    else { //else nom
                                      $stmtr = $connect->prepare("SELECT * FROM `user` WHERE identifiant = :iden"); //tester si le nom existe
                                    $stmtr->bindParam(':iden' ,$iden , PDO::PARAM_STR);
                                      $stmtr->execute();

                                        $find_rower = $stmtr->fetch();
                                      $fetch_nomer=$find_rower['mdp'];
                                      $passt =  $fetch_nomer;

                                 if  ($passt!= $oldpass) { // test de la validité du mdp

                                   echo "
                             <div>Attention, petite erreur.
                                <div class='page-title-subheading'>Le mot de passe saisie est invalide.
     L'ancien mot de passe n'est pas correct.

                                </div>
                             </div>";
                                 }



                                  //////////fin du test nom

                                   else{

                                     if($newpass!=$newpasscon){// test de similutide de newpass et newpasscon
                                       echo "
                                 <div>Attention, petite erreur.
                                    <div class='page-title-subheading'>Le mot de passe de confirmation saisie est différente.


                                    </div>
                                 </div>";
                                     }
                                     else{// si tout va bien

                                  $inst=$connect->prepare("UPDATE user SET mdp = :newpass, date=NOW() WHERE identifiant = :iden");
                                  $inst->bindParam(':iden' ,$iden , PDO::PARAM_STR);
                                  $inst->bindParam(':newpass' ,$newpass , PDO::PARAM_STR);
                                  $inst->execute();


                                   if (isset($inst)) {
                                     echo "
                                  <div>Opération réussie
                                     <div class='page-title-subheading'> Le mot de passe \"$oldpass \" a été changé
                                   avec sussès.

                                     </div>
                                  </div>

                                   ";
                                   }

                                 }
                                 }

                                }//fi du else nom

                                 } // fin du grand if


                                ?>
                                <!--fin Changement mdp-->

                                <!-----FeedBack----->
                                <?php
                                if (isset($_POST['submitFe'])) {

                                  $nature=htmlspecialchars($_POST['nature']);
                                  $niveau=htmlspecialchars($_POST['niveau']);
                                  $descr=htmlspecialchars($_POST['descr']);


                                  $ins_produitr=$connect->prepare("INSERT INTO `feedback` (`id`, `nature`, `niveau`, `descrip`, date) VALUES (NULL, :nature, :niveau, :descr, NOW());");
                                  $ins_produitr->bindParam(':nature' ,$nature , PDO::PARAM_STR);
                                  $ins_produitr->bindParam(':niveau' ,$niveau, PDO::PARAM_STR);
                                  $ins_produitr->bindParam(':descr' ,$descr , PDO::PARAM_STR);
                                  $ins_produitr->execute();



                                  if (isset($ins_produitr)) {
                                    echo "
                                 <div>Opération réussie
                                    <div class='page-title-subheading'> Votre feedback sur \" $nature \" a été enregistré avec succès.


                                    </div>
                                 </div>

                                  ";
                                  }



                                 }//fin grand if


                                ?>
                                <!--fin feedback-->

<!-- Opération de modification d'une transaction de la caisse -->

<?php 
                                 if (isset($_POST['submitEditCaisse'])) {
                                   

                                  $date_enc=htmlspecialchars($_POST['date_enc']);
                                  $libelle=htmlspecialchars($_POST['libelle']);
                                  $montant=htmlspecialchars($_POST['montant']);

                                  $idd=htmlspecialchars($_POST['newidd']);
                                  
 
                                 
                                  $ins_produitro=$connect->prepare("UPDATE content SET date_op = :date_enc, libe = :libelle, mont = :montant  WHERE id = :newidd ");
                                   $ins_produitro->bindParam(':date_enc' ,$date_enc , PDO::PARAM_STR);
                                   $ins_produitro->bindParam(':libelle' ,$libelle, PDO::PARAM_STR);
                                   $ins_produitro->bindParam(':montant' ,$montant , PDO::PARAM_STR);
                                   $ins_produitro->bindParam(':newidd' ,$idd , PDO::PARAM_STR);
                                   $ins_produitro->execute();
 
                                   //$ins_produitro=$connect->prepare("DELETE FROM `content` WHERE `id` = 1  ;");
                                   //$ins_produitro->bindParam(':id' ,$fetch_id , PDO::PARAM_STR);

                                   if (isset($ins_produitro)) {
                                   echo"
                                    <div>Opération réussie
                                    <div class='page-title-subheading'>L'opération a été modifié avec succès.
                    
                                        </div>
                                   </div>";


                                   }                     

                                } // fin du grand if


                                ?>
                                <!--fin opération-->


                                
<!-- Opération de modification d'une transaction de la banque-->

<?php 
                                 if (isset($_POST['submitEditBanque'])) {
                                   

                                  $date_enc=htmlspecialchars($_POST['date_enc']);
                                  $libelle=htmlspecialchars($_POST['libelle']);
                                  $montant=htmlspecialchars($_POST['montant']);

                                  $idd=htmlspecialchars($_POST['newidd']);
                                  
 
                                 
                                  $ins_produitro=$connect->prepare("UPDATE content SET date_op = :date_enc, libe = :libelle, mont = :montant  WHERE id = :newidd ");
                                   $ins_produitro->bindParam(':date_enc' ,$date_enc , PDO::PARAM_STR);
                                   $ins_produitro->bindParam(':libelle' ,$libelle, PDO::PARAM_STR);
                                   $ins_produitro->bindParam(':montant' ,$montant , PDO::PARAM_STR);
                                   $ins_produitro->bindParam(':newidd' ,$idd , PDO::PARAM_STR);
                                   $ins_produitro->execute();
 
                                   //$ins_produitro=$connect->prepare("DELETE FROM `content` WHERE `id` = 1  ;");
                                   //$ins_produitro->bindParam(':id' ,$fetch_id , PDO::PARAM_STR);

                                   if (isset($ins_produitro)) {
                                   echo"
                                    <div>Opération réussie
                                    <div class='page-title-subheading'>L'opération a été modifié avec succès.
                    
                                        </div>
                                   </div>";


                                   }                     

                                } // fin du grand if


                                ?>
                                <!--fin opération-->

<!-- Opération de suppression d'une transaction de la banque-->

<?php 
                                 if (isset($_POST['submitSupBanque'])) {
                                   
                                  $idd=htmlspecialchars($_POST['newidd']);
                                  
 
                                 
                                  $ins_produitrou=$connect->prepare("DELETE FROM `content` WHERE `id` = :newidd ");
                                   $ins_produitrou->bindParam(':newidd' ,$idd , PDO::PARAM_STR);
                                   $ins_produitrou->execute();

                                   if (isset($ins_produitrou)) {
                                   echo"
                                    <div>Opération réussie
                                    <div class='page-title-subheading'>L'opération a été supprimé avec succès.
                    
                                        </div>
                                   </div>";


                                   }                     

                                } // fin du grand if


                                ?>
                                <!--fin opération-->


                 <!-- Opération de suppression d'une transaction de la caisse-->

<?php 
                                 if (isset($_POST['submitSupCaisse'])) {
                                   
                                  $idd=htmlspecialchars($_POST['newidd']);
                                  
 
                                 
                                  $ins_produitroui=$connect->prepare("DELETE FROM `content` WHERE `id` = :newidd ");
                                   $ins_produitroui->bindParam(':newidd' ,$idd , PDO::PARAM_STR);
                                   $ins_produitroui->execute();

                                   if (isset($ins_produitroui)) {
                                   echo"
                                    <div>Opération réussie
                                    <div class='page-title-subheading'>L'opération a été supprimé avec succès.
                    
                                        </div>
                                   </div>";


                                   }                     

                                } // fin du grand if


                                ?>
                                <!--fin opération-->


                                </div>
							                </div>
                        </div>
                    
              
						<!---- Début des vues rapides---->

   <!-- ------------------------------------------------------------------>
   <!-- Chercher le total pour afficher -> Caisse -->
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
<!-- Chercher le total pour afficher -> Banque -->
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

						<div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading"> Recettes </div>
                                            <div class="widget-subheading">Total des Recettes </div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white">
                                            <span><?php echo $count_enc; ?></span>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                          <div class="widget-heading"> Dépenses </div>
                                          <div class="widget-subheading">Total des Dépenses </div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white">
                                            <span><?php echo $count_dec; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-premium-dark">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                          <div class="widget-heading"> Balance </div>
                                          <div class="widget-subheading">Niveau de la tresorerie </div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white">
                                              <span>
                                                
                                                <?php
                                                  echo $count_enc-$count_dec;
                                                 ?>
                                             </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
						<!---- Fin des vues rapides---->
						<!-----------Début des charts----->
                        <div class="row">
				

                      <!-- Transactions quotidienne de la caisse-->
                      <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Transactions de la caisse en ce jour</h5>
                                        <table class="mb-0 table bg-deep-blue">
                                          <?php
                                           $stmt_find = $connect->prepare("SELECT * FROM `content`WHERE num_compte=571 ");
                                           $stmt_find->execute();//gérer le cas null
                                           $find_row = $stmt_find->fetch();
                                           $id=$find_row['id'];

                                           if ($id ==NULL){
                                         


                                           }
                                             else{
                                         ?>
                                              <thead>
                                            <tr>
                                                <th>#</th>

                                                <th>N° Compte</th>
                                                <th>Date</th>
                                                <th>Libellé</th>
                                                <th>Débit</th>
                                                <th>Crédit</th>
                                                <th>Opération</th>

                                            </tr>
                                          
                                            </thead>

                                            
                                              <?php

                                                $stmt_findt = $connect->prepare("SELECT * FROM `content`WHERE num_compte=571 ");
                                                $stmt_findt->execute();//

                                                while ($find_row = $stmt_findt->fetch()) {
                                                  $fetch_idd=$find_row['id'];
                                                
                                              	  $fetch_nom=$find_row['num_compte'];
                                                  $fetch_prenom= $find_row['date_op'];
                                                  $fetch_classe= $find_row ['libe'];
                                                  $fetch_motif=$find_row['mont'];
                                                  
                                                  $fetch_genre=$find_row['genre'];
                                                  $antichambre=$fetch_genre;
                                    

                                                  if ($antichambre=='débit'){
                                                    $fetch_debit=$fetch_motif;
                                                    $fetch_credit='-';
                                                  }
                                                  elseif ($antichambre=='crédit'){
                                                    $fetch_debit='-';
                                                    $fetch_credit=$fetch_motif;
                                                    
                                                  }
                                                  else {
                                                    $truc=0;
                                                  }
                                                  
                                                  $jour=date('d');
                                              $mois=date('m');
                                              $annee=date('Y');
                                              $date_now=$annee.'-'.$mois.'-'.$jour;
                                              if ($fetch_prenom==$date_now){
                                               

                                              ?>
                                           
                                            <tbody>
                            

                                              
                                               
                                            <tr>
                                                <th scope="row"><?php echo $fetch_idd;  ?></th>

                                                      <td><?php echo $fetch_nom;  ?></td>
                                                      <td><?php echo $fetch_prenom;  ?></td>
                                                      <td><?php echo $fetch_classe; ?></td>
                                                      <td><?php echo $fetch_debit; ?></td>
                                                      <td><?php echo $fetch_credit; ?></td>
                                                      <td> 
                                                        <!-- <button type="submit" method="post" name="submitOp " >
                                                          <i class="fa fa-fw" aria-hidden="true" ></i></button>  -->
                                                        <a href="" data-toggle="modal" data-target="#SupCaisseModal">
                                                         <i class="fa fa-fw" aria-hidden="true" ></i></a>
                                                       
                                                        <a href="" data-toggle="modal" data-target="#EditCaisseModal">
                                                          <i class="fa fa-fw" aria-hidden="true" ></i></a>
                                                       </td>
                                                      
                                                      

                                                <?php }//fin if test date
                                            
                                                 } // fin du while
                                        }//fin du else test vide
                                         ?>
                                            </tr>
                                            <!-- <tr>
                                            <th scope="row">-</th>

                                                      <td>-</td>
                                                      <td>-</td>
                                                      <th>Total</th>
                                            <td><?php echo $count2; ?></td>
                                            <td><?php echo $count02; ?></td>
                                            </tr> -->

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    <!---fin prodRup----->

                    <!-- Transaction de la banque-->
                    <div class="col-lg-12">
                              <div class="main-card mb-3 card">
                                  <div class="card-body"><h5 class="card-title">Transactions de la banque en ce jour</h5>
                                      <table class="mb-0 table bg-sunny-morning">
                                        <?php
                                         $stmt_find = $connect->prepare("SELECT * FROM `content`WHERE num_compte=521 ");
                                         $stmt_find->execute();//gérer le cas null, cad pas de prod en rupture de stockk
                                         $find_row = $stmt_find->fetch();
                                         $id=$find_row['id'];

                                         if ($id ==NULL){
                                       


                                         }
                                           else{
                                       ?>
                                          
														<thead>
                                          <tr>
                                              <th>#</th>

                                              <th>N° Compte</th>
                                                <th>Date</th>
                                                <th>Libellé</th>
                                                <th>Débit</th>
                                                <th>Crédit</th>
                                                <th>Opération</th>

                                          </tr>
                                          </thead>
                                          
                                            <?php

                                              $stmt_find = $connect->prepare("SELECT * FROM `content`WHERE num_compte=521 ");
                                              $stmt_find->execute();//gérer le cas null, cad pas de prod en rupture de stockk

                                              while ($find_row = $stmt_find->fetch()) {
                                                  $fetch_idt=$find_row['id'];
                                                
                                              	  $fetch_nomt=$find_row['num_compte'];
                                                  $fetch_prenomt= $find_row['date_op'];
                                                  $fetch_classet= $find_row ['libe'];
                                                  $fetch_motift=$find_row['mont'];

                                                  $fetch_genre=$find_row['genre'];
                                                  $antichambre1=$fetch_genre;
                                    

                                                  if ($antichambre1=='débit'){
                                                    $fetch_debitt=$fetch_motift;
                                                    $fetch_creditt='-';
                                                  }
                                                  elseif ($antichambre1=='crédit'){
                                                    $fetch_debitt='-';
                                                    $fetch_creditt=$fetch_motift;
                                                    
                                                  }
                                                  else {
                                                    $truc=0;
                                                  }

                                                  $jour=date('d');
                                                  $mois=date('m');
                                                  $annee=date('Y');
                                                  $date_now=$annee.'-'.$mois.'-'.$jour;
                                                  if ($fetch_prenomt==$date_now){
    
                                                  
                                            ?>

                                       
                                          <tbody>

                                          <tr>
                                              <th scope="row"><?php echo $fetch_idt;  ?></th>

                                                    <td><?php echo $fetch_nomt;  ?></td>
                                                    <td><?php echo $fetch_prenomt;  ?></td>
                                                    <td><?php echo $fetch_classet; ?></td>
                                                    
                                                    <td><?php echo $fetch_debitt; ?></td>
                                                    <td><?php echo $fetch_creditt; ?></td>
                                                    <td>
                                                    <a href="" data-toggle="modal" data-target="#SupBanqueModal">
                                                         <i class="fa fa-fw" aria-hidden="true" ></i></a>
                                                       
                                                        <a href="" data-toggle="modal" data-target="#EditBanqueModal">
                                                          <i class="fa fa-fw" aria-hidden="true" ></i></a>
                                                   </td>
                                                  <?php }// fin du if test date
                                                 
                                      } // fin du while
                                      }//fin du else test vide
                                       ?>
                                          </tr>
                                         

                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                  <!---fin agenda---->
       </div>

                   <!-----  Le footer ---->
						<?php include 'footer.php'; ?>
					<!-------fin footer----------->
				   </div>
