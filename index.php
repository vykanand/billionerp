<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charSet="utf-8" />
  <meta content="ie=edge" http-equiv="x-ua-compatible" />
  <title>Admin</title>

  <link rel="shortcut icon" href="https://appsthink.com/fav.png" />
  <link href="https://appsthink.com/fav.png" rel="icon" sizes="64x64">
  <link href="https://appsthink.com/fav.png" rel="icon" sizes="192x192">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="assets/css/notie.min.css">
  <style>
  /* override styles here */
  .notie-container {
      z-index: 999999999;
      box-shadow: none;
  }
  </style>

  <style>
  /* Progress Bar */
  .progress {
      position: relative;
      height: 4px;
      display: block;
      width: 100%;
      background-color: #ace8bc;
      border-radius: 2px;
      background-clip: padding-box;
      /*margin: 0.5rem 0 1rem 0;*/
      overflow: hidden; }
  .progress .determinate {
      position: absolute;
      background-color: inherit;
      top: 0;
      bottom: 0;
      background-color: #ace8bc;
      transition: width .3s linear; }
  .progress .indeterminate {
      background-color: #489cc4; }
  .progress .indeterminate:before {
      content: '';
      position: absolute;
      background-color: inherit;
      top: 0;
      left: 0;
      bottom: 0;
      will-change: left, right;
      -webkit-animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
              animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite; }
  .progress .indeterminate:after {
      content: '';
      position: absolute;
      background-color: inherit;
      top: 0;
      left: 0;
      bottom: 0;
      will-change: left, right;
      -webkit-animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
              animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
      -webkit-animation-delay: 1.15s;
              animation-delay: 1.15s; }

  @-webkit-keyframes indeterminate {
      0% {
          left: -35%;
          right: 100%; }
      60% {
          left: 100%;
          right: -90%; }
      100% {
          left: 100%;
          right: -90%; } }
  @keyframes indeterminate {
      0% {
          left: -35%;
          right: 100%; }
      60% {
          left: 100%;
          right: -90%; }
      100% {
          left: 100%;
          right: -90%; } }
  @-webkit-keyframes indeterminate-short {
      0% {
          left: -200%;
          right: 100%; }
      60% {
          left: 107%;
          right: -8%; }
      100% {
          left: 107%;
          right: -8%; } }
  @keyframes indeterminate-short {
      0% {
          left: -200%;
          right: 100%; }
      60% {
          left: 107%;
          right: -8%; }
      100% {
          left: 107%;
          right: -8%; } }
  </style>

  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>

  <!-- Add preload for critical images -->
  <link rel="preload" as="image" href="logo.png">
  <link rel="preload" as="image" href="fav.png">

  <!-- Add lazy loading for non-critical images -->
  <img loading="lazy" src="oimp.png" alt="Import">
  <img loading="lazy" src="exl.png" alt="Excel">
  <img loading="lazy" src="back-arrow.png" alt="Back">

</head>

<body>

	<div id="app">
		<div class="_1fqjz">
			<div class="_14IZ-">
				<div class="_1XpNO izfMl" id="apnd">
					<a href="/" class="_1-TOO"><img height="39" src="logo.png" width="91" /></a>
				<!-- 	<div class="_144Oi">
						<form action="/search?order=size_desc" class="_279fJ mxrbH">
							<div class="_29xHj">
								<div class="_3bLSE">
									<input type="search" name="q" value="" autoComplete="off" class="_3Oo-y _3XWkY" placeholder="Search for anything" />
									<p class="sTlLR"></p>
								</div>
							</div>
							<div class="_3800f">
								<button class="_3_Ozh _1_nVp zYyzg" type="submit"></button>
							</div>
						</form>
						<div class="_1wDfL"><a href="/search?order=size_desc" class="_34z5s">Advanced</a></div>
					</div> -->



          <!-- <div class="_5PQRU" role="navigation"><a class="_1sUiN _3hobi qn2E4" id="mrket">App Market</a>
      
						<button class="_3gKg- _3mdaE" type="button">Signed in as: <span id="ident"></span></button> -->
            <script type="text/javascript">
              var udi = JSON.parse(localStorage.getItem('userdat'));
              // document.getElementById('ident').innerText = udi.email;
              if(udi.type == 'admin'){
                var div = document.getElementById('apnd');

div.innerHTML +='<div class="_5PQRU" role="navigation"><a class="_1sUiN _3hobi qn2E4" id="mrket">App Market</a>';
div.innerHTML +='<span class="_3gKg- _3mdaE">Signed in as: '+udi.name+'<span id="ident"></span></span>'

div.innerHTML +='<div class="_5PQRU" role="navigation"><a class="_1sUiN qn2E4" id="logut" onclick="logu()">Logout<img src="logut.png" style="height:20px;width:20px;margin-left: 5px;"></a>';

var modal = document.getElementById('myModal');
var btn = document.getElementById("mrket");
btn.onclick = function() {
    modal.style.display = "block";
}
              
              }else{
                var div = document.getElementById('apnd');

div.innerHTML +='<div class="_5PQRU" role="navigation"><a class="_1sUiN _3hobi qn2E4" id="logut" onclick="logu()">Logout</a>';
div.innerHTML +='<span class="_3gKg- _3mdaE" >Signed in as: '+udi.name+'<span id="ident"></span></span>'
              }

              function logu(){
                localStorage.clear()
                window.location.href = './login'
              }
            </script>
						<!-- <button class="_3gKg- _3mdaE" type="button">Sign up</button> -->
					</div>
					<button class="_3O1m-" type="button">Toggle menu</button>
				</div>
			</div>
			<div class="_3rEQk">


				<?php include 'sidebar.html';?>

			<div id="prg" class="progress" style="top:0px;position: fixed;z-index: 99999;">
  <div class="indeterminate"></div>
</div>	
		
				</div>


<script language="javaScript">
// function autoResize(){
//     $('#themeframe').height($('#themeframe').contents().height()+15);
// }
// Add an event listener
var cchk = true


function iframeLoaded() {
     window.onmessage = function(e){
     	// console.log(e);

    if (e.data == 'responseact') {
       
        // console.log('responseact');
        irun()
    }

    if (e.data !== 'responseact') {
        
        if(!isNaN(e.data)){
        // console.log('noresponseact');
        iruncust(e.data)
    }else{
    if (e.data.includes("^") ) {
        ialert(e.data)
    }
    if (e.data.includes("~") ) {
        let qkey = e.data.split("~");
        let urni = 'https://appsthink.com/appmarket/repo/'+qkey[1]+'/'+qkey[1]+'.zip';
        // console.log(urni);
$.ajax({ 
       type: "POST", 
       url: "./plugins/push.php", 
       data: { dest:urni,appn:qkey[1]}, 
       success: function(res) { 
        // console.log(res);
        var sc = JSON.parse(res)
        
        if(sc.response == 'extracted'){
          // console.log(sc.response);
            window.top.postMessage('success^Plugin Installed', '*')
      window.location.reload()
        }else {
          // console.log('failed');
        }
      
      
}
})

    }
  }

    }

    

}
  }

  function ialert(sa) {
  	// console.log(sa);
  	var myArr = sa.split("^");

notie.alert({ type: myArr[0], text: myArr[1], stay: false })
}

function irun() {
  var iFrameID = document.getElementById('themeframe');
      if(iFrameID) {
            iFrameID.height = "";
            	var adjustedh = iFrameID.contentWindow.document.body.scrollHeight+30
            	iFrameID.height =  adjustedh + "px"; 
            	// console.log(new Date().toLocaleString(),iFrameID.height);
            	iFrameID.width = screen.width;
            	document.getElementById('prg').style.display = 'none';
      }
}


function iruncust(ccst) {
  var iFrameID = document.getElementById('themeframe');
      if(iFrameID) {
            	iFrameID.height =  ccst + "px"; 
            	// console.log(new Date().toLocaleString(),iFrameID.height);
            	iFrameID.width = screen.width;
            	// console.log(iFrameID.height);
            	document.getElementById('prg').style.display = 'none';
            
      }
}

</script>
<iframe id="themeframe" class="containerz" onLoad="iframeLoaded();" style="display:block; width:100%;scroll-width:none;overflow:hidden;" frameborder="0" ></iframe>


				<div class="_31VCP">
					<div class="_1XpNO S_k2f">
						<div class="_2rh-B">
							<h2 class="_11tU4">Need More?</h2>
							<p class="_249s1">We can deliver what you need.</p>
						</div>
						<div class="_1KzjG"><a href="#" class="_3_Ozh _7ei3C zYyzg _2IHdo">Learn more</a></div>
					</div>
				</div>
			</div>
			<section class="_3dP95">
				<h2 class="_3H0ny">Footer menu</h2>
				<div class="_1uf1s">
					<div class="_1XpNO _26pKB">
						<div class="_2s5Kw"><a href="/" class="_25Spx"><span class="_1cCJv" style="height:38px;width:88px"><img alt="Appsthink ERP" class="_2zb04" src="logo.png" height="38" style="height:38px;width:88px" width="88"/></span></a>
							<ul class="fR0o9">
								<li><a class="_1tYx2 e9MLD" href="support@appsthink.com">Contact us</a></li>
								<li><a class="_1qfZ- e9MLD" href="https://www.facebook.com/appsthink" rel="nofollow noopener noreferrer" target="_blank">Facebook</a></li>
								<li><a class="_1fyEl e9MLD" href="https://twitter.com/appsthink" rel="nofollow noopener noreferrer" target="_blank">Twitter</a></li>
								<li><a class="_9RlP6 e9MLD" href="https://www.linkedin.com/company/72149664" rel="nofollow noopener noreferrer" target="_blank">LinkedIn</a></li>
							</ul>
						</div>
						<div class="_2s5Kw">
							<h3 class="_16lOV">Products</h3>
							<ul class="_3_v5B">
								<li><a class="NoJN3" href="#">Billion ERP</a></li>
								<li><a class="NoJN3" href="#">Billion Supported Rest APIs</a></li>
							</ul>
						</div>
						<div class="_2s5Kw">
							<h3 class="_16lOV">Solutions</h3>
							<ul class="_3_v5B">
								<li><a class="NoJN3">Billion for Enterprise</a></li>
								<!-- <li><a class="NoJN3">Billion for Supply Chain</a></li>
								<li><a class="NoJN3">Billion for Sales Intelligence</a></li> -->
							</ul>
						</div>
						<div class="_2s5Kw">
							<h3 class="_16lOV">Company</h3>
							<ul class="_3_v5B">
								<li><a href="https://appsthink.com" class="NoJN3">About us</a></li>
								<li><a class="NoJN3" href="support@appsthink.com">Contact us</a></li>
								<li><a href="https://appsthink.com/blog" class="NoJN3">Blog</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="_1XpNO _3pSLy">
					<div class="_2s5Kw"><span class="_2JmoE">© AMT 2021</span></div>
					<!-- <div class="_2s5Kw">
						<ul class="_1-bZS">
							<li><a href="/privacy" class="_1_Oqm NoJN3">Privacy Policy</a></li>
							<li><a href="/terms" class="_1_Oqm NoJN3">Terms of Service</a></li>
						</ul>
					</div> -->
					<div class="_2s5Kw"><a class="_1_Oqm NoJN3" href="#" rel="nofollow noopener noreferrer" target="_blank">Made in india</a></div>
					<div class="_2s5Kw">
						<ul class="_1-bZS">
							<li><a class="_1_Oqm NoJN3">Compliance</a></li>
							<li><a href="https://appsthink.com" class="_1_Oqm NoJN3">Gts Compliant</a></li>
						</ul>
					</div>
				</div>
			</section>
		</div>
	</div>
	
	

<link rel="stylesheet" type="text/css" href="modalstyle.css">



  <div class="modal" id="myModal" style="z-index:55555">

    <div class="modal-content">
      <div id="clss" class="close-button ng-scope" style="border-radius: 50%;background-color: #CC1A1A;color: #fff;font-size: 20px;position: absolute;top: 2%;right: 3%;width: 30px;height: 30px;z-index: 10;box-shadow: 0 4px 4px rgba(0,0,0,0.1);opacity: 1;text-align: center;cursor: pointer;line-height: 30px;" >x</div>
<iframe src="appmarket/" onLoad="iframeLoaded();" style="display:block;height:100%; width:100%;scroll-width:none;overflow:hidden;" frameborder="0" ></iframe>

          
        </div>
      </div>
    </div>
  </div>


  <script type="text/javascript" src="modalscript.js"></script>
  <script src="https://unpkg.com/notie"></script>

   <script type="text/javascript">
    if(localStorage.getItem('userdat')){
      
    }else {
      window.onbeforeunload = null;

      notie.alert({ type: 'error', text: 'Login Failed.Please Login Again', stay: true })
      window.location.href = './login/'
    }
  </script>

</body>

</html>
