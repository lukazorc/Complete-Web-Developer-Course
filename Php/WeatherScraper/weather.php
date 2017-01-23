<!DOCTYPE html>
<html>
    
<head>
        
    <title>Luka</title>
        
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<style>

    html, body {
        height: 100%;
    }
    
    
    .container {
        background-image:url("background.jpg");
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
    }
    
    p {
        padding-top: 15px;
        padding-bottom: 15px;
    }
    
    button {
        margin-top: 20px;
    }
    
    .alert {
        margin-top: 20px;
        display: none;
    }
    
    
</style>
    
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 center">
            
            <h1 class="center">Weather predictor</h1>
            <p class="lead center">Enter your city below to get a forecast for the weather.</p>
            
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Ljubljana, Paris..."/>
                    
                </div>    
                
                <button id="findMyWeather" class="btn btn-success btn-lg"> Find my weather</button>
            
            </form>
                
            <div id="success" class="alert alert-success">Success!
                </div>
                
            <div id="fail" class="alert alert-danger">Could not fin weather data for that city. Please try again   
            </div>
                
            <div id="noCity" class="alert alert-danger">Please enter a city.
            </div>
        
        </div>
    </div>
    </div>
  
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
<script>
    
 $('#findMyWeather').click(function(event) {
     
     event.preventDefault();
     
     $(".alert").hide();
     
     if ($("#city").val()!="") {
        $.get("scraper.php?city="+$("#city").val(), function( data ) {
           
             
        if (data=="") {
            
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
    








































