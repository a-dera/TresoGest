<?php
require '../connect.php'; ?>

<!doctype html>
<html lang="Fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Votre tableau de bord</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Projet finale du cours Gestion de la Production, portant sur la Gestion de la Tresorerie.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="css/notifications/Lobibox.min.css">
    <link rel="stylesheet" href="css/notifications/notifications.css">

<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
	<!--Place du header, la bande-->
	<?php include 'header.php'; ?>
	<!------ fin header  ----->
        <div class="app-main">
        <!---la bande gauche, le menu----->
        <?php include 'bande-left.php'; ?>
        <!-------fin bande left----------->
        <!---le tableau de bord, chargeable en fonction des données des tables---->
        <?php include 'dashboard.php'; ?>
        <!-------fin dashboard----------->
        <!-------Note: le pied de page est inclus dans le dashboard----------->

        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <!-- notification JS
    ============================================ -->
    <script src="js/notifications/Lobibox.js"></script>
    <script src="js/notifications/notification-active.js"></script>
	<!-- JS des charts
		============================================ -->
    <script src="js/chart.js"></script>
	<script src="js/utils.js"></script>
  <!-- datapicker JS
  		============================================ -->
      <script src="js/bootstrap-datepicker.js"></script>
      <script src="js/datepicker-active.js"></script>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
<!----------------------------------------------------------------------------------------------------------------->
<!-- Modal pour encaissement-->
<div class="modal fade" id="EncModal" tabindex="-1" role="dialog" aria-labelledby="EncModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EncModalLabel">Encaissement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="formID" action="" method="post">
            <div class="modal-body">

               <i class="metismenu-icon pe-7s-bookmarks"></i>
              <label class="">Date: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">

                  <input name="date_enc" type="text" placeholder="Exemple: 2020-01-24" class="form-control validate[required]" required  />
              </div><br>
              <i class="metismenu-icon pe-7s-bookmarks"></i>
             <label class="">Libellé: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
             <div class="input-group">

                 <input name="libelle" type="text" placeholder="" class="form-control validate[required]" required  />
             </div><br>
			  <i class="metismenu-icon pe-7s-server"></i>
               <label class="">Montant : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">

                  <input name="montant" type="text" placeholder="" class="form-control validate[required]" required  />
              </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" name="submitEnc" class="btn btn-primary" data="submitEnc">Valider</button>
            </div>
			</form>
        </div>
    </div>
</div>

<!-- Modal pour décaissement-->
<div class="modal fade" id="DecModal" tabindex="-1" role="dialog" aria-labelledby="DecModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DecModalLabel">Décaissement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="formID" action="" method="post">
            <div class="modal-body">

               <i class="metismenu-icon pe-7s-bookmarks"></i>
              <label class="">Date: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">

                  <input name="date_dec" type="text" placeholder="Exemple:2020-01-24" class="form-control validate[required]" required  />
              </div><br>
              <i class="metismenu-icon pe-7s-bookmarks"></i>
             <label class="">Libellé: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
             <div class="input-group">

                 <input name="libelle" type="text" placeholder="" class="form-control validate[required]" required  />
             </div><br>
			  <i class="metismenu-icon pe-7s-server"></i>
               <label class="">Montant : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">

                  <input name="montant" type="text" placeholder="" class="form-control validate[required]" required  />
              </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" name="submitDec" class="btn btn-primary" data="submitDec">Valider</button>
            </div>
			</form>
        </div>
    </div>
</div>

<!-- Modal pour entrée dans la banque-->
<div class="modal fade" id="EnModal" tabindex="-1" role="dialog" aria-labelledby="EnModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EnModalLabel">Entrée</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="formID" action="" method="post">
            <div class="modal-body">

               <i class="metismenu-icon pe-7s-bookmarks"></i>
              <label class="">Date: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">

                  <input name="date_ban" type="text" placeholder="Exemple:2020-01-24" class="form-control validate[required]" required  />
              </div><br>
              <i class="metismenu-icon pe-7s-bookmarks"></i>
             <label class="">Libellé: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
             <div class="input-group">

                 <input name="libelle" type="text" placeholder="" class="form-control validate[required]" required  />
             </div><br>
			  <i class="metismenu-icon pe-7s-server"></i>
               <label class="">Montant : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">

                  <input name="montant" type="text" placeholder="" class="form-control validate[required]" required  />
              </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" name="submitEn" class="btn btn-primary" data="submitEn">Valider</button>
            </div>
			</form>
        </div>
    </div>
