<!doctype html>
<html>
  <head>

    <title>Legit-o-Meter</title>
    <meta charset="utf-8">
    <link href="//stuff.webmaker.org/makerstrap/latest/makerstrap.complete.min.css" rel="stylesheet">

    <link href='https://mozillawebmakerproxy.net/25a5c5dce23ca861c6008f92b40523c56794f448?url=http://mycharadeistheeventoftheseason.com/fonts/stylesheet.css' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

    <!-- Styling -->  
    <style>   
      body {
        background: #4d4e53 url(https://mozillawebmakerproxy.net/4e86dfbcffef0fcd0ac120fd7c73eb8404fc0e56?url=http://www.mousesquad.org/files/u4/legit_bg.png) top center no-repeat fixed;
        background-size: cover;
        font: 14px/1.5 'Open Sans', 'Helvetica Neue', Helvetica, Arial, Sans-Serif;
        color: #444;
      }

      img {
        max-width: 100%;   
      }
      article {
        background-color: rgba(255,255,255,1);
        padding-top: 20px;
        padding-bottom: 10px;
        min-width: 250px;
        max-width: 800px;
        margin: 70px auto 30px;
        border: 1px white solid;
      }

      header h2 {
        padding-top: 10px;
        padding-bottom: 20px; 
        font-size: 1.5em;
        font-style:italic;   
      }

      section {
        padding: 10px 20px;
      }


      section.tldr {
        background-color:#11B3A4; 
        text-align:center;
      }

      section.tldr2 {
        background-color:#fff;
        color:white;
        text-align:left;
      }
      
      section.tldr3 {
        background-color:#fff; 
        text-align:center;
      }

      h1, h2, h3 {
        margin: 0;
        padding-top: 20px;
        padding-bottom:20px;
      }

      h1 {
        font-size: 3em;
        font-family: 'goboldregular', 'oswald', sans-serif;
      }

      h2 {
        font-size: 2em;
        font-family: 'goboldregular', 'oswald', sans-serif;
      }

      h3 {
        font-size: 1.5em;
      }

      footer {
        background-color:#000;
        color:white;
        text-align: center;
        font-size:0.8em;
        padding:10px; 
      }

      p.url {
        font-size: 0.9em;
      }

      blockquote {
        font-family: Courier, monospace;
        background-color: rgba(255, 255, 255, 0.9);
        padding: 10px;
      }

      /* clearfix - prevents floating elements breaking layout. 
      Add this to the element containing floating elements. */
      .clear:before, .clear:after {
        content: "\0020";
        display: block;
        height: 0;
        overflow: hidden;
      }

      .clear:after {
        clear: both;
      }
      
      input {
        color: grey;
        width: 100%;
        margin: 2px;
        padding: 2px;
      }
      
      input:focus {
        color: black;
      }
    </style>
    <script>(function fixExternalLinks() {
  function pointToBlank(a) {
    var href = a.getAttribute("href");
    if (href && href.indexOf("//") > -1) {
      // this is an external link.
      if(!a.getAttribute("target")) {
        a.setAttribute("target", "_blank");
      }
    }
  }
  function fixLinks() {
    document.removeEventListener("DOMContentLoaded", fixLinks);
    var anchors = document.querySelectorAll("a");
    var asArray = Array.prototype.slice.call(anchors);
    asArray.forEach(function(a) {
      pointToBlank(a);
    });
  }
  document.addEventListener("DOMContentLoaded", fixLinks);
}())</script>
  </head>

  <body>
    <article>

      <center><header class="clear">
        <img src="kraken-ua.png" alt="Legit-o-Meter">    
        <h1 style="color: #339289; background-color: #ffffff;font-weight:bold;">ЛЕГЕНДА КРАКЕН: <br>
          ПЕРЕВІРКА ПРАВДИВОСТІ</h1>
        <h2 style="font-weight:bold;">Оціни свої веб-джерела!</h2>     
        </header></center>

      <section class="tldr">
        <h3 style="color: #fff; text-align:justify;">&nbsp&nbsp&nbsp&nbsp&nbspЧи зможеш ти знайти 4 веб-джерела, які доведуть чи спростують, що Кракен реальний? Зроби пошук в Інтернеті та використай цей листок для заповнення, щоб оцінити правдивість твоїх ресурсів.</h3>

      </section>
      <section class="tldr2">
        <h1><div style="color: #fff; background-color: #EB5D52;font-weight:bold;width:300px">МОЇ ДЖЕРЕЛА</div></h1>
        
        <div style="background-color:#EFEFEF;color:#323232;" class="alert alert-success">
          <p>ДЖЕРЕЛО 1: <br><?php echo $_POST["source1"]; ?></p>
          <ul>
            <li>ОПИШИ: <br><?php echo $_POST["description1"]; ?></li>
            <li>ПОДИВИСЬ НА ІМЕНА: <br><?php echo $_POST["author1"]; ?></li>
            <li>ПЕРЕВІР ДАТУ: <br><?php echo $_POST["date1"]; ?></li>
            <li>ЗНАЙДИ ДЖЕРЕЛА: <br><?php echo $_POST["thesources1"]; ?></li> 
            <li>ВИГЛЯД: <br><?php echo $_POST["design1"]; ?></li> 
            <li>ПОМИЛКИ: <br><?php echo $_POST["errors1"]; ?></li>
            <li>УНИКАЙ ПРОДАЖУ: <br><?php echo $_POST["saling1"]; ?></li></ul>

          <br>ОЦІНКА ДЖЕРЕЛА: <?php echo $_POST["rate1"]; ?>
        </div>
        <div class="alert alert-info">
          <p>ДЖЕРЕЛО 2: <br><?php echo $_POST["source2"]; ?></p>
          <ul>
            <li>ОПИШИ: <br><?php echo $_POST["description2"]; ?></li>
            <li>ПОДИВИСЬ НА ІМЕНА: <br><?php echo $_POST["author2"]; ?></li>
            <li>ПЕРЕВІР ДАТУ: <br><?php echo $_POST["date2"]; ?></li>
            <li>ЗНАЙДИ ДЖЕРЕЛА: <br><?php echo $_POST["thesources2"]; ?></li> 
            <li>ВИГЛЯД: <br><?php echo $_POST["design2"]; ?></li> 
            <li>ПОМИЛКИ: <br><?php echo $_POST["errors2"]; ?></li>
            <li>УНИКАЙ ПРОДАЖУ: <br><?php echo $_POST["saling2"]; ?></li></ul>

          <br>ОЦІНКА ДЖЕРЕЛА: <?php echo $_POST["rate2"]; ?>
        </div>
        <div class="alert alert-warning">
          <p>ДЖЕРЕЛО 3: <br><?php echo $_POST["source3"]; ?></p>
          <ul>
            <li>ОПИШИ: <br><?php echo $_POST["description3"]; ?></li>
            <li>ПОДИВИСЬ НА ІМЕНА: <br><?php echo $_POST["author3"]; ?></li>
            <li>ПЕРЕВІР ДАТУ: <br><?php echo $_POST["date3"]; ?></li>
            <li>ЗНАЙДИ ДЖЕРЕЛА: <br><?php echo $_POST["thesources3"]; ?></li> 
            <li>ВИГЛЯД: <br><?php echo $_POST["design3"]; ?></li> 
            <li>ПОМИЛКИ: <br><?php echo $_POST["errors3"]; ?></li>
            <li>УНИКАЙ ПРОДАЖУ: <br><?php echo $_POST["saling3"]; ?></li></ul>

          <br>ОЦІНКА ДЖЕРЕЛА: <?php echo $_POST["rate3"]; ?>
        </div>
          <div class="alert alert-success">
          <p>ДЖЕРЕЛО 4: <br><?php echo $_POST["source4"]; ?></p>
          <ul>
            <li>ОПИШИ: <br><?php echo $_POST["description4"]; ?></li>
            <li>ПОДИВИСЬ НА ІМЕНА: <br><?php echo $_POST["author4"]; ?></li>
            <li>ПЕРЕВІР ДАТУ: <br><?php echo $_POST["date4"]; ?></li>
            <li>ЗНАЙДИ ДЖЕРЕЛА: <br><?php echo $_POST["thesources4"]; ?></li> 
            <li>ВИГЛЯД: <br><?php echo $_POST["design4"]; ?></li> 
            <li>ПОМИЛКИ: <br><?php echo $_POST["errors4"]; ?></li>
            <li>УНИКАЙ ПРОДАЖУ: <br><?php echo $_POST["saling4"]; ?></li></ul>

          <br>ОЦІНКА ДЖЕРЕЛА: <?php echo $_POST["rate4"]; ?>
         
          </div>   
        
      </section>



      <section class="tldr3">

        <h1><div style="color: #fff; background-color: #EB5D52;font-weight:bold;">МІЙ ВИСНОВОК</div></h1>
        <h3>Чи істота Кракен РЕАЛЬНА, ВИГАДАНА чи це щось ПОСЕРЕДНЄ?</h3>
        <p><?php echo $_POST["conclusion"]; ?></p>
      </section>
      <!-- Copyright details --> 
      <footer>
        <p>Ця сторінка Thimble є реміксом чудового <a href="https://keyboardkat.makes.org/thimble/event-reporter">шаблону Звіту зустрічі.</a></p>
        <p><a href="https://creativecommons.org/licenses/by-sa/3.0/"><img width="120" src="http://mirrors.creativecommons.org/presskit/buttons/88x31/png/by-sa.png"></a><br>
          Find out more about Creative Commons licenses <a href="http://creativecommons.org/choose/">here</a>.</p>
      </footer>

    </article>
  </body>
</html>
