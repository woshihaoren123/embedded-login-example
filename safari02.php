<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Safari01</title>
   
	<script>
    console.log('123');
		console.log(sessionStorage.getItem("language"));
		window.parent.postMessage(sessionStorage.getItem("language"), "https://dev1-member-portal.cs114.force.com/memberportal/s/login/?language=en_US");
	</script>
  </head>

</html>