</div>

<!-- Modal pour une sortie de la banque-->
<div class="modal fade" id="SorModal" tabindex="-1" role="dialog" aria-labelledby="SorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SorModalLabel">Sortie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="formID" action="" method="post">
            <div class="modal-body">

               <i class="metismenu-icon pe-7s-bookmarks"></i>
              <label class="">Date: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">

                  <input name="date_ban" type="text" placeholder="Exemple:2020-01-24" class="form-control validate[required]" required  />
              </div><br>
              <i class="metismenu-icon pe-7s-bookmarks"></i>
             <label class="">Libellé: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
             <div class="input-group">

                 <input name="libelle" type="text" placeholder="" class="form-control validate[required]" required  />
             </div><br>
			  <i class="metismenu-icon pe-7s-server"></i>
               <label class="">Montant : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">

                  <input name="montant" type="text" placeholder="" class="form-control validate[required]" required  />
              </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" name="submitSor" class="btn btn-primary" data="submitSor">Valider</button>
            </div>
			</form>
        </div>
    </div>
</div>





<!-- Info Compte-->
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Informations du compte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
              <?php
                  $info = $connect->prepare("SELECT * FROM `user`"); //appel des éléments de la base
                  $info->execute();
                  $find_row = $info->fetch();

                    $fetch_username=$find_row['username'];
                    $fetch_id=$find_row['identifiant'];
					$fetch_date=$find_row['date'];
                ?>
              <i class="metismenu-icon pe-7s-bookmarks"></i>
              <label class=""><strong>Nom d'utilisateur :</strong> Administrateur </label>
              <br>
                <i class="metismenu-icon pe-7s-bookmarks"></i>
                <label class=""><strong>Identifiant :</strong> <?php echo $fetch_id; ?></label>
                <br>
                 
                   <i class="metismenu-icon pe-7s-bookmarks"></i>
                   <label class=""><strong>Date de début :</strong>  <?php echo $fetch_date; ?></label>
                   <br>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>

            </div>
            

        </div>
    </div>
</div>
<!-- Info Sur la tresorerie-->
<div class="modal fade" id="tresoModal" tabindex="-1" role="dialog" aria-labelledby="tresoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tresoModalLabel">Informations sur la tresorerie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

              <i class="metismenu-icon pe-7s-bookmarks"></i>
              <label class=""><strong>Nom de l'Entreprise:</strong> Alpha<!-- gérere par le php--> </label>
              <br>
                <i class="metismenu-icon pe-7s-bookmarks"></i>
                <label class=""><strong>Statut:</strong> SARL<!-- gérere par le php--></label>
                <br>

                   <i class="metismenu-icon pe-7s-bookmarks"></i>
                   <label class=""><strong>Ville/Secteur :</strong> Somgandé, Ouagadougou <!-- gérere par le php--></label>
                   <br>
                    <i class="metismenu-icon pe-7s-bookmarks"></i>
                    <label class=""><strong>Date de création :</strong> 2020-01-09<!-- gérere par le php--></label>
                    <br>
                     <i class="metismenu-icon pe-7s-bookmarks"></i>
                     <label class=""><strong>Premier responsable :</strong> Administrateur <!-- gérere par le php--></label>
                     <br>
                     <i class="metismenu-icon pe-7s-bookmarks"></i>
                     <label class=""><strong>Contact:</strong> +226 00-00-00-00</label>
                     <br>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>

        </div>
    </div>
