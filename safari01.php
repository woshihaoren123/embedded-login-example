<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Safari01</title>

   
	<script>
		document.cookie = 'same-site-cookie=foo; SameSite=None; Secure';
		document.cookie = 'cross-site-cookie=bar; SameSite=None; Secure';
	</script>
  </head>
  
  <body>
  	<div id="sign-in-link" style="position: absolute; top: 20px;right: 20px;"></div>
    <header>
      <div class="masthead-elements-row-1">
        <div class="element-left"></div>
        <div class="element-middle">
          <img class="logo" src="images/fix-logotype.png" alt="Fix">
          <br>
          <span class="logo-text">Fine Coffee Kits</span>
        </div>
        <div class="element-right">
        </div>
      </div>
    </header>
    <section class="textured-section">
      <h1>Curated Coffee Components</h1>
      

      <ul class="products">
        <li>
          <h3 class="product-name">AeroPress Coffee Maker</h3>
          <div class="product-button"><a id="aero_link" class="btn btn-hot" href="#" onclick="setItem()">Set Session Storage</a></div>
		<div class="product-button"><a id="aero_link" class="btn btn-hot" href="#" onclick="setItem2()">Set Local Storage</a></div>
          <div class="product-button"><a id="aero_link" class="btn btn-hot" href="#" onclick="goto02()">Go</a></div>
        </li>
        
      </ul>

    </section>
    
    <footer>
    </footer>
	

	
	<script>

function setItem(){
    sessionStorage.setItem("language", "zh_HK");
  }
	function setItem2(){
		localStorage.setItem("language", "zh_CN");
  }	
		
  
	function goto02(){
    window.open("https://dev1-member-portal.cs114.force.com/memberportal/s/login/?language=en_US");
  }

	</script>
	
  </body>
</html>
