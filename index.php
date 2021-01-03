<!DOCTYPE html>
<html>
<head>
<meta name="Plants Photo Gallery" content="width=device-width, initial-scale=1.0">
	<title>Plants Photo Gallery</title>
<style type="text/css">
*{
	box-sizing: border-box;
}
.row::after{
	content: "";
	clear: both;
	display: table;
}
[class*="col-"]{
	float: left;
	padding: 5px;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

html{
	font-family: Arial, Helvetica, sans-serif;
}

h1{
	text-align: center;
	background-color: green;
	color: white;
	font-family: Verdana;
	padding: 20px;
	border: 5px solid gray;
}
h2{
	text-align: center;
	font-size: 12px;
	color: green;
	padding: 10px;
	font-family: Verdana;
	margin-left: 160px;
	margin-right:160px;
	border: 5px solid gray;
	background-color: green;
}
a{
	text-decoration:none;
	color: white;
	padding: 5px 20px;
	transition: 0.6s ease;
}
.img{
	margin-left: 20%;
}
.img2{
	margin-left: 20%;
}


</style>
</head>
<body>
		<h1>Plants Photo Gallery</h1>
		
		
		<div class ="img">
		<img src="p1.jpg"width="327" height="300" > 
		<img src="p2.jpg" width="350" height="300">
		<img src="p3.jpg" width="327" height="300">
		</div>
		<div class="img2">
		<img src="p4.jpg"width="327" height="300">
		<img src="p5.jpg"width="350" height="300">
		<img src="p6.jpg" width="327" height="300">
		</div>
</body>
</html>
