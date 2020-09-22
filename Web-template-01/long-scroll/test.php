<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdn.zingchart.com/zingchart.jquery.min.js"></script>
    <link rel="stylesheet" href="style/analytics.css">  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="admin.css">
      <link rel="stylesheet" href="style/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
    <style media="screen">
      .hello{
        width:40%;
        height:40vh;
        background-color: red;
        cursor: pointer;
      }
      .hi{
        width:40%;
        height:40vh;
        background-color: blue;
        display:none;
      }
    </style>
  </head>
  <body>
    <div class="hello" onclick="go(this);">
here
    </div>
    <div class="hi" id='hi'>
      <i class='fas fa-box-open' style='font-size:2vw'></i>
      <i class='fas fa-layer-group' style='font-size:2vw'></i>
      <i class='fas fa-sliders-h' style='font-size:2vw'></i>
      <i class="material-icons" style='font-size:2.5vw' >mail</i>
      <i class='fas fa-ad' style='font-size:2vw'></i>
      <i class="fa fa-pie-chart" style="font-size:2vw"></i>
      <i class='fas fa-user-circle' style='font-size:2vw'></i>
    </div>
    <script>
      var panel_index = 1;
      function go(x){
          if(panel_index == 0){
            $('#hi').css("display","block");
            panel_index = 1;
          }
          else{
            $('#hi').css("display","none");
            panel_index = 0;
          }
        }
    </script>
  </body>



</html>
