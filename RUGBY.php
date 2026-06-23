<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      background: #f4f7fb;
    }



    .navbar {
      border: 0px solid red;
      display: flex;
      justify-content: space-between;
      background: #333d68;
      box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.3);
    }

    .logo {
      border: 0px solid green;
      margin-left: 100px;
      color: white;
      font-size: larger;
    }

    ul {
      border: 0px solid blue;
      display: flex;
      gap: 20px;
      margin-right: 100px;
      list-style: none;
      color: white;
    }

    span {
      border: 0px solid red;
    }

    .nav-link {
      text-decoration: none;
      color: white;
       font-weight: 500;
    }

    .nav-link:hover {
      color: aqua;
    }


    .hero {
      background: url("./images/rugby-2.jpg");
      background-size: cover;
      align-items: center;
      justify-content: center;
      text-align: center;
      display: flex;
      height: 750px;
    }

    .hero p {
      font-size: 20px;
      font-weight: 900;
      color: white;
      margin-top: 200px;
      margin-left: 200px;
    }


    .content-title {
      font-size: 40px;
      font-weight: 700;
      color: #071952;

    }

    .video-box iframe {
      border: 0px solid red;
      border-radius: 20px;
      width: 60%;

    }

    /*.video-box {
      display: flex;
      justify-content: center;

    }*/

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

    .image-box img {
      border-radius: 20px;
    }
  </style>
</head>

