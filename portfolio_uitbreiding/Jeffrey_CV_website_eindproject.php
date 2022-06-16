<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM vaardigheden";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet 
 * in een *multidimensionale associatieve array 
 * in dit voorbeeld staat $all_users maar dit mag 
 * voor bijvoorbeeld producten $all_products heten. 
 * Maar dit kies je zelf
 */
$all_skills = mysqli_fetch_all($result, MYSQLI_ASSOC);


$sql = "SELECT * FROM projecten";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet 
 * in een *multidimensionale associatieve array 
 * in dit voorbeeld staat $all_users maar dit mag 
 * voor bijvoorbeeld producten $all_products heten. 
 * Maar dit kies je zelf
 */
$all_projects = mysqli_fetch_all($result, MYSQLI_ASSOC);




/**
 * Hier loop (iterate) je over alle waardes die gevonden zijn.
 * Je kunt zoals je zien paragraaf-tags gebruiken
 * maar je kunt ook andere HTML-**tags** gebruiken 
 */
?>



<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Portfolio Website Jeffrey</title>
    <link rel="stylesheet" href="styling.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Jeffrey's <span>Portfolio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">Over mij</a></li>
                <li><a href="#services" class="menu-btn">Diensten</a></li>
                <li><a href="#skills" class="menu-btn">Vaardigheden</a></li>
                <li><a href="#ervaringen" class="menu-btn">Ervaringen</a></li>
                <li><a href="#teams" class="menu-btn">Hobbies</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hallo, mijn naam is</div>
                <div class="text-2">Jeffrey Koper</div>
                <div class="text-3">En ik ben een <span class="typing"></span></div>

            </div>
        </div>
    </section>
    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Over mij</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/selfie.jpg" alt="Zelfie van mijzelf">
                </div>
                <div class="column right">
                    <div class="text">Ik ben Jeffrey en ik ben een <span class="typing-2"></span></div>
                    <p>Ik ben 17 jaar oud en volg de opleiding: "Software Developer" op het Nova College. Deze opleiding heb ik gekozen door mijn liefde aan gamen, en door dat ik zelf ook een gamedeveloper wil worden later. Programmeren is echt wel iets wat ik leuk vind om te doen. Of het nou een spelletje is, een professioneel programma, of gewoon iets voor de lol. Programmeren is het beste van de opleiding voor mij! </p>

                </div>
            </div>
        </div>
    </section>
    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Mijn diensten</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design met HTML, CSS, & PHP</div>
                        <p>Met deze 3 talen talen kan ik complete webpagina's maken. de HTML voor de inhoud van de pagina, CSS voor styling & uiterlijk, en PHP voor bijvoorbeeld inlogschermen, of databasen. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">leiderschap nemen</div>
                        <p>In een groep waar nog geen leider is, en niemand deze rol wilt aannemen, zou ik leiderschap kunnen nemen. Hierdoor zullen wij als groep goed werk presteren, en zal ik alles ervoor doen dat het project/opdracht op tijd af komt.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Coderen in C#</div>
                        <p>Ik werk graag met C# om programma's te maken. Ondanks dat ik nog veel te leren heb gaat C# goed bij mij. Programmeren vindt ik het leukst.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Mijn vaardigheden</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Mijn creative vaardigheden & ervaringen</div>
                    <p>Op het moment ben ik bezig met de opleiding Software Developer. Ik heb daarom het afgelopen jaar bezig geweest met het bestuderen van programmeertalen zoals C#, HTML, Python, CSS, en PHP. Rechts van deze paragraaf ziet u een paar balken. Deze balken geven aan hoeveel ik er van weet op het moment. Hoe hoger de percentage, de meer ik er van snap. </p>

                </div>
                <div class="column right">
                    <?php foreach ($all_skills as $skill) : ?>
                        <div class="bars">
                            <div class="info">
                                <span><?php echo $skill['vak']; ?></span>
                                <span><?php echo $skill['percentage']; ?></span>
                            </div>
                            <div class="line <?php echo $skill['vak']; ?>"> </div>
                        </div>
                    <?php endforeach; ?>
                    <style>
                        <?php foreach ($all_skills as $skill) : ?>.skills-content .right .<?php echo $skill["vak"] ?>::before {
                            width: <?php echo $skill["percentage"] ?>;
                        }

                        <?php endforeach; ?>
                    </style>
                </div>

            </div>
        </div>
    </section>
    <section class="ervaringen" id="ervaringen">
        <div class="max-width">
            <h2 class="title">Mijn Werkervaringen & projecten</h2>
            <div class="werkervaringen">
                <div class="column left">
                </div>
                <div class="column right">
                    <p>Op het moment heb ik helaas weinig werkervaringen, dit komt onder andere door COVID-19. Ik heb wel ervaring gehad bij mijn oude basisschool, daar was ik namellijk congercië. ik hielp daar ook docenten/studenten met heb gebruik van computers. Op mijn oude middelbare school hielp ik vaak achter de bar bij het jaarlijkse schoolfeest. Maar de beste werkervaring wat ik ooit heb gekregen, was bij de kantine. Ik werkte achter de kassa en hielp bij het verkopen van broodjes tijdens de middag pauze. Op mijn nieuwe school heb ik al aan een paar projecten gewerkt. onder andere aan programma's zoals een Verkeersplein simulator & LINGO. Ook waren er projecten dat over HTML/PHP gingen, zoals een website. Zie hieronder een paar.</p>
                    <?php foreach ($all_projects as $project) : ?>
                        <h1> <?php echo $project['titel'] ?>: </h1>
                        <p> <?php echo $project['beschrijving'] ?> </p>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Mijn hobbies</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/gamen.avif" alt="foto van persoon met controller in hand.">
                        <div class="text">Gamen</div>
                        <p>Naast coderen gebruik ik mijn vrije tijd om leuke activiteiten te doen, Zoals gamen. Ik speel dan vaak met vrienden, en dat maakt het gezellig. In de toekomst ben ik van plan een Game Developer te worden.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/basketbal.jpg" alt="foto van een basketbal dat door een basket gaat.">
                        <div class="text">Basketbal</div>
                        <p>Ik vind basketbal heel leuk om te spelen. Ik heb zelf basketbal gespeeld voor 3 jaar in een jeugd divisie. Het zal altijd een leuke sport voor mij zijn, ook al ben ik er al lang mee gestopt.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/ZandvoortStrand.webp" alt="foto van het strand op Zandvoort">
                        <div class="text">Naar het strand gaan</div>
                        <p>Ik woon in Zandvoort. Dit dorp ligt aan het strand en daarom kan ik makkelijk lopen naar het strand om daar plezier te hebben. In de Zomer ga ik altijd naar het strand. U kan daar zwemmen, zonnen, of gewoon in zand graven met een schep en een meesterwerk maken.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Krijg contact met mij</div>
                    <p>Als u vragen heeft voor mij, een werkplek wilt aanbieden, of zelfs alleen gedag wilt zeggen, heeft u hier mijn gegevens. </p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Naam</div>
                                <div class="sub-title">Jeffrey Koper</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adres</div>
                                <div class="sub-title">Martinus Nijhoffstraat 34, Zandvoort</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">jkoper257@student.novacollege.nl / jeffrey.koper@hotmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <form action="reactie-verwerk.php" method="post">
                        <label for="vestegingsnaam">vestegingsplaats:</label>
                        <input type="text" name="vestegingsnaam" id="vestegingsnaam"> <br>
                        <label for="bedrijfsnaam">bedrijfsnaam:</label>
                        <input type="text" name="bedrijfsnaam" id="bedrijfsnaam"> <br>
                        <label for="adres">adres:</label>
                        <input type="text" name="adres" id="adres"> <br>
                        <label for="postcode">postcode:</label>
                        <input type="text" name="postcode" id="postcode"> <br>
                        <label for="telefoonnummer">telefoonnummer:</label>
                        <input type="text" name="telefoonnummer" id="telefoonnummer"> <br>
                        <textarea id="reatie" name="reactie" rows="4" cols="50" placeholder="reactie"></textarea> <br>
                        <input class="btn-lg" type="submit" id="submit" value="stuur reactie">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.codingnepalweb.com">Jeffrey Koper</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>
    <script src="scripting.js"></script>
</body>

</html>