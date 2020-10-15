<?php
require '../connect.php'; 
include 'process.php';?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Consultation des flux de la banque </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->

    <!-- End Left menu area -->
    <!-- Start Welcome area -->

            <!-- Début PHP -->

            <!-- Fin provisoire du PHP -->

        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                              <h5><a href="../Dashboard/index.php">Retour au tableau de bord</a> </h5>
                                <div class="main-sparkline13-hd">
                                    <h1>Consultation <span class="table-project-n">Flux</span> de la Banque</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Exporter</option>
											<option value="all">Tout</option>
											<option value="selected">Sélection</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                <th data-field="id">ID(Ordre)</th>
                                                <th data-field="" >N° Compte</th> 
                                                <th data-field="date" >Date</th>
                                                <th data-field="libelle" >Libellé</th>
                                                <th data-field="débit">Débit</th>
                                                <th data-field="crédit">Crédit</th>
                                               

                                                <!--<th data-field="action">Action</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <!--début du php---->
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

                                            ?>
                                          <tr>
                                                    <td scope="row"><?php echo $fetch_idt;  ?></td>
                                                    <td><?php echo $fetch_nomt;  ?></td>
                                                    <td><?php echo $fetch_prenomt;  ?></td>
                                                    <td><?php echo $fetch_classet; ?></td>
                                                    
                                                    <td><?php echo $fetch_debitt; ?></td>
                                                    <td><?php echo $fetch_creditt; ?></td>

                                      <?php } // fin du while
                                     
                                       ?>
                                          </tr>
                                          <tr>
                                            <th scope="row">-</th>

                                                      <td>-</td>
                                                      <td>-</td>
                                                      <td>-</td>
                                                      <td> <strong>Total</strong> </td>
                                            <td><?php echo $count01; ?></td>
                                            <td><?php echo $count1; ?></td>
                                            </tr>

                                            <!-- solde de la banque -->

                                            <tr>
                                            <th scope="row">-</th>

                                                      <td>-</td>
                                                      <td>-</td>
                                                      <td>-</td>
                                                      <td> <strong>Solde</strong> </td>
                                              <?php 
                                              $solde_caisse=$count01-$count1;
                                              $sd="SC =";
                                              $sc="SD =";
                                              if ($solde_caisse>0){
                                                $débit_caisse='-';
                                                
                                                $crédit_caisse=$solde_caisse;

                                              }
                                              elseif($solde_caisse<0){
                                                $crédit_caisse='-';
                                               
                                                $débit_caisse=$solde_caisse*(-1);

                                              }
                                              else{
                                                $crédit_caisse=0;
                                                $débit_caisse=0;

                                              }
                                              ?>
                                            <td><?php 
                                            if ($débit_caisse!='-'){
                                              echo $sd;
                                              echo $débit_caisse;

                                            }
                                            else{echo $débit_caisse;}
                                             ?></td>
                                            <td><?php 
                                            if ($crédit_caisse!='-'){
                                              echo $sc;
                                            echo $crédit_caisse; }
                                            else{echo $crédit_caisse;}?></td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      


    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>
