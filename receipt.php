<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<link href="source/boilerplate.css" rel="stylesheet" type="text/css">
<link href="source/template.css" rel="stylesheet" type="text/css">
<style type="text/css">
#header{
	height:50px;
	background-color:#999;
}
#logo{
	height:82;
	width:170;
}
#navibar{
	width: 82%;
	clip: rect(auto,auto,0px,auto);	
}
.pagelink{
	color:black;
    text-decoration:none;
}
#content{
	height:900px;
	background-color: #FC3;
	
}
#footer{
	height:100px;
	background-color:#999;
}
#beef {
	position: absolute;
	width: 228px;
	height: 186px;
	z-index: 1;
	left: 454px;
	top: 479px;
}

#beefDesc {
	position: absolute;
	width: 525px;
	height: 453px;
	z-index: 2;
	left: 420px;
	top: 404px;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 20px
}

#chicken {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
	left: 1047px;
	top: 485px;
}
#chickDesc {
	position: absolute;
	width: 286px;
	height: 115px;
	z-index: 2;
	left: 1000px;
	top: 656px;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 20px
}
#double {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
	left: 333px;
	top: 919px;
}
#dblDesc {
	position: absolute;
	width: 194px;
	height: 115px;
	z-index: 2;
	left: 336px;
	top: 1088px;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 20px
}

#mix {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
	left: 1046px;
	top: 920px;
}
#mixDesc {
	position: absolute;
	width: 194px;
	height: 115px;
	z-index: 2;
	left: 1049px;
	top: 1085px;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 20px
}
#apDiv1 {
	position: absolute;
	left: 807px;
	top: 703px;
	width: 402px;
	height: 50px;
	z-index: 3;
}
#apDiv2 {
	position: absolute;
	left: 783px;
	top: 876px;
	width: 163px;
	height: 57px;
	z-index: 4;
}
.button {
  background-color: #3F6; /* Green */
  border: none;
  color: white;
  padding: 15px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  white-space: nowrap;
    
}

.button1{
	border-radius: 4px ;

}
.buttonBack{
	background-color: #F00; /* Red */
  	border-radius: 4px ;
  	border: none;
  	color: white;
  	padding: 10px 35px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 16px;
  	white-space: nowrap;
	

}
#buttonBack {
	position: absolute;
	width: 99px;
	height: 62px;
	z-index: 1;
	left: 261px;
	top: 895px;
}
#apDiv9 {
	position: absolute;
	left: 1152px;
	top: 975px;
	width: 41px;
	height: 42px;
	z-index: 11;
}
#apDiv10 {
	position: absolute;
	left: 1209px;
	top: 974px;
	width: 41px;
	height: 39px;
	z-index: 12;
}
#apDiv11 {
	position: absolute;
	left: 1269px;
	top: 973px;
	width: 55px;
	height: 46px;
	z-index: 13;
}
#apDiv12 {
	position: absolute;
	left: 258px;
	top: 975px;
	width: 147px;
	height: 47px;
	z-index: 14;
}
#apDiv13 {
	position: absolute;
	left: 426px;
	top: 976px;
	width: 352px;
	height: 46px;
	z-index: 15;
	font-size: 18px;
}
</style>
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="source/respond.min.js"></script>
</head>
<body>
	
<div id="apDiv9"><img src="image/fb.png" alt="facebook"></div>
<div id="apDiv10"><img src="image/ig.png" alt="insta"></div>
<div id="apDiv11"><img src="image/wa.png" alt="whatsapp" width="42" height="46"></div>
	<div id="apDiv12"><img src="image/logo.png" alt="logo"></div>
	<div id="apDiv13">
	  <span>: 3, Jalan 2/3a, Bandar Baru Rawang,</span>
	  <br><span>4800 Rawang</span>
	</div>
	
	<div class="gridContainer clearfix">
      <div id="header" >S
        <div id="logo" style="float:left"><img src="image/logo.png" alt="logo"width="170" height="48"></div>
        <div id="navibar" style="background-color:#999; float:right">
         <div>&nbsp;</div> 
        <div><table width="878" border="0" align="right">
  <tr style="font-family:Verdana, Geneva, sans-serif; font-weight:bolder; font-size:16px">
    <td width="140"><a href="index.html" class="pagelink">Home</a></td>
    <td width="22">&nbsp;</td>
    <td width="139"><a href="about.html" class="pagelink">About</a></td>
    <td width="184"><a href="product.html" class="pagelink" target="_parent">Product</a></td>
    <td width="184"><a href="contact.html" class="pagelink" target="_parent">Contact</a></td>
    <td width="149">&nbsp;</td>
    <td width="84"></td>
    <td width="17">&nbsp;</td>
    <td width="109">Cart</td>
    
    
  </tr>
</table></div>

</div><!--navibar-->
      </div><!--header-->
      
      <div id="content" style=" font-style: italic;">
      <div id="banner"><img src="image/banner.jpeg" alt="banner" width="1232" height="321" ></div><!--banner--><!--burgerDiv-->
      <div id="beefDesc"><form method="post" action="receipt.html">
        <table width="525" height="455" border="1">
          <tr>
            <td colspan="2" align="center">Receipt</td>
          </tr>
          <tr>
          	<td>Order ID:</td>
          	<td>#A0213</td>
          </tr>
          <tr>
            <td>Name</td>
            <td>Ezzat</td>
          </tr>
          <tr>
            <td>Telephone</td>
            <td>0123456789</td>
          </tr>
          <tr>
            <td>Address</td>
            <td>3, Jalan Melor 5C, Desa Melor
            </td>
          </tr>
          <tr>
            <td>Payment Method</td>
            <td>FPX</td>
          </tr>
          <tr>
          	<td>Total Price (RM)</td>
          	<td>10.75</td>
          </tr>
        </table></form>
      </div><!--burgerDesc-->
      <div id="buttonBack"><a href="product.html"><button class="buttonBack" > Back
</button></a></div>
</div><!--content-->

      
<div id="footer"></div><!--footer-->
</div><!--container-->
</body>
</html>
