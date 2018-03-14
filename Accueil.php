<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link id="pagestyle" href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Lato:300,400,700" type="text/css"/> 
    <title>Antiquité, Décoration, Belgique - Meubles Industriels</title>
</head>
<header>
    
</header>
<body>
    <section class="presentation">
        <div>
            <navebar>
            </navebar>
        </div>
        <div class="card">
            <img class="logo" src="images/logo2.png">
            Antiquité • Décoration • Aménagements d'intérieur
            <p><a class="tel" href="tel:+32495684234" title="Cliquez pour lancer un appel téléphonique: +32 495/20.59.34">☎  +32 495/20.59.34</a></p>
        </div>
        <div class="menu-button">
            <ul>
                <li><a href="presentation.php">Présentation</a></li>
                <li><a href="stock.php">Le Stock</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </section>
    <section class="main_sect">
        <section class="stock">   
            <h2>LE STOCK</h2>
            <p>Fouillez le stock</p>
            <form method="POST" action="accueil.php">
                <input class="textarea" type="text" name="search" placeholder="Exemple : Table">
                <input class="search-but" type="submit" name="submit" value="rechercher">
            </form>
            <div class="last_add">            
                <h2>Derniers Objets</h2>
                <img src="images/img_article01.jpg">
                <img src="images/img_article02.jpg">
                <img src="images/img_article03.jpg">
                <img src="images/img_article04.jpg">
                <img src="images/img_article01.jpg">
                <img src="images/img_article02.jpg">
            </div>
            <div class="switch_page">
                <ul>
                    <li class="current"><a href="accueil/page01.php">1</a></li>
                    <li><a href="accueil/page02.php">2</a></li>
                    <li><a href="accueil/page03.php">3</a></li>
                    <li><a href="accueil/page04.php">4</a></li>
                    <li><a href="accueil/page05.php">5</a></li>
                    <li><a href="accueil/page02.php">Next</a></li>
                </ul>
        </section>
        <section class="stock">
                <p>Fouillez le stock</p>
                <form method="POST" action="accueil.php">
                <input class="textarea" type="text" name="search" placeholder="Exemple : Table">
                <input class="search-but" type="submit" name="submit" value="rechercher">
                </form>
                <div class="keyword_list">
                    <?php
                    $cat = array(
                        "acajou (1)",
                        "Agencement de bar (1)",
                        "art dÃ©co (1)",
                        "Balance (1)",
                        "Barbier (2)",
                        "BibliothÃ¨que (3)",
                        "BibliothÃ¨que de notaire (1)",
                        "bois (1)",
                        "bois recyclÃ© (1)",
                        "Boucherie ancienne (1)",
                        "Bureau (1)",
                        "CanapÃ© (1)",
                        "CanpÃ© (1)",
                        "Chaise bistrot (3)",
                        "chaise de bistrot (1)",
                        "chapeler (1)",
                        "Chevalet (1)",
                        "coffre-fort (3)",
                        "coiffeur (2)",
                        "comptoir (12)",
                        "Comptoir ancien (4)",
                        "Comptoir de bar (5)",
                        "Comptoir de bar en formica (1)",
                        "comptoir de bistrot (3)",
                        "Comptoir de boucherie (1)",
                        "comptoir de boulanger (3)",
                        "Comptoir de boulangerie (2)",
                        "comptoir de cafÃ© (3)",
                        "Comptoir de drapier (2)",
                        "Comptoir de magasin (2)",
                        "Comptoir de mercerie (3)",
                        "Comptoir de mÃ©tier (4)",
                        "Comptoir en marbre (5)",
                        "comptoir galbÃ© (1)",
                        "comptoir vitrÃ© (5)",
                        "Comptoir-caisse (1)",
                        "confessionnal (1)",
                        "console (2)",
                        "dÃ©coration de jardin (1)",
                        "Double-corps (1)",
                        "Element architectural (1)",
                        "Esaclier industriel (1)",
                        "escabeau mÃ©tallique (1)",
                        "Escalier colimaÃ§on (1)",
                        "Escalier en fonte (1)",
                        "Ã©tagÃ¨re (1)",
                        "Formica (1)",
                        "frigo en bois (2)",
                        "herboristerie (1)",
                        "Industriel (1)",
                        "IntÃ©rieur de bistrot (2)",
                        "IntÃ©rieur de pharmacie (4)",
                        "laiton (2)",
                        "lambris (1)",
                        "Lavabo en marbre (1)",
                        "Lion couchÃ© (1)",
                        "magasin (1)",
                        "Maroquinier (1)",
                        "mercerie (3)",
                        "mÃ©tal (1)",
                        "meuble (1)",
                        "Meuble Ã  casiers (1)",
                        "meuble Ã  tiroirs (3)",
                        "meuble Ã  volet (1)",
                        "meuble d'administration (1)",
                        "Meuble d'atelier (2)",
                        "meuble d'Ã©cole (4)",
                        "Meuble d'Ã©glise (2)",
                        "Meuble d'Ã©picerie (1)",
                        "Meuble d'herboristerie (1)",
                        "Meuble de barbier (8)",
                        "Meuble de bijoutier (2)",
                        "Meuble de boucher (2)",
                        "Meuble de boucherie (2)",
                        "Meuble de charcuterie (1)",
                        "meuble de chocolatier (1)",
                        "meuble de coiffeur (8)",
                        "Meuble de la Banque de France (1)",
                        "Meuble de magasin (1)",
                        "Meuble de mercerie (4)",
                        "Meuble de mÃ©tier (10)",
                        "Meuble de musÃ©e (1)",
                        "Meuble de notaire (1)",
                        "meuble de parfumerie (1)",
                        "meuble de pÃ¢tisserie (1)",
                        "meuble de pharmacie (5)",
                        "Meuble de quincaillerie (2)",
                        "meuble de restaurant (1)",
                        "Meuble en marbre (3)",
                        "Meuble industriel (1)",
                        "miroir (4)",
                        "mobilier (1)",
                        "nÃ©ogothique (1)",
                        "paire de fauteuils (1)",
                        "patine ancienne (1)",
                        "Pharmacie ancienne (2)",
                        "pieds en fonte (1)",
                        "Pierre bleue (1)",
                        "Pigeonnier (1)",
                        "Placard (1)",
                        "Porte (2)",
                        "porte mÃ©tallique (1)",
                        "portes coulissantes (2)",
                        "radiateur en fonte (1)",
                        "Radiateur fleuri (1)",
                        "recyclÃ© (1)",
                        "sculpture (1)",
                        "skaÃ¯ (1)",
                        "statue de jardin (1)",
                        "table (1)",
                        "Table bistrot (1)",
                        "Table d'architecte (1)",
                        "table de bistrot (2)",
                        "Table de boucher (1)",
                        "Table de cafÃ© (1)",
                        "Table de confÃ©rence (1)",
                        "Table de coupe (1)",
                        "Table de couvent (1)",
                        "Table de drapier (2)",
                        "Table de rÃ©union (1)",
                        "Table double-plateaux (1)",
                        "Table en formica (1)",
                        "Table industrielle (3)",
                        "Verrier (1)",
                        "vitres galbÃ©es (2)",
                        "Vitrine (5)",
                        "Vitrine de magasin (4)",
                        "Vitrine de musÃ©e (2)",
                        "Vitrine de pharmacie (1)",
                        "Vitrine-comptoir (2)",
                        "Zinc (2)"
                        );
                        ?>
                </div>
            </div>
        </section>
    </section>
    <section class="inspi_quote">
        <div class="citation">
            "L'ennui naquit un jour de l'uniformité"
        </div>
        <div class="author">
            - Antoine Houdar de la Motte
        </div>
    </section>
