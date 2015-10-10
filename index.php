<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="description" content="Chinese Engineering Student Association @ UIUC">
	<meta name="author" content="CESA">

	<title>Chinese Engineering Student Association UIUC </title>
	<script src="js/jquery-1.11.0.js"></script>
	
	<!--<link rel="stylesheet" type="text/css" href="css/login.css" /> -->
	 <style type="text/css">
	   html { height: 100%; }	
	    body {
			background: #7f9b4e url(images/bg_2.jpg) repeat center top;
			 background-attachment:fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			background-size: cover;
		}	
		div{
			margin: auto;
			margin-top:200px;
			padding-top:50px;
			width:500px;
			height: 400px;
			background-color: rgba(10,10,10,0.3);
			text-align: center;
			border-radius: 20px;
		}
		#container h1 {
			font-size:36px;
			color: #fff;
			text-shadow: 0 8px 8px rgba(0,0,0,0.7);
		}

	 </style>
	  <script type="text/javascript">
       
    </script>
	<body >
		<div id="container">
          <h1></h1>
         <form class="form-4" name="login" method="post" action="" onsubmit="return false;">
         <tr>
         <td>			
			    <p><input type="text" id="loginid_hd" name="loginid_hd" placeholder="用户ID" required></p>
			    <p><input type="password" id='loginpwd' name='loginpwd' placeholder="密码" required></p>
			    <p id="loginmsg"></p>  
			    <p style="margin: 10px 0 10px 0;">
			        <input type="submit" name="submit" value="登录" onclick="check_login();" >
		        </p>
		 </td>
		 </tr>         
			</form>​
		
		
		</div>
	</body>
</head>
</html>