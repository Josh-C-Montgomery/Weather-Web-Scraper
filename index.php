<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Web Scraper</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

    <style type="text/css">

      html, body {
        height: 100%;
      }

      .container {
        background-image:url("cloud.jpeg");
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        padding-top: 100px;
      }

      .center {
        text-align: center;
      }

      .white {
        color: white;
        text-shadow:
      }

      p {
        padding-top: 15px;
        padding-bottom: 15px;
      }

      button {
        margin-top: 15px;
      }

      .alert {
        margin-top: 15px;
        display: none;
      }


    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 center white">
          <h1>Weather Guesstimator</h1>
          <p class="lead">Enter your city below to get a forcast for the weather</p>
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="city" id="city" placeholder="e.g. London, Austin, Miami" />
            </div>
            <button class="btn btn-success btn-lg" id="findMyWeather">Find my weather</button>
          </form>
          <div id="success" class="alert alert-success">demo</div>
          <div id="fail" class="alert alert-danger">failed</div>
          <div id="noCity" class="alert alert-danger">Please enter a city</div>
        </div>
      </div>



    </div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

    <script>

      $('#findMyWeather').click(function(event) {

        event.preventDefault();

        $(".alert").hide();

        if ($("#city").val() != "") {

          $.get("scraper.php?city="+$("#city").val(), function(data) {

            if (data == "") {
              $("#fail").fadeIn();
            } else {
              $("#success").html(data).fadeIn();
            }

          });
          
        } else {

          $("#noCity").fadeIn();
        }

      });

    </script>
  </body>
</html>