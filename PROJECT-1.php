<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sports Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
        body {
            background: #f7f5fa;
        }

        nav {
            border: px solid green;
        }

        .header {

            border: px solid red;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #333d68;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.3);
        }


        .logo {
            border: px solid green;
            margin-left: 100px;
            color: white;
            font-size: larger;
        }

        .navbar {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .nav-link {
            text-decoration: none;
            color: white;
            font-weight: 500;
        }

        .nav-link:hover {
            color: aqua;
            font-size: larger;
        }


        .hero-slider {
            border: 0px solid red;
            height: 500px;

        }



        .slide img {
            height: 500px;
            width: 100%;
            object-fit: cover;
        }

        .slide {
            display: none;
        }

        .active {
            display: block;
        }

        .sportscard {
            padding: 50px;
            display: flex;
            justify-content: center;
            gap: 50px;
        }

        .card {
            border-top: 5px solid #28a745;
            width: 250px;
            background: #fff;
            border-radius: 20px;
            text-align: center;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .card img {

            width: 100%;
            height: 150px;
            object-fit: cover;
            transition: 0.4s;
        }
        .card:hover img{

            transform: scale(1.05);
        }

        .card h3 {
            padding: 15px;
            font-size: 22px;

        }

        .card a {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            transition: 0.3s;
        }

        .card a:hover {
            background: #1e7e34;
        }

        .content-title {
            font-size: 40px;
            font-weight: 700;
            color: #071952;

        }

        .image-box img {
            border-radius: 20px;
            height: 750px;
            width: 100%;
            
        }

        .content-card {
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            font-size: 17px;
            line-height: 1.8;
            width: 95%;
        }





        footer {
            background: #071952;
            color: white;
            padding: 30px;
            margin-top: 60px;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        footer a {
            color: white;
            text-decoration: none;
            margin: 10px;
        }

        footer a:hover {
            color: #37824d;
            font-size: large;
        }
    </style>

</head>

<body>

    <!-- header -->

    <header class="header">

        <div class="logo">
            🏆Sports World
        </div>

        <nav>
            <ul class="navbar">
                <li><a class="nav-link" href="PROJECT-1.php">Home</a></li>
                <li><a class="nav-link" href="Football.php">Football</a></li>
                <li><a class="nav-link" href="cricket.php">Cricket</a></li>
                <li><a class="nav-link" href="RUGBY.php">Rugby</a></li>
            </ul>
        </nav>

    </header>

    <!-- hero slider -->
    <section class="hero-slider">


        <div class="slide active">
            <img src="./images/football.jpg" />


        </div>

        <div class="slide ">
            <img src="./images/indian-cricket.jpg" />

        </div>
        <div class="slide">
            <img src="./images/rugby-player.jpg" />

        </div>
        

    </section>

    <!-- sports cards -->
    <main>
        <section class="sportscard">
            <article class="card">
                <img src="./images/fifa-world-cup.jpg" alt="">
                <h3>Football</h3>
                <a href="./Football.html">Explore</a>
            </article>
            <article class="card">
                <img src="./images/indian-cricket.jpg" alt="">
                <h3>Cricket</h3>
                <a href="./cricket.html">Explore</a>
            </article>
            <article class="card">
                <img src="./images/rugby-player.jpg" alt="">
                <h3>Rugby</h3>
                <a href="./RUGBY.html">Explore</a>
            </article>
        </section>
    </main>

    <h2 class="content-title mt-5">Football</h2>

    <div class="image-box"> <img src="./images/worldcupball.jpg.webp" class="w-100" alt=""></div>
    <div class="content-card">
        <p>Football, also called association football or soccer, game in which two teams of 11 players, using any part
            of their bodies except their hands and arms, try to maneuver the ball into the opposing team’s goal. Only
            the
            goalkeeper is permitted to handle the ball and may do so only within the penalty area surrounding the goal.
            The team that scores more goals wins.

            Football is the world’s most popular ball game in numbers of participants and spectators. Simple in its
            principal rules and essential equipment, the sport can be played almost anywhere, from official football
            playing fields (pitches) to gymnasiums, streets, school playgrounds, parks, or beaches. Football’s governing
            body, the Fédération Internationale de Football Association (FIFA), estimated that at the turn of the 21st
            century there were approximately 250 million football players and over 1.3 billion people “interested” in
            football; in 2010 a combined television audience of more than 26 billion watched football’s premier
            tournament, the quadrennial month-long World Cup finals.

            For a history of the origins of football sport, see football.</p><br>
        <h2 class="content-title mt-5">The early years</h2><br>
        <p>Modern football originated in Britain in the 19th century. Since before medieval times, “folk football” games
            had been played in towns and villages according to local customs and with a minimum of rules.
            Industrialization and urbanization, which reduced the amount of leisure time and space available to the
            working class, combined with a history of legal prohibitions against particularly violent and destructive
            forms of folk football to undermine the game’s status from the early 19th century onward. However, football
            was taken up as a winter game between residence houses at public (independent) schools such as Winchester,
            Charterhouse, and Eton. Each school had its own rules; some allowed limited handling of the ball and others
            did not. The variance in rules made it difficult for public schoolboys entering university to continue
            playing
            except with former schoolmates. As early as 1843 an attempt to standardize and codify the rules of play was
            made at the University of Cambridge, whose students joined most public schools in 1848 in adopting these
            “Cambridge rules,” which were further spread by Cambridge </p>
        <div class="image-box"> <img src="./images/all players.jpg"
                class="w-100" alt=""></div>
        <div class="image-box"> <img src="./images/Carli-Lloyd-penalty-goal-semifinal-match-Germany-2015.jpg"
                class="w-100" alt=""></div>


        <p>By the early 20th century, football had spread across Europe, but it was in need of international
            organization. A solution was found in 1904, when representatives from the football associations of Belgium,
            Denmark, France, the Netherlands, Spain, Sweden, and Switzerland founded the Fédération Internationale de
            Football Association (FIFA) <a href="./Football.html"> Read more</a></p>
        <h2 class="content-title mt-5">Cricket</h2>
        <div class="image-box"> <img src="./images/new cricket.jpg" class="w-100" alt=""></div>
        <h2 class="content-title mt-5">ICC Men's T20 World Cup</h2>
        <p> The ICC Men's T20 World Cup (earlier known as ICC World Twenty20)[4] is the international championship of
            Twenty20. Organised by cricket's governing body, the International Cricket Council (ICC), the tournament
            consists of 20 teams, with top 12 teams from the previous tournament getting automatic qualifications. while
            the 8 other teams chosen through the Regional Qualifiers

            The event has generally been held every two years. In May 2016, the ICC put forward the idea of having a
            tournament in 2018, with South Africa being the possible host,[5] but the ICC later dropped the idea of a
            2018
            edition at the conclusion of the 2017 ICC Champions Trophy.[6] The 2020 edition of the tournament was
            scheduled to take place in 2020 in Australia but due to the COVID-19 pandemic, the tournament was postponed
            until 2021, with the intended host changed to India. The tournament was later relocated to the United Arab
            Emirates (UAE) and Oman[7] due to problems relating to the COVID-19 pandemic in India, taking place 5 years
            after the previous (2016) iteration.

            As of 2022, eight tournaments have so far been played and a total of 21 teams have competed. Only the West
            Indies and England have won the tournament on multiple occasions, both having won two titles. The inaugural
            2007 World Twenty20, was staged in South Africa, and won by India, who defeated Pakistan in the final at the
            Wanderers Stadium in Johannesburg. The 2009 tournament took place in England, and was won by the previous
            runner-up, Pakistan, who defeated Sri Lanka in the final at Lord's. The third tournament was held in 2010,
            hosted by the countries making up the West Indies cricket team. England defeated Australia in the final in
            Barbados, which was played at Kensington Oval, winning their first international tournament. The fourth
            tournament, the 2012 World Twenty20, was held in Asia for the first time, with all matches played in Sri
            Lanka. The West Indies won the tournament by defeating Sri Lanka in the final, winning its first
            international
            tournament since the 2004 Champions Trophy.[8] The fifth tournament, the 2014 ICC World Twenty20, was hosted
            by Bangladesh, and was won by Sri Lanka defeating India, Sri Lanka being the first team to play in three
            finals. The sixth tournament, the 2016 ICC World Twenty20, was hosted by India and was won by West Indies
            defeating England. The seventh tournament, the 2021 ICC Men's T20 World Cup , was hosted by UAE and was won
            by
            Australia defeating New Zealand.

            England are the reigning T20 World Cup holders, having beaten Pakistan in the 2022 final, winning their
            second
            title. They became the first men's team to hold both limited-overs World Cups (T20 and ODI) simultaneously.
        </p>
        <div class="image-box"> <img src="./images/women-icc-t20-world-cup.jpg" class="w-100" alt=""></div>
        <div class="image-box"> <img src="./images/In-India-And-Pakistan.jpg" class="w-100" alt=""></div>

        <h2 class="content-title mt-5">History</h2>
        <h2 class="content-title mt-5">Background</h2>
        <p>When the Benson & Hedges Cup ended in 2002, the ECB needed[citation needed] another one-day competition to
            fill with the younger generation in response to dwindling crowds and reduced sponsorship. The Board wanted
            to
            deliver fast-paced, exciting cricket accessible to thousands[quantify] of fans who were put off by the
            longer
            versions of the game. Stuart Robertson, the marketing manager of the ECB, proposed a 20-over per innings
            game
            to county chairmen in 2001, and they voted 11–7 in favour of adopting the new format.[9]</p>

        <h2 class="content-title mt-5">Domestic tournaments</h2><br>
        <p>The first official Twenty20 matches were played on 13 June 2003 between the English counties in the Twenty20
            Cup.[10] The first season of Twenty20 in England was a relative success, with the Surrey Lions defeating the
            Warwickshire Bears by 9 wickets in the final to claim the title.[11] The first Twenty20 match held at
            Lord's,
            on 15 July 2004 between Middlesex and Surrey, attracted a crowd of 27,509, the largest attendance for any
            county cricket game at the ground - other than a one-day final - since 1953.[12]

            Soon after with the adoption of Twenty20 matches by other cricket boards, the popularity of the format grew
            with unexpected crowd attendance, new domestic tournaments such as Pakistan's Faysal Bank T20 Cup and
            Stanford
            20/20 tournament, and the financial incentive in the format.[citation needed]

            The West Indies regional teams competed in what was named the Stanford 20/20 tournament. Convicted fraudster
            Allen Stanford backed the event financially, giving at least US$28,000,000 funding money, the fruit of his
            massive Ponzi scheme.[citation needed] It was intended that the tournament would be an annual
            event.[citation
            needed] Guyana won the inaugural event, defeating Trinidad and Tobago by 5 wickets and securing US$1,000,000
            in prize money.[13][14] A spin-off tournament, the Stanford Super Series, took place in October 2008 between
            Middlesex and Trinidad and Tobago, the respective winners of the English and Caribbean Twenty20
            competitions,
            and a Stanford Superstars team formed from West Indies domestic players; Trinidad and Tobago won the
            competition, securing US$280,000 prize money.[15][16] On 1 November, the Stanford Superstars played England
            in
            what was expected to be the first of five fixtures in as many years with the winner claiming a US$20,000,000
            in each match.[17][18] <a href="./cricket.html">Read more..</a></p><br>

        <h2 class="content-title mt-5">Rugby</h2>

        <div class="image-box">
            <img src="./images/rugby-3.jpg" class="w-100" alt="">
        </div>

        <h2 class="content-title mt-5">2023 Rugby World Cup</h2>
        <br>
        <p>he 2023 Rugby World Cup will be the tenth men's Rugby World Cup, the quadrennial world championship for rugby
            union national teams. It is scheduled to take place in France from 8 September to 28 October 2023 in nine
            venues across the country.[2] The opening match and final will take place at the Stade de France, north of
            Paris. The tournament will take place in the bicentenary year of the "invention" of the sport by William
            Webb
            Ellis.[3]

            Originally, the tournament was scheduled to last the usual six weeks, but in February 2021, World Rugby
            added
            a week to provide additional rest days for player welfare. This means that teams will have a minimum of five
            days' rest for all matches. It will be the third time France has hosted the Rugby World Cup, having
            previously
            hosted the 2007 Rugby World Cup, as well as the 1991 Rugby World Cup as joint hosts with England, Ireland,
            Scotland and Wales. It precedes the 2024 Summer Olympics in Paris and will take place less than a year
            before
            the Olympic opening ceremony.

            The defending champions are South Africa, who defeated England in the 2019 final.

            Chile will make their first ever appearance at the Rugby World Cup, and Portugal will return for their
            second
            appearance, after 16 years.</p><br>
        <div class="image-box">
            <img src="./images/rugby-4.jpg" class="w-100" alt="">
        </div>


        <h2 class="content-title mt-5">Host country selection</h2>
        <br>
        <p>World Rugby requested that any members wishing to host the 2023 event were to submit an expression of
            interest by June 2015. A total of six unions responded. The Italian Rugby Federation were among the members
            interested, but withdrew from their bid on 28 September 2016. The Argentine Rugby Union and USA Rugby both
            expressed their interest in hosting the event but ultimately decided against a formal bid.[citation needed]
            Three bids were officially submitted to World Rugby by the June 2017 deadline.

            On 15 November 2017, the French Rugby Federation bid was chosen ahead of bids by the South African Rugby
            Union
            and the Irish Rugby Football Union. France had launched its bid on 9 February 2017.[4] <a
                href="./RUGBY.html">Read more...</a></p>
    </div>

    </div>
    </div>


    </div>


    <script>

        let arrayofslides = document.querySelectorAll(".slide");//it give all items of this class
        //arrayofslide =[div,div,div]---3 divs
        //indexofarray=[0,1,2]--numbering start from 0
        let current = 0;//initial/starting index 
        //create a function
        function slideshow() {
            //step 1-->remove class 'slide' from array with current index  
            arrayofslides[current].classList.remove('active');

            //step 2-->increment/update the current index
            if (current < 2) {
                current = current + 1;
            }
            else {
                current = 0;
            }


            //step 3-->add class 'slide' in  array with updated current index
            arrayofslides[current].classList.add('active');
        }


        //after  3 seconds slides should change 
        //set time interval----setinterval
        setInterval(slideshow, 3000);


    </script>



    <footer>
        <p>
            Created by Simran | copyright 2026
        </p>
        <div>
            <a href="./PROJECT-1.php">Home</a>
            <a href="./Football.php">Football</a>
            <a href="./cricket.php">Cricket</a>
            <a href="./RUGBY.php">Rugby</a>


        </div>

    </footer>

</body>

</html>
