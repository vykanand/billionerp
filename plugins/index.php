<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
 	<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

 	body{
 		background:#EBEBF2;
 		padding-top: 5%;
 		font-family: 'Open Sans', sans-serif;
 	}

 	.content{
 		display: flex;
 		align-items: stretch;
 		flex-wrap:wrap;
 		justify-content:center;
 	}


 	.card{
 		float: left;
 		text-align: center;
 		width: 15%;
 		border: 1px solid #bececd;
 		padding:10px 20px 25px 20px;
 		border-radius: 25px;
 		display: block;
 		margin:15px;
 		background-color: white;
 		box-shadow: 0px 0px 28px rgb(0 0 0 / 8%);
 	}

 	.card img{
 		height: 150px;
 		width: 150px;
 	}

 	.card span{
 		text-align: center;
 		display: block;
 		margin-top: 5%;
 		font-size: 20px;
 	}

 	.card a{
 		text-decoration: none;
 		color:#abadbe;

 	}

 		
 	</style>
 </head>
 <body>
 <h2 style="padding-left: 10%;color: #abadbe">Installed Apps</h2>
 <div class="content">


 	
 	<?php 
$d = dir(".");

while (false !== ($entry = $d->read()))
{
    if (is_dir($entry) && ($entry != '.') && ($entry != '..'))
        // echo $entry;
        
    if($entry){
    	$dir_name = $entry.'/';
    $images = glob($dir_name."*.png");
foreach($images as $image) {
$tu = explode("/",$image);
$nk = preg_replace('/\\.[^.\\s]{3,4}$/', '', $tu[1]);
$manp = './'.$dir_name;
?>

 	<div class="card">
 		<a href="<?php echo $manp;?>">
 		<img src="<?php echo $image;?>">
 		<span><?php echo $nk?></span>
 		</a>
 	</div>



<?php
}
}
}

$d->close();

 ?>


 </div>


<script type="text/javascript">
  $(document).ready(function() { 
    var body = document.body,
    html = document.documentElement;

var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );
 window.top.postMessage(height+300, '*');
})
</script>

 </body>
 </html>