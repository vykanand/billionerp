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


<script type="text/javascript">
  $(function() {
            $( "#sortable-1" ).sortable();
         });
</script>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="cont_principal">
<div class="cont_centrar">

  <div class="cont_todo_list_top">
  <div class="cont_titulo_cont">
    <!-- <h3>THINGS TO DO</h3> -->
    <a onclick="window.history.back()">
    <img src="back-arrow.png" style="height: 25px;margin-left: 7px;margin-top: 20px;float: left;">
    </a>
    <div style="margin-left:5%">
  <input type="input" class="form__field" placeholder="Module" name="appname" id="appnameid" style="width: 40%;float: left;text-align: left !important;height: 10px;margin-top: 25px;" required />
  <label for="name" class="form__label">App Name</label>
 </div>

    </div>
<div class="cont_add_titulo_cont"><a href="#e" onclick="add_new()"><i class="material-icons">&#xE145;</i></a>
    </div>
 
<!--   End cont_todo_list_top  -->  </div>
<div class="cont_crear_new">
  <table class="table">
<tr>
  <th>Type</th>
  <th>Field</th>
 <th>Action</th>
    </tr>
    <tr>
    <td><select name="" id="action_select">
 <option value="FIELD">FIELD</option> 
      </select>
<!-- End td 1 -->
      </td>
       <td>
<input type="text" class="input_title_desc" />      

         <!-- End td 2 -->
      </td>
    <td>
<select name="" class="input_description_title"  id="date_select">
 <option value="CREATE">CREATE</option>     </select>

      <!-- End td 3 -->
      </td>
    </tr>
<!-- <tr>
   <th class="titl_description" >Description</th>
    </tr>
<tr>

  <td colspan="3">
  <input type="text" class="input_description" required />
  </td>
    </tr> -->
    <tr>
    <td colspan="3">
  <button class="btn_add_fin"  onclick="add_to_list()">ADD</button>
  </td>
    </tr>
  </table>
  <!--   End cont_crear_new  --> 
  </div>
  
  
<div class="cont_princ_lists">
<ul id = "sortable-1">
 
 </ul>
 </div>
  
<button class="btn_add_fin" style="margin-top:5%" onclick="aaq()">SAVE</button>
  
  <!--   End cont_central  -->
  </div>
</div>
<!-- partial -->
  <script  src="./scriptcreate.js"></script>
  

  <script type="text/javascript">
// var notie = window.notie
    function hasWhiteSpace(s) {
  return s.indexOf(' ') >= 0;
}

    function aaq(){
      var trr = [];
      $('#sortable-1 li .col_md_2_list').each(function(i)
{
  var tgt = $(this).text().trim()
  if(hasWhiteSpace(tgt)){
trr.push(tgt.replace(/\s+/g, '_'))
  }else {
    trr.push(tgt)
  }
  
});


var osp = $('#appnameid').val().trim();
osp = osp.replace(/\s+/g, '_');
if(osp.length > 3 && trr.length > 1){
console.log(trr);

var myJSONText = JSON.stringify(trr);
$.ajax({ 
       type: "POST", 
       url: "../module.php", 
       data: { dest:osp,dta : myJSONText}, 
       success: function(res) { 
        console.log(res);

              if(res !== 'null'){

      window.top.postMessage('success^App Created', '*')
      window.location.href = '../erpconsole/manage'

              }else {
                window.top.postMessage('error^Couldnt Create App.App already exists', '*')
                window.location.reload()
              }
        } 
});

}
if(osp.length < 3) {
  window.top.postMessage('error^Please Enter App Name', '*')
}

if(trr.length < 1) {
  window.top.postMessage('error^Please Create more than 1 fields', '*')
}
    
    }

  $(document).ready(function() { 
    var body = document.body,
    html = document.documentElement;

var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );
console.log('crethgt',height);

 window.top.postMessage(height+200, '*');


})
  </script>

<script src="../assets/js/notie.min.js"></script>



<style type="text/css">

@media only screen and (min-width: 600px){
  /*for desktop*/
  .col_md_2_list{display: flex;}
.float{
  display: flex;
  position:fixed;
  width:15%;
  height:60px;
  top:120px;
  right:40px;
  background-color:#456B95;
  color:#FFF;
  border-radius:5px;
  text-align:center;
  box-shadow: 2px 2px 3px #999;
  text-decoration: none!important;
}
}

@media only screen and (max-width: 600px){
  .form__label{margin-left:12%;}
  .col_md_2_list{display: block;}
.float{
  display: flex;
  position:fixed;
  width:30%;
  height:60px;
      top: 150px;
    right: 0px;
  background-color:#456B95;
  color:#FFF;
  border-radius:5px;
  text-align:center;
  box-shadow: 2px 2px 3px #999;
  text-decoration: none!important;
}
}

.my-float{
  margin-top:22px;
}
</style>

<a href="./import" class="float">
  <span style="color: white;font-size: 12px;padding-top: 20px;">Import Excel</span>
<img src="exl.png" style="height: 35px;width: 35px;padding-top: 10px;">
</a>


</body>
</html>
