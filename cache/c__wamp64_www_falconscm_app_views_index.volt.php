<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no" name="viewport" />
    <meta content="Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI." name="description" />
    <meta content="Semantic-UI, Theme, Design, Template" name="keywords" />
    <meta content="PPType" name="author" />
    <meta content="#ffffff" name="theme-color" />
    <title>Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI.</title>
    <link href="dist/semantic-ui/semantic.min.css" rel="stylesheet" type="text/css" />
    <link href="css/default.css" rel="stylesheet" type="text/css" />
    <link href="css/pandoc-code-highlight.css" rel="stylesheet" type="text/css" />
    <script src="dist/jquery/jquery.min.js"></script>
  </head>
  <body>
    <div class="ui fixed borderless huge menu">
      <div class="ui container grid">
        <div class="computer only row">
          <a class="header item">Project Name</a><a class="active item">Home</a><a class="item">About</a><a class="item">Contact</a><a class="ui dropdown item">Dropdown<i class="dropdown icon"></i>
            <div class="menu">
              <div class="item">
                Action
              </div>
              <div class="item">
                Another action
              </div>
              <div class="item">
                Something else here
              </div>
              <div class="ui divider"></div>
              <div class="header">
                Navbar header
              </div>
              <div class="item">
                Seperated link
              </div>
              <div class="item">
                One more seperated link
              </div>
            </div>
          </a>
          <div class="right menu">
          </div>
        </div>
        <div class="tablet mobile only row">
          <a class="header item"> Project Name</a>
          <div class="right menu">
            <a class="menu item">
              <div class="ui basic icon toggle button">
                <i class="content icon"></i>
              </div>
            </a>
          </div>
          <div class="ui vertical accordion borderless fluid menu">
            <a class="active item"> Home</a><a class="item"> About</a><a class="item"> Contact</a>
            <div class="item">
              <div class="title">
                Dropdown<i class="dropdown icon"></i>
              </div>
              <div class="content">
                <div class="item">
                  Action
                </div>
                <div class="item">
                  Another action
                </div>
                <div class="item">
                  Something else here
                </div>
                <div class="ui divider"></div>
                <div class="header item">
                  Navbar header
                </div>
                <div class="item">
                  Seperated link
                </div>
                <div class="item">
                  One more seperated link
                </div>
              </div>
            </div>
            <div class="ui divider"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="ui container">
      <div class="ui message">
        <h1 class="ui huge header">
          Navbar example 
        </h1>
        <p class="lead">
          This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.
        </p>
        <p class="lead">
          To see the difference between static and fixed top navbars, just scroll.
        </p>
        <a class="ui big primary button">View navbar docs &raquo; </a>
      </div>
    </div>
    <script src="dist/semantic-ui/semantic.min.js"></script>
    <style type="text/css">
      body {
        min-height: 2000px;
      }
      body > .ui.container {
        margin-top: 6em;
      }
      
      .ui.fixed.borderless.menu {
        background-color: #f8f8f8;
      }
      .ui.fixed.borderless.menu .row > a.header.item {
        font-size: 1.2em;
      }
      
      .ui.vertical.menu {
        display: none;
        border: none;
        box-shadow: none;
        background-color: #f8f8f8;
      }
      .ui.vertical.menu > .item {
        padding-left: 1.428em;
      }
      .ui.vertical.menu .item .title .dropdown.icon {
        float: none;
      }
      .ui.vertical.menu .item .content .item {
        padding: 0.5em 1em;
      }
      .ui.vertical.menu .header.item {
        text-transform: uppercase;
      }
      
      .ui.message {
        background-color: rga(238, 238, 238);
        box-shadow: none;
        padding: 5em 4em;
      }
      .ui.message h1.ui.header {
        font-size: 4.5em;
      }
      .ui.message p.lead {
        font-size: 1.3em;
        color: #333333;
        line-height: 1.4;
        font-weight: 300;
      }
    </style>
    <script>
      $(document).ready(function() {
          alert($)
        $('.ui.dropdown').dropdown();
        alert(2)
        $('.ui.accordion').accordion();
        alert(3)
      
        // bind "hide and show vertical menu" event to top right icon button 
        $('.ui.toggle.button').click(function() {
          $('.ui.vertical.menu').toggle("250", "linear")
        });
      });
    </script>
  </body>
</html>

