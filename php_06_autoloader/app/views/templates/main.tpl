<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <title>{$page_title|default:"Tytuł domyślny"}</title>

    <link
      rel="stylesheet"
      href="http://yui.yahooapis.com/pure/0.4.2/pure.css"
    />
    <link rel="stylesheet" href="{$conf->app_url}/css/main.css" />
    <noscript
      ><link rel="stylesheet" href="{$conf->app_url}/css/noscript.css"
    /></noscript>

    <link rel="stylesheet" href="{$conf->app_url}/css/style.css" />

    <link
      rel="stylesheet"
      href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
    />

    <script src="{$conf->app_url}/js/jquery.min.js"></script>
    <script src="{$conf->app_url}/js/softscroll.js"></script>
  </head>
  <body>
    <div id="app_top" class="header">
      <div
        class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed head-menu navbar"
      >
        <a class="pure-menu-heading" href=""
          >{$page_title|default:"Tytuł domyślny"}</a
        >

        <ul>
          <li><a href="#app_top">Góra strony</a></li>
          <li><a href="#app_content">Idź do formularza</a></li>
        </ul>
      </div>
    </div>

    <section id="banner">
      <div class="content">
        <header>
          <h2>Witaj w symulacji kredytowej</h2>
          <p>Oblicz swoją przewidywaną ratę kredytu.</p>
        </header>
        <span class="image"
          ><img src="{$conf->app_url}/css/cash.jpg" alt=""
        /></span>
      </div>
      <a href="#one" class="goto-next scrolly">Next</a>
    </section>

    <div class="content-wrapper">
      <div id="app_content" class="content">
        {block name=content} Domyślna treść zawartości .... {/block}
      </div>
    </div>
    <section id="five" class="wrapper style2 special fade">
      <div class="container">
        <header>
          <h2></h2>
          <p>Kalkulator stworzony przez Karolinę Kula</p>
        </header>
      </div>
    </section>

    <footer id="footer">
      <ul class="icons">
        <li>
          <a href="#" class="icon brands alt fa-github"
            ><span class="label">GitHub</span></a
          >
        </li>
      </ul>
    </footer>
  </body>
</html>
