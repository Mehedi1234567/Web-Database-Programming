<?php ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Second</title>
<style>



#logo{
   height: 150px;
   width:20%;
   background-color:#2DB567;
   left:0px;
   top:0px;
   position:absolute;
   border:FFFFFF solid 2px;	
	
}

#banner{
   height: 150px;
   width:80%;
   background-color:#391493;
   right:0px;

   top:0px;
   position:absolute;
   border:FFFFFF solid 2px;
}

#menu{
   height: 50px;
   width:100%;
   background-color:#00FF7F;
   left:0px;
   top:150px;
   position:absolute;
   border:FFFFFF solid 2px;
}

#leftbar{
        top: 200px;
        left: 0px;
        height: 600px;
        width: 20%;
        background-color : #1C703A;
        position: absolute;
        border: FFFFFF solid 2px;
		text-align:center;
		
}
#rightbar{
        top: 200px;
        right: 0px;
        height: 600px;
        width: 20%;
        background-color : #1C703A;
        position: absolute;
        border: FFFFFF solid 2px;
        text-align:center;
}

#cont{
        top: 200px;
        left: 20%;
	    right:20%;
        height:600px;
        width: 60%;
        background-color : white;
        position: absolute;
        border: FFFFFF solid 2px;
}
#contlt{
        top: 0px;
        left: 0px;
        height:50px;
        width: 50%;
        background-color : #FFFFFF;
        position: absolute;
        border: FFFFFF solid 2px;
}

#contrt{
        top: 0px;
        right: 0px;
        height:50px;
        width: 50%;
        background-color : #FFFFFF;
        position: absolute;
        border: FFFFFF solid 2px;
}
#contld{
        top: 200px;
        left: 0px;
        height:50px;
        width: 50%;
        background-color : #FFFFFF;
        position: absolute;
        border: FFFFFF solid 2px;
}
#contrd{
        top: 200px;
        right: 0px;
        height:50px;
        width: 50%;
        background-color : #FFFFFF;
        position: absolute;
        border: FFFFFF solid 2px;
}

#footer{
    height:50px;
   width:100%;
   background-color:#731314;
   left:0px;
   top:750px;
   position:absolute;
   border:FFFFFF solid 2px;
}

#footercont{
    height: 50px;
   width:70%;
   background-color:#1D85B7;
   left:0px;
   top:0px;
   position:absolute;
   border:FFFFFF solid 2px;
}
#icon{
    height: 50px;
   width:30%;
   background-color:#1D85B7;
   right:0px;
   top:0px;
   position:absolute;
   border:FFFFFF solid 2px;
}
#icon img{ height:50px; width:32%;	border-radius:70%;
}
ul{ list-style:none; text-align:center;
}
ul li { display:inline; text-align:center; margin-left:50px;}

/* unvisited link */
a:link {
  color: #9B1363;
  text-decoration:none;
  transition: linear 0.3s;
  
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: #000000;
  background-color:#A819C8;
  border-radius:50%;
}

/* selected link */
a:active {
  color: blue;
}
/* CSS Document */
</style>




</head>


<body>
<div id="logo">
<img src="img/logo.jpg" height="150px" width="100%" />

 </div>
<div id="banner"><img src="img/im3.png" height="150px" width="100%" />
</div>
<div id="menu"> 
<ul>
<li><a href="mobile.html">Home|</a></li>
<li><a href="contact.html">Contact|</a></li>
<li><a href="signup.html">Sign up</a></li>
<li><a href="login.html">Log in</a></li>
<li><a href="aboutme.html">About Me</a></li>

</ul>
</div>

<div id = "leftbar"> 
<p><a href="home.html">Home</a></P>
<p><a href="contact.html">Contact</a></p>
<p> About </p>
<p> Call </p> </div>

<div id="cont">
<center>
<form id="" name="" method="post" action="../controller/addcusinfo.php">
<p> Customer Signup Form</p>
id: <input id="id" name="id" type="number" /><br />
Name:<input id="name" type="text" name="name" /><br />
Email: <input type="email" id="email" name="email" /><br />
<input type="submit" value="Add " />

</form>
</center>
</div>

<div id = "rightbar"> 
<p><u><big> Mobile List </big></u></p>
<P><a href="#">IPHONE</a></P>
<P><a href="#">SAMSUNG</a></P>
<P><a href="#">MI</a></P>
<P><a href="#">LAVA</a></P>
<P> <a href="#">HTC</a></P>
</div>

<div id = "footer">
<div id ="footercont"><p> Design By @Mehedi </p></div>
<div id ="icon">
<img src="img/f1.png" height="50px" width="33%"/>
<img src="img/sky1.jpg" height="50px" width="30%" />
<img src="img/in1.png" height="50px" width="30%" />


</div>
</body>
</html>