</div>




	 <!-- Message modale -->


   <!-- Changement du nom d'utilisateur-->
   <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="userModalLabel">Changement du nom d'Identifiant</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <form id="formID" action="" method="post">
               <div class="modal-body">

                 <i class="metismenu-icon pe-7s-bookmarks"></i>
                 <label class=""><strong>Ancien Identifiant :</strong> <!-- gérere par le php--> </label>
                 <div class="input-group">

                     <input name="oldid" type="text" placeholder="" class="form-control validate[required]" required  />
                 </div>
                 <br>
                   <i class="metismenu-icon pe-7s-bookmarks"></i>
                   <label class=""><strong>Nouveau Identifiant  :</strong> <!-- gérere par le php--></label>
                   <div class="input-group">

                       <input name="newid" type="text" placeholder="" class="form-control validate[required]" required  />
                   </div>
                   <br>
                     <i class="metismenu-icon pe-7s-bookmarks"></i>
                     <label class=""><strong>Mot de passe :</strong></label>
                     <div class="input-group">

                         <input name="pass" type="password" placeholder="" class="form-control validate[required]" required  />
                     </div>
                     <br>

               </div>

               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                   <button type="submit" name="submitId" class="btn btn-primary" data="submitId">Valider</button>
               </div>
                </form>
           </div>
       </div>
   </div>

   <!-- Changement du mot de passe-->
   <div class="modal fade" id="mdpModal" tabindex="-1" role="dialog" aria-labelledby="mdpModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="mdpModalLabel">Changement du mot de passe</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <form id="formID" action="" method="post">
               <div class="modal-body">
                   <i class="metismenu-icon pe-7s-bookmarks"></i>
                   <label class=""><strong>Identifiant :</strong> <!-- gérere par le php--></label>
                   <div class="input-group">

                       <input name="iden" type="text" placeholder="" class="form-control validate[required]" required  />
                   </div>
                   <br>
                     <i class="metismenu-icon pe-7s-bookmarks"></i>
                     <label class=""><strong>Ancien mot de passe :</strong></label>
                     <div class="input-group">

                         <input name="oldpass" type="password" placeholder="" class="form-control validate[required]" required  />
                     </div>
                     <br>
                      <i class="metismenu-icon pe-7s-bookmarks"></i>
                      <label class=""><strong>Nouveau mot de passe :</strong> <!-- gérere par le php--></label>
                      <div class="input-group">

                          <input name="newpass" type="password" placeholder="" class="form-control validate[required]" required  />
                      </div>
                      <br>
                      <i class="metismenu-icon pe-7s-bookmarks"></i>
                      <label class=""><strong>Confirmez le nouveau mot de passe :</strong> <!-- gérere par le php--></label>
                      <div class="input-group">

                          <input name="newpasscon" type="password" placeholder="" class="form-control validate[required]" required  />
                      </div>
                      <br>



               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                   <button type="submit" name="submitCm" class="btn btn-primary" data="submitCm">Valider</button>
               </div>
             </form>

           </div>
       </div>
   </div>

   <!-- Engistrer un feedback-->
   <div class="modal fade" id="feedModal" tabindex="-1" role="dialog" aria-labelledby="feedModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="feedModalLabel">Enregistrer un problème</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>

               <div class="modal-body">
                 <p>Décrivez clairement en quoi consite le problème. Le champ 'niveau' sert de repère pour prioriser les bugs.
          Ainsi, si vous pensez que le bug est très important et mérite d'être régler immédiatement, choisissez le niveau le plus élévé possible. </p>

                 <form id="formID" action="" method="post">

                  <div class="input-group">
                   <div class="input-group-prepend">
                     <button class="btn btn-secondary">Nature :</button>
                   </div>
                   <input name="nature" type="text" placeholder="La nature du problème" class="form-control validate[required]" required /></div>
                   <br>

                        <div class="input-group">
                   <div class="input-group-prepend">
                     <button class="btn btn-secondary">Le niveau de disfonctionnement :</button>
                   </div>
                             <select name="niveau" class="form-control" required >
                     <option>0</option>
                             <option>1</option>
                             <option>2</option>
                     <option>3</option>
                     <option>4</option>
                     <option>5</option>
                             </select>
                         </div>
                   <br>

                   <div class="input-group">
                    <textarea class="form-control" name="descr" rows="5" required  placeholder="Décrivez le problème que vous rencontrez"></textarea>
                   </div>

               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                   <button type="submit" name="submitFe" class="btn btn-primary" data="submitFe">Valider</button>
               </div>
               </form>
           </div>
       </div>
   </div>

   <!-- Modal pour éditer (modifier) une ligne de transaction-->
