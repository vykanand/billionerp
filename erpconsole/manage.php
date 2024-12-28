<?php 
session_start();

include('../config.php');

 ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>dyn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="../assets/css/notie.min.css">
    <style>
    /* override styles here */
    .notie-container {
      box-shadow: none;
    }
    </style>

<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="./style.css">


</head>
<body>
<!-- partial:index.partial.html -->
<div class="cont_principal">
<div class="cont_centrar">

  <div class="cont_todo_list_top">
  <div class="cont_titulo_cont">
    <h3>Manage Apps</h3>

    </div>
<div class="cont_add_titulo_cont"><a onclick="gburl()" style="cursor: pointer;"><i class="material-icons">&#xE145;</i></a>
    </div>
 
</div>
  
  
<div class="cont_princ_lists">
<ul id = "sortable-1">



<?php

$sql = "SELECT * FROM navigation";
  $result = mysqli_query($db,$sql)or die(mysqli_error($db));
  

while($row = mysqli_fetch_array($result)) {

    ?>



<li class="list_dsp_true list_shopping list_dsp_none li_num_0" draggable="true" style="display: block;">
    <div class="col_md_1_list">
        <p>APP</p>
    </div>
    <div class="col_md_2_list">
        <h4><?= $row['nav']; ?></h4>
        <p style="color: green">Running</p>
    </div>
    <div class="col_md_3_list">
        <div class="cont_text_date">
            <p>DELETE</p>
        </div>
        <div class="cont_btns_options">
            <ul>
                <li><a href="#finish" onclick="finish_action(0,0,'<?= $row['nav']; ?>');"><i class="material-icons">delete</i></a>
                </li>
            </ul>
        </div>
    </div>
</li>

<?php 

}

?>

 </ul>
 </div>
  
  
  <!--   End cont_central  -->
  </div>

</div>


<!-- partial -->
  <script  src="scriptmanage.js"></script>
<script type="text/javascript">
  function gburl(){
    console.log();
    var URL = window.location.href
    window.location.href = URL.substring(0, URL.lastIndexOf("/") + 1)+'create';
  }

  $(document).ready(function() { 
    var body = document.body,
    html = document.documentElement;

var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );
 window.top.postMessage(height+500, '*');

})
</script>

<script type="text/javascript" src="../assets/js/notie.min.js"></script>

</body>
</html>
