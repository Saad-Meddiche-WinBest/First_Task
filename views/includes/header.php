<?php
$pageS1 = PageController::get_info_of_page($_GET['page']);
?>

<!DOCTYPE html>
<html lang="en" style="height: 100vh">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Inclide The Style -->
    <link rel="stylesheet" href="./views/includes/assets/scss/main.css" />

    <!-- Include icons from fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <title><?php echo $pageS1['Title'] ?></title>
</head>

<body style="height: 100%">
    <!-- Menu -->
    <div class="container">
        <div class="child_container" id="menu">
            <div class="Menu">
                <div class="Menu_Content">
                    <div class="Logo">
                        <img src="./views/includes/assets/img/Logo.png" alt="" id="logo" />
                    </div>

                    <input type="checkbox" class="menu-btn" id="menu-btn" hidden />
                    <label for="menu-btn">
                        <div class="menu-icon">
                            <div class="bar bar_1"></div>
                            <div class="bar bar_2"></div>
                            <div class="bar bar_3"></div>
                        </div>
                    </label>

                    <div class="Routes">
                        <div class="Route">
                            <a href="./home">
                                <p>ACCUEIL</p>
                            </a>
                        </div>
                        <div class="Route">
                            <a href="./aPropos">
                                <p>A PROPOS</p>
                            </a>
                        </div>
                        <div class="Route">
                            <a href="./notreEntreprise">
                                <p>NOTRE EXPERTISE</p>
                            </a>
                        </div>
                        <div class="Route">
                            <a href="./nuisibles">
                                <p>NUISIBLES</p>
                            </a>
                        </div>
                        <div class="Route">
                            <p>
                                NOS ACTIVITES
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                </svg>
                            </p>
                            <div class="Drop">
                                <div class="Link">
                                    <a href="installationCamera">installation camera surveillance</a>
                                </div>
                                <div class="Link">
                                    <a href="depannageCamera">dépannage camera surveillance</a>
                                </div>
                                <div class="Link">
                                    <a href="venteCamera">vente de camera surveillance</a>
                                </div>
                                <div class="Link">
                                    <a href="controleAcces">Contrôle d’accès</a>
                                </div>
                                <div class="Link">
                                    <a href="videoprotection">Vidéoprotection</a>
                                </div>
                                <div class="Link">
                                    <a href="detectionIntrusion">Détection d'intrusion</a>
                                </div>
                                <div class="Link">
                                    <a href="detectionIncendie">Détection incendie</a>
                                </div>
                                <div class="Link">
                                    <a href="cybergardiennage">Cybergardiennage</a>
                                </div>
                                <div class="Link">
                                    <a href="auditAnalyseDuBesoin">Audit et analyse du besoin</a>
                                </div>
                                <div class="Link">
                                    <a href="securiteGardiennage">securite gardiennage</a>
                                </div>


                            </div>
                        </div>
                        <div class="Route">
                            <a href="./blog">
                                <p>BLOG</p>
                            </a>
                        </div>
                        <div class="Route">
                            <a href="./contact">
                                <p>CONTACT</p>
                            </a>
                        </div>
                    </div>

                    <div class="Demander">
                        <a href="contact"><button>DEMANDEZ DEVIS</button></a>
                    </div>
                </div>
            </div>

        </div>
    </div>