<div class="modal fade" id="EditCaisseModal" tabindex="-1" role="dialog" aria-labelledby="EditCaisseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditCaisseModalLabel">Modification de la transaction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="formID" action="" method="post">
            <div class="modal-body">

               <i class="metismenu-icon pe-7s-bookmarks"></i>
              <label class="">Date: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">

                  <input name="date_enc" type="text" value="<?php echo $fetch_prenom;  ?>" class="form-control validate[required]" required  />
              </div><br>
              <i class="metismenu-icon pe-7s-bookmarks"></i>
             <label class="">Libellé: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
             <div class="input-group">

                 <input name="libelle" type="text" value="<?php echo $fetch_classe; ?>" class="form-control validate[required]" required  />
             </div><br>
			  <i class="metismenu-icon pe-7s-server"></i>
               <label class="">Montant : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">

                  <input name="montant" type="text" value="<?php echo $fetch_motif; ?>" class="form-control validate[required]" required  />
              </div><br>

              <i class="metismenu-icon pe-7s-server"></i>
               <label class="">ID (non modifiable) : </label>
              <div class="input-group">

                  <input name="newidd" type="text" value="<?php echo $fetch_idd; ?>" class="form-control " />
              </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" name="submitEditCaisse" class="btn btn-primary" data="submitEditCaisse">Valider</button>
            </div>
			</form>
        </div>
    </div>
</div>

   <!-- Modal pour éditer (modifier) une ligne de transaction banque-->
   <div class="modal fade" id="EditBanqueModal" tabindex="-1" role="dialog" aria-labelledby="EditBanqueModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditBanqueModalLabel">Modification de la transaction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="formID" action="" method="post">
            <div class="modal-body">

               <i class="metismenu-icon pe-7s-bookmarks"></i>
              <label class="">Date: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">

                  <input name="date_enc" type="text" value="<?php echo $fetch_prenomt;  ?>" class="form-control validate[required]" required  />
              </div><br>
              <i class="metismenu-icon pe-7s-bookmarks"></i>
             <label class="">Libellé: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
             <div class="input-group">

                 <input name="libelle" type="text" value="<?php echo $fetch_classet; ?>" class="form-control validate[required]" required  />
             </div><br>
			  <i class="metismenu-icon pe-7s-server"></i>
               <label class="">Montant : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">

                  <input name="montant" type="text" value ="<?php echo $fetch_motift; ?>" class="form-control validate[required]" required  />
              </div><br>

              <i class="metismenu-icon pe-7s-server"></i>
               <label class="">ID (non modifiable) : </label>
              <div class="input-group">

                  <input name="newidd" type="text" value="<?php echo $fetch_idt; ?>" class="form-control " />
              </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" name="submitEditBanque" class="btn btn-primary" data="submitEditBanque">Valider</button>
            </div>
			</form>
        </div>
    </div>
</div>


   <!-- Modal pour supprimer une ligne de transaction banque-->
   <div class="modal fade" id="SupBanqueModal" tabindex="-1" role="dialog" aria-labelledby="SupBanqueModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditBanqueModalLabel">Suppression de la transaction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="formID" action="" method="post">
            <div class="modal-body">

            <strong> Voullez vous vraiment effectuer la suppression?</strong><br>
            <label class="">ID (non modifiable) : </label>
            <div class="input-group">

                  <input name="newidd" type="text" value="<?php echo $fetch_idt; ?>" class="form-control " />
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" name="submitSupBanque" class="btn btn-primary" data="submitSupBanque">Valider</button>
            </div>
			</form>
        </div>
    </div>
</div>

  <!-- Modal pour supprimer une ligne de transaction caisse-->
  <div class="modal fade" id="SupCaisseModal" tabindex="-1" role="dialog" aria-labelledby="SupCaisseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SupCaisseModalLabel">Suppression de la transaction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<form id="formID" action="" method="post">
            <div class="modal-body">

            <strong> Voullez vous vraiment effectuer la suppression?</strong><br>
            <label class="">ID (non modifiable) : </label>
            <div class="input-group">

                  <input name="newidd" type="text" value="<?php echo $fetch_idd; ?>" class="form-control " />
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" name="submitSupCaisse" class="btn btn-primary" data="submitSupCaisse">Valider</button>
            </div>
			</form>
        </div>
    </div>
</div>