</body>
<footer>
    <span>© 2018 Didier Motte +32 495 20 59 34 - <a class="email" href="mailto:dmotte@skynet.be">dmotte@skynet.be</a> - <a href="https://didiermotte.be/contact/">Plan d'accès</a></span>
    <span>Décorateur, Antiquités, Aménagement d'intérieurs, Belgique</span>
    <span>Restez à jour via: <a href="https://www.facebook.com/antiquites.decoration">Facebook</a>  <a href="https://www.instagram.com/DidierMotte/">Instagram</a></span>
    <span>Conçu & développé par <a href="https://pixeline.be">pixeline</a></span>
    <span>Modifié par <a href="https://github.com/Bernardjacques">Nhanar</a> - Pour <a href="https://www.becode.org/">BeCode</a></span>
</footer>
</html>

<?php
//
// ================================== Version - 0.2.3 =============================
// ========Starting - 14/03/18 ============================Ending - 12/03/18 ======
// ====================================== Author : ================================
//     ***** *     **      *                                                           
//   ******  **    ****   **                                                           
//  **   *  * **    ****  **                                                           
// *    *  *  **    * *   **                                                           
//     *  *    **   *     **                                           ***  ****         
//    ** **    **   *     **  ***      ****    ***  ****       ****     **** ****    
//    ** **     **  *     ** * ***    * ***  *  **** **** *   * ***  *   **   ****     
//    ** **     **  *     ***   ***  *   ****    **   ****   *   ****    **              
//    ** **      ** *     **     ** **    **     **    **   **    **     **            
//    ** **      ** *     **     ** **    **     **    **   **    **     **            
//    *  **       ***     **     ** **    **     **    **   **    **     **            
//       *        ***     **     ** **    **     **    **   **    **     **              
//   ****          **     **     ** **    **     **    **   **    **     ***           
//  *  *****              **     **  ***** **    ***   ***   ***** **     ***          
// *     **                **    **   ***   **    ***   ***   ***   **                 
// *  *                          *                                                    
//  **                          *                                                      
//                             *                                                       
//                            *                                                        
// */
?>