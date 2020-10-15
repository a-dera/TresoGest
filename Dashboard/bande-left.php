 <!-------Menu gauche-------->

				<?php
require 'connect.php'; ?>


 <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Tableau de bord</li>
                                <li>
                                    <a href="#" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Entreprise Alpha
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Fiches</li>
                                <li

                                >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-drawer"></i>
                                        Caisse
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul

                                    >

                                    
																				<li>
                                            <a href="../Addson/flux_caisse.php" >
                                                <i class="metismenu-icon">
                                                </i> Consultation de flux
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li

                                >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-wallet"></i>
                                       Banque
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul

                                    >
                                        <li>
                                            <a href="../Addson/flux_banque.php">
                                                <i class="metismenu-icon">
                                                </i>Consultation des flux
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                             
                                <li class="app-sidebar__heading">Opération</li>
                        
																	
																	<li>
																		<a href="#">
									                                        <i class="metismenu-icon pe-7s-drawer"></i>
									                                        Caisse
									                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
									                                    </a>
									                                    <ul

									                                    >

																													<li>
									                                            <a href="" data-toggle="modal" data-target="#EncModal" >
									                                                <i class="metismenu-icon">
									                                                </i>Encaissement
									                                            </a>
									                                        </li>
									                                        <li>
									                                            <a href="" data-toggle="modal" data-target="#DecModal">
									                                                <i class="metismenu-icon">
									                                                </i>Décaissement
									                                            </a>
									                                        </li>
																												</ul>
                                </li>
																<li>
																	<a href="#">
																												<i class="metismenu-icon pe-7s-wallet"></i>
																												Banque
																												<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
																										</a>
																										<ul

																										>
																												<li>
																														<a href="" data-toggle="modal" data-target="#EnModal" >
																																<i class="metismenu-icon">
																																</i>Entrée
																														</a>
																												</li>
																												<li>
																														<a href="" data-toggle="modal" data-target="#SorModal">
																																<i class="metismenu-icon">
																																</i> Sortie
																														</a>
																												</li>
																											</ul>
															</li>
															<li>
																<a href="#">
																											<i class="metismenu-icon pe-7s-user"></i>
																											Paramètres de connexion
																											<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
																									</a>
																									<ul

																									>
																											<li>
																													<a href="" data-toggle="modal" data-target="#userModal" >
																															<i class="metismenu-icon">
																															</i>Changer le nom d'Utilisateur
																													</a>
																											</li>
																											<li>
																													<a href="" data-toggle="modal" data-target="#mdpModal" >
																															<i class="metismenu-icon">
																															</i>Changer le mot de passe
																													</a>
																											</li>
																										</ul>
																									</li>
																<li>
																	<a href="#">
																												<i class="metismenu-icon pe-7s-back"></i>
																												Feedbacks
																												<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
																										</a>
																										<ul











																										>
																												<li>
																														<a href="" data-toggle="modal" data-target="#feedModal" >
																																<i class="metismenu-icon">
																																</i>Enregistrer un problème
																														</a>
																												</li>
																												<li>
																														<a href="../Addson/fichesfeed.php" >
																																<i class="metismenu-icon">
																																</i>Consulter les Feedbacks
																														</a>
																												</li>
																											</ul>
																										</li>

                            </ul>
                        </div>
                    </div>
                </div>
