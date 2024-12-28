<!DOCTYPE html>
<html>
<head>
	<title>import</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="./style.css">

<style type="text/css">
	body{
background:#EBEBF2
}
</style>
<script src="jszip.js"></script>
<script src="xlsx.js"></script>
<script>

function eco (ec){
	var dkec =JSON.parse(ec)
var trr = Object.keys(dkec[0])
console.log(trr);
console.log(ec);


var osp = $('#appnameid').val().trim();
osp = osp.replace(/\s+/g, '_');




if(osp.length > 3 && trr.length > 1){


var myJSONText = JSON.stringify(trr);
$.ajax({ 
       type: "POST", 
       url: "../module.php", 
       data: { dest:osp,dta : myJSONText}, 
       success: function(res) { 
        console.log(res);

              if(res !== 'null'){


$.ajax({ 
       type: "POST", 
       url: "../customapi.php", 
       data: { dest:osp,dta : ec,bulkins:true}, 
       success: function(res) { 
        console.log(res);
        window.top.postMessage('success^App Created', '*')
      window.location.href = '../erpconsole/manage'
      
}
})
      


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



var onChange = function() {
	var filezi = event.target.files[0];
	var fnm = filezi.name
	var fext = fnm.split('.').pop()
	if(fext == 'xlsx' || fext == 'xls'){
		parseExcel(filezi)
	}
	if(fext == 'csv'){
		csvJSON(filezi)
	}

  
};


function parseExcel (file) {
    var reader = new FileReader();
console.log('prse');
    reader.onload = function(e) {
      var data = e.target.result;
      var workbook = XLSX.read(data, {
        type: 'binary'
      });

      workbook.SheetNames.forEach(function(sheetName) {
        // Here is your object
        var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
        var json_object = JSON.stringify(XL_row_object);
        // console.log(json_object);
        eco (json_object)

      })

    };

    reader.onerror = function(ex) {
      console.log(ex);
    };

    reader.readAsBinaryString(file);
  }



  function csvJSON(file){
var reader = new FileReader();
console.log('crse');
    reader.onload = function(e) {
      var data = e.target.result;
      // console.log(data);
  var lines=data.split("\n");

  var result = [];

  // NOTE: If your columns contain commas in their values, you'll need
  // to deal with those before doing the next step 
  // (you might convert them to &&& or something, then covert them back later)
  // jsfiddle showing the issue https://jsfiddle.net/
  var headers=lines[0].split(",");

  for(var i=1;i<lines.length;i++){

      var obj = {};
      var currentline=lines[i].split(",");

      for(var j=0;j<headers.length;j++){
      	if(currentline[j]){
          obj[headers[j].replace(/(\r\n|\n|\r)/gm, "")] = currentline[j].replace(/(\r\n|\n|\r)/gm, "");
          }
      }
 //dont push blank obj     
if(obj && Object.keys(obj).length === 0 && obj.constructor === Object){
      
      }else {
      	result.push(obj);
      }

  }
// console.log(JSON.stringify(result));
  //return result; //JavaScript object
  // return JSON.stringify(result); //JSON
  eco (JSON.stringify(result))

}

reader.onerror = function(ex) {
      console.log(ex);
    };

    reader.readAsBinaryString(file);


}
</script>

</head>
<body>
	<input type="input" class="form__field" placeholder="Module" name="appname" id="appnameid" style="width: 40%;float: left;text-align: left !important;height: 10px;margin-top: 25px;color:#94b7f5;border-bottom: 2px solid #94b7f5;" required />
  <label for="name" class="form__label" style="color: #94b7f5;">Enter App Name</label>
	<img src="oimp.png" style="margin-top:2%">

	<label for="myfile">Select Excel/CSV File:</label>

	<form enctype="multipart/form-data">
    <input style="background-color: #3559eb;" class="btn_add_fin" id="upload" type=file onchange="onChange(event)"  name="files[]" accept=".csv,.xls, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
</form>

</body>
</html>