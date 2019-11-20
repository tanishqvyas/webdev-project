<?php
    header("Content-type: text/css; charset: UTF-8");

?>

#successful-submit
{
	position: fixed;
	top:calc(100vh/2 - 90px);
	left: calc(100vw/2 - 170px);
	border:1px solid black;
	background-color: #eef3f3;
	box-shadow: 1px 1px 5px;
	padding: 30px;
	border-radius: 20px;
	opacity: 0;
	z-index: 1000;

}

#successful-submit img
{
	height: 50px;
	margin-top: 10px;
	margin-left: 140px;
}


.info-card
{
	margin: 20px;
	border-radius: 20px;
	max-width: 700px;
	box-shadow: 1px 3px 7px;
	padding: 20px;
	overflow: hidden;
	background-color: #eef3f3;
	position: relative;
}

.header-info
{
	border-bottom: 2px grey solid;
	display: flex;
	margin-bottom: 20px;
	padding:0px 0px 5px 0px;
}

.header-info img
{
	height: 150px;
	border-radius: 50%;
	border:2px black solid;
	margin-right: 10px;
}

.header-text
{
	padding: 25px;
}

h5
{
	margin:3px 0px;
}

span
{
	padding-right: 10px;
}

owner-name
{
	margin_bottom: 10px;
	font_family: Times New Roman,Roboto,Aerial;
}

.description
{
	margin-bottom: 25px;
}


.button
{
	background-color: #4ccb55;
	border-radius: 40px;
	border:none;
	padding: 10px 20px;
	color: white;
	cursor: pointer;
	position: relative;
	left: 0px;
}

.button:hover
{
	background-color: #5cb863;
	border-radius: 40px;
	border:none;
	padding: 10px 20px;
	color: white;
	cursor: pointer;
}


?>