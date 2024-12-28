<?php

  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Care</title>
	<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
body{font-family: 'Open Sans', sans-serif;}

@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');

a{
	cursor: default;
	text-align: center;
    position: relative;
    display: inline-block;
    padding: 25px 30px;
    margin: 40px 0;
    color: #06fa00;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    margin-right: 50px;
   
}
a:hover{
    background: #06fa00;
    color: #fff;
    border: 1px solid #06fa00;
    box-shadow: 0 0 5px #06fa00,
                0 0 25px #06fa00,
                0 0 50px #06fa00,
                0 0 200px #06fa00;
     -webkit-box-reflect:below 1px linear-gradient(transparent, #0005);
}
a:nth-child(1){
    filter: hue-rotate(270deg);
}
a:nth-child(2){
    filter: hue-rotate(110deg);
}
a span{
    position: absolute;
    display: block;
}
a span:nth-child(1){
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#06fa00);
    animation: animate1 1s linear infinite;
}
@keyframes animate1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}
a span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#06fa00);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}
@keyframes animate2{
    0%{
        top: -100%;
    }
    50%,100%{
        top: 100%;
    }
}
a span:nth-child(3){
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#06fa00);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
}
@keyframes animate3{
    0%{
        right: -100%;
    }
    50%,100%{
        right: 100%;
    }
}


a span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#06fa00);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}
@keyframes animate4{
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom: 100%;
    }
}

</style>
</head>
<body>
<tg onclick="history.back();" >
	<img src="./assets/back-black.png" style="height: 40px;width: 40px;">
</tg>

<div style="width: 100%;display: flex;height: 100%;">

	<div style="width: 50%;height: 100%;padding: 3% 5% 5% 7%;">
		<img id="orgg" src="./assets/AUja-stable.jpg">
		<img id="anii" src="./assets/AUja.gif" style="display: none">
	</div>
	<div style="width: 50%;height: 100%;display: flex;flex-direction:column;padding: 6% 5% 5% 7%;">

		<div style="display: flex;flex-direction:row;padding-top: 5%;padding-left: 25%;">
		<label for="fbug" style="font-size: 18px">Check file bugs</label>
		<input style="margin-left:4%;width:20px;height: 20px" type="checkbox" name="fbug" id="fbug" checked/>
		</div>
		
		<div style="display: flex;flex-direction:row;padding-top: 5%;padding-left: 25%;">
		<label for="finteg" style="font-size: 18px">Check File Integrity</label>
		<input style="margin-left:4%;width:20px;height: 20px" type="checkbox" name="finteg" id="finteg" checked/>
		</div>

		<div style="display: flex;flex-direction:row;padding-top: 5%;padding-left: 25%;">
		<label for="fupdate" style="font-size: 18px">Update check</label>
		<input style="margin-left:4%;width:20px;height: 20px" type="checkbox" name="fupdate" id="fupdate" checked/>
		</div>

		<scc id="scomp" style="display:none;padding: 25px 30px;margin: 40px 0;color: #000;letter-spacing: 1px;margin-left: 20% !important;">
			<gh style="color: black">SCAN COMPLETE</gh><br>
			File Health:<gh style="margin-top:3%;color: #06fa00"> Good</gh><br>
			FS Integrity:<gh style="color: #06fa00"> Good</gh><br>
			Update Status:<gh style="color: #06fa00"> Up to Date</gh><br>
		</scc>

		<a id="scn" onclick="animm()" style="display: none"> 
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        STOP
    	</a>
    	<a id="stpscan" onclick="stsc()" style="border: 1px solid;">
    		SCAN
    	</a>
		
	</div>
	
</div>

<script type="text/javascript">
	function stsc(){
		document.getElementById('orgg').style.display = 'none'
		document.getElementById('anii').style.display = 'block'

		document.getElementById('scn').style.display = 'block'
		document.getElementById('stpscan').style.display = 'none'

				setTimeout(function() {
console.log('asv');
		document.getElementById('orgg').style.display = 'block'
		document.getElementById('anii').style.display = 'none'

		document.getElementById('scn').style.display = 'none'
		document.getElementById('stpscan').style.display = 'none' 
		document.getElementById('scomp').style.display = 'block' 

		}, 5000);

	}

	function animm(){
		document.getElementById('anii').style.display = 'none'
		document.getElementById('orgg').style.display = 'block'

		document.getElementById('scn').style.display = 'none'
		document.getElementById('stpscan').style.display = 'block'

	}
</script>

</body>
</html>