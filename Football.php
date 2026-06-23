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
      background: url("./images/fifa-world-cup.jpg");
      background-size: cover;
      align-items: center;
      justify-content: center;
      text-align: center;
      display: flex;
      height: 750px;
    }

    .hero p {
      font-size: 30px;
      font-weight: 900;
      color: white;
      margin-top: 170px;
      margin-left: 150px;
    }

    .content-title {
      font-size: 40px;
      font-weight: 700;
      color: #071952;

    }

    .video-box iframe {
      border-radius: 20px;
    }

    .content-card {
      background: white;
      padding: 17px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      font-size: 17px;
      line-height: 1.8;
    }

    footer{
      background:#071952;
      color: white;
      padding: 30px;
      margin-top: 60px;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-size: large;
    }

    footer a{
      color:white;
      text-decoration: none;
      margin: 10px;
      font-size: large;
    }

    footer a:hover{
       color: #37824d;
       font-size: larger;
    }

  </style>
</head>

<body>

  <!-- navigation section -->

  <nav class="navbar">
    <h2 class="logo">⚽ Fifa World Cup</h2>
    <ul>
      <li><a class="nav-link" href="PROJECT-1.php">Home</a></li>
      <li><a class="nav-link" href="Football.php">Football</a></li>
      <li><a class="nav-link" href="cricket.php">Cricket</a></li>
      <li><a class="nav-link" href="RUGBY.php">Rugby</a></li>
    </ul>
    <!-- inline elements
        <span>Simran's day</span>
         <span>Ankkit 's day</span> -->
  </nav>



  <!-- hero section -->
  <section class="hero">
    <div>


      <p></p>
    </div>

  </section>


  <!-- content -->

  <div class="container mt-5">
    <div class="row">

      <div class="col-sm-12">

        <h2 class="content-title mt-5">Football</h2>

        <div class="video-box">
          <iframe width="1300" height="415" src="https://www.youtube.com/embed/-NSvbGxzpKk" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
         <h2 class="content-title mt-5">2026 FIFA World Cup</h2>

        <!-- content card -->
        <div class="content-card">
          <p>
            FIFA World Cup 2026™ in Qatar is the first to be hosted in the Middle East and the most
            geographically
            compact since the inaugural edition of the tournament in 1930. The FIFA World Cup 2022™ is unique in many
            respects, with the type of opportunities and challenges related to sustainability being no exception.

            The FIFA World Cup™ is the biggest single-sport competition in the world. After a preliminary competition,
            the 32 qualified men’s national football teams compete to become world champions in a final competition
            staged during one month in a host country selected by FIFA.
          </p>
          <p>
            It is anticipated that over one million spectators will attend the tournament’s 64 matches, and the
            competition will reach a global in-home television audience of over 3 billion people, with more than one
            billion fans tuning in to watch the final match. In addition to the matches, there are a host of other
            official competition-related events, including draws, team and referee seminars and workshops, opening and
            closing ceremonies, award ceremonies, cultural events, press conferences and launch events.

            Hosting the FIFA World Cup™ often represents a historical milestone and symbolic achievement for the host
            country, with major implications for local communities, infrastructure development and service provision.
          </p>
          <p>
            It
            includes the employment and training of thousands of workers and volunteers, the transportation of
            hundreds
            of thousands of fans and the protection of people’s health and safety throughout the tournament. The scale
            and complexity of the tournament can generate significant opportunities for all those involved, but they
            also present a range of risks that must be effectively managed in order to deliver a successful tournament
            France became the first defending champions, since Brazil in 2006, to avoid a group
            stage
            exit from the FIFA World Cup. Italy in 2010, Spain in 2014, and Germany in 2018, were all knocked out in the
            Group stage. France, however, lost their last group game against Tunisia but still went through as the
            toppers
            ahead of Australia.

            Kylian Mbappe has been the standout player for France so far and is one of the frontrunners for the FIFA
            World
            Cup 2022 top scorer award.
          </p>
          <p>



            Similarly, Cody Gakpo has spearheaded the Netherlands’ campaign as the Dutch qualified for the Round of 16
            as
            the top-placed team from Group A. A late goal from captain Kalidou Koulibaly, meanwhile, helped Senegal oust
            Ecuador in their final group game, a match which was a virtual playoff, to go through as the second-placed
            team from the group.

            Group B has also been decided as England, with two wins and a draw, won the group. A Christian Pulisic goal
            in
            the vital final match against Iran, meanwhile, helped the USA men’s football team advance as the
            second-placed
            team from Group B..<br><br><br>Brazil, despite missing star Neymar owing to an injury, sealed an early
            ticket
            to the knockouts from Group G by winning their opening two matches (2-0 vs Serbia and 1-0 vs Switzerland).
            Cristiano Ronaldo’s Portugal also made a hassle-free cut for the knockouts from Group G, after defeating
            Ghana
            3-2 and Uruguay 3-2.
          </p>
        </div>

      </div>
    </div>
  </div>

  <!-- footer -->
  <footer >
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