<body>

  <nav class="navbar">
    <h2 class="logo">🏉Rugby Union World Cup</h2>
    <ul>
      <li><a class="nav-link" href="PROJECT-1.php">Home</a></li>
      <li><a class="nav-link" href="Football.php">Football</a></li>
      <li><a class="nav-link" href="cricket.php">Cricket</a></li>
      <li><a class="nav-link" href="RUGBY.php">Rugby</a></li>
    </ul>

  </nav>
  <section class="hero">
    <div>


      <p>
      </p>
    </div>

  </section>



  <div class="container mt-5">
    <div class="row">

      <div class="col-sm-12">

        <h2 class="content-title mt-5">Rugby</h2>

        <div class="video-box">
          <iframe width="50%" height="315" src="https://www.youtube.com/embed/wMNJ7kYeM3c" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
        <h2 class="content-title mt-5">Rugby World Cup (women)</h2>

        <div class="content-card">
          <p>The Rugby World Cup is the women's rugby union world championship which is organised by World Rugby.
            The first Rugby World Cup for women was held in 1991, but it was not until the 1998 tournament that
            the tournament received official backing from the International Rugby Board (IRB, now World Rugby);
            by 2009, the IRB had retroactively recognized the 1991 and 1994 tournaments and their champions.[1]

            Normally, the tournament is held every four years. With the exception of the 2018 edition that was
            brought forward to 2017 f to be a change of cycle and the 2021 edition that was postponed to 2022,
            due to the COVID-19 pandemic.

            Three countries have won the women's Rugby World Cup since its establishment, with New Zealand
            having won the tournament a record six times.

            The championship was previously branded as the Women's Rugby World Cup. As part of an effort to
            promote greater parity between the championship and its men's counterpart, the Rugby World Cup,
            World Rugby announced in 2019 that the women's championship would be officially marketed under the
            title Rugby World Cup, with no gender designation, beginning in 2021 </p><br>
          <h2 class="content-title mt-5">History</h2>
          <h2 class="content-title mt-5">1990</h2>
          <p>Before the first Women's Rugby World Cup officially sanctioned by the International Rugby Board there
            had been three previous tournaments of a similar nature. The first of these was an event held in
            August 1990 in New Zealand. Though not considered a world cup, the tournament was referred to as the
            World Rugby Festival for Women. The competition included teams representing the United States, the
            Netherlands, Russia, and the hosts, New Zealand – who emerged as winners after defeating the United
            States in the final.

            The first tournament referred to as the Women's Rugby World Cup was held in 1991 and hosted by
            Wales. Twelve countries were divided into four groups of three. The United States, against
            expectations, took the first championship with a 19–6 victory over England.[2] In the Plate
            competition Canada prevailed over Spain 18–4. Following the first tournament, it was decided to move
            the tournament schedule to the year prior to the next men's world cup, therefore reducing the
            quadrennial cycle to just three years.

            The next event was originally scheduled to take place in Amsterdam but ended up being moved to
            Scotland. Eleven countries competed in the tournament with the English meeting the United States in
            the final for the second time; however, in this instance England emerged as winners.[3]

            The 1998 tournament became the first women's world cup officially sanctioned by the International
            Rugby Board. Amsterdam, who were originally scheduled to host the previous world cup, hosted the
            largest ever tournament with all matches played at the new National Rugby Centre in the city's west
            end.[4] The tournament also saw a record sixteen teams compete. New Zealand, who withdrew from the
            previous tournament, also competed. The final saw New Zealand defeat the United States and claim
            their first world cup title.</p><br>
          <h2 class="content-title mt-5">Rugby World Cup(men)</h2>

          <p>The Rugby World Cup is a men's rugby union tournament contested every four years between the top
            international teams. The tournament is administered by World Rugby, the sport's international
            governing body. The winners are awarded the Webb Ellis Cup, named after William Webb Ellis, who
            according to a popular legend, invented rugby by picking up the ball during a football game.

            The tournament was first held in 1987 and was co-hosted by New Zealand and Australia. Four countries
            have won the trophy; New Zealand and South Africa three times, Australia twice, and England once.
            South Africa is the current champion, having defeated England in the 2019 tournament final.

            Sixteen teams participated in the tournament from 1987 until 1995; since 1999, twenty teams have
            participated in each tournament. Japan hosted the 2019 Rugby World Cup and France will host the next
            in 2023.

            Beginning 2021, the women's equivalent tournament was officially renamed Rugby World Cup to promote
            equality with the men's game.</p><br>
          <h2 class="content-title mt-5">Format</h2>

          <h2 class="content-title mt-5">Qualification</h2>
          <p>Under the current format, 20 teams qualify for each Rugby World Cup. Twelve teams qualify
            automatically based on their performance in the previous World Cup — the top three teams in each of
            the four group (pool) stages of the previous tournament qualify for the next tournament as seeded
            teams.[1][2] The qualification system for the remaining eight places is region-based, with a total
            eight teams allocated for Europe, five for Oceania, three for the Americas, two for Africa, and one
            for Asia. The last place is determined by an intercontinental play-off.[3]</p><br>
          <h2 class="content-title mt-5">Tournament</h2>

          <p>The tournament involves twenty nations competing over six weeks.[2][4] There are two stages — a pool,
            followed by a knockout round. Nations are divided into four pools, A through to D, of five nations
            each.[4][5] The teams are seeded based on the World Rankings. The four highest-ranked teams are
            drawn into pools A to D. The next four highest-ranked teams are then drawn into pools A to D,
            followed by the next four. The remaining positions in each pool are filled by the qualifiers.[2][6]

            Nations play four pool games, playing their respective pool members once each.[5] A bonus points
            system is used during pool play. If two or more teams are level on points, a system of criteria
            determines the higher ranked.[5]

            Eight teams — the winner and runner-up from each of the four pools — enter the knockout stage. The
            knockout stage consists of quarter- and semi-finals, and then the final. The winner of each pool is
            placed against a runner-up of a different pool in a quarter-final. The winner of each quarter-final
            goes on to the semi-finals, and the respective winners proceed to the final. Losers of the
            semi-finals contest for third place, called the 'Bronze Final'. If a match in the knockout stages
            ends in a draw, the winner is determined through extra time. If that fails, the match goes into
            sudden death and the next team to score any points is the winne</p><br>

          <img src="./images/Rugby_night.jpg" width="45%" height="300px" alt="">
          <img src="./images/StockCake-Rugby_Night_Match-1031287-medium.jpg" width="45%" height="300px" alt="">

          <p>Prior to the Rugby World Cup, there was no truly global rugby union competition, but there were a
            number of other tournaments. One of the oldest is the annual Six Nations Championship, which started
            in 1883 as the Home Nations Championship, a tournament between England, Ireland, Scotland and Wales.
            It expanded to the Five Nations in 1910, when France joined the tournament. France did not
            participate from 1931 to 1939, during which period it reverted to a Home Nations championship. In
            2000, Italy joined the competition, which became the Six Nations.[7]

            Rugby union was also played at the Summer Olympic Games, first appearing at the 1900 Paris games and
            subsequently at London in 1908, Antwerp in 1920, and Paris again in 1924. France won the first gold
            medal, then Australasia, with the last two being won by the United States. However rugby union
            ceased to be on Olympic program after 1924.[8][9][a]

            The idea of a Rugby World Cup had been suggested on numerous occasions going back to the 1950s, but
            met with opposition from most unions in the IRFB.[10] The idea resurfaced several times in the early
            1980s, with the Australian Rugby Union (ARU; now known as Rugby Australia) in 1983, and the New
            Zealand Rugby Union (NZRU; now known as New Zealand Rugby) in 1984 independently proposing the
            establishment of a world cup.[11] A proposal was again put to the IRFB in 1985 and this time passed
            10–6. The delegates from Australia, France, New Zealand and South Africa all voted for the proposal,
            and the delegates from Ireland and Scotland against; the English and Welsh delegates were split,
            with one from each country for and one against.[10][11]

            The inaugural tournament, jointly hosted by Australia and New Zealand, was held in May and June
            1987, with sixteen nations taking part.[12] The inaugural World Cup in 1987, did not involve any
            qualifying process; instead, the 16 places were automatically filled by seven eligible International
            Rugby Football Board (IRFB, now World Rugby) member nations, and the rest by invitation.[13] New
            Zealand became the first-ever champions, defeating France 29–9 in the final.[14] The subsequent 1991
            tournament was hosted by England, with matches played throughout Britain, Ireland and France.
            Qualifying tournaments were introduced for the second tournament, where eight of the sixteen places
            were contested in a twenty-four-nation tournament.[15] This tournament saw the introduction of a
            qualifying tournament; eight places were allocated to the quarter-finalists from 1987, and the
            remaining eight decided by a thirty-five nation qualifying tournament.[15] Australia won the second
            tournament, defeating England 12–6 in the final.[16]

            In 1992, eight years after their last official series,[b] South Africa hosted New Zealand in a
            one-off test match. The resumption of international rugby in South Africa came after the dismantling
            of the apartheid system.[17][18] With their return to test rugby, South Africa were selected to host
            the 1995 Rugby World Cup.[19] After upsetting Australia in the opening match, South Africa continued
            to advance through the tournament until they met New Zealand in the final.[20][21] After a tense
            final that went into extra time, South Africa emerged 15–12 winners,[22] with then President Nelson
            Mandela, wearing a Springbok jersey,[21] presenting the trophy to South Africa's captain, Francois
            Pienaar.[23]</p>
        </div>


      </div>
    </div>
  </div>
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
