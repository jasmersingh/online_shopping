<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Tamplate</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  	<!-- Main Header -->
 
  
   <head> 
    <script src ="http://code.jquery.com/jquery-1.9.1.js"></script>
    
    
    <script type="text/javascript">
 
    
   function chk()
   {
	   var name=document.getElementById('name').value;
	   
	    var dataString='name=' + name  ;
	   
			$.ajax
			({
		   type:"post",
		   url:"insert.php",
		   data:dataString,
		   cache:false,
		   success:function(html)
		   {
			   $('#msg').html(html);
			}
			
		    });
   return false;
   }
    </script>
</head>
<body>
	 <form>
	<select  name="name" id="name">

           <div></div> <option value="" >All Employees</option>
           
            <option>Jasmer</option>
            <option>Sandeep</option>
            <option>Ravi</option>
            <option>Pardeep</option>
            
            

        </select>
	

   
   <input type="submit" id="3" value="Submit"  onclick="return chk()">
    
<p id='msg'></p>
</form>
</body>
</html>
</html>

















