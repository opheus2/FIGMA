<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  /* Component */
.wrapper {
width: 50%;
margin: 0 auto;
}
.component {
position: relative;
width: 980px;
height: 609px;
}
/* Rectangle */
.rect1 {
position: absolute;
left: 0%;
right: 0%;
top: 0%;
bottom: 0%;

background: #1F6482;
border: 5px solid #0EAAED;
box-sizing: border-box;
border-radius: 42px;
}
/* WELCOME */
.txt1 {
position: absolute;
left: 5.41%;
right: 54.29%;
top: 9.52%;
bottom: 77.18%;

font-family: Open Sans;
font-style: normal;
font-weight: bold;
line-height: normal;
font-size: 64px;
text-align: center;

color: #FFFFFF;
}
/* TO HNG INTERNSHIP #2018 */
.text2 {
position: absolute;
left: 8.88%;
right: 55.1%;
top: 24.96%;
bottom: 18.88%;

font-family: Open Sans;
font-style: normal;
font-weight: bold;
line-height: normal;
font-size: 36px;
text-align: center;

color: #FFFFFF;
}
/* Rectangle 2 */
.rect2 {
position: absolute;
left: 52.24%;
right: 0.51%;
top: 0.82%;
bottom: 0.99%;

background: #FFFFFF;
border-radius: 34px;
}
/* 12:15:00PM */
.timetxt {
position: absolute;
left: -40.00%;
right: -70.00%;
top: 50.00%;
bottom: 66.00%;
align:center-right;

font-family: Open Sans;
font-style: normal;
font-weight: bold;
line-height: normal;
font-size: 96px;
text-align: center;

color: #1F6482;
transform: rotate(90deg);
}
  </style>
</head>

<body bgcolor="1F6482">
  <title> Welcome </title>
   <div class="wrapper">
   <div class="component" align="right">
  <div class="rect1">
    <span class="txt1">WELCOME </span><br />
    <br />
    <br />
    <br />
    <span class="text2">TO <BR> HNG INTERNSHIP #2018 </span>
  </div>
  <div class="rect2">
    <span class="timetxt"> <?php
date_default_timezone_set("Africa/Lagos");
echo date("h:i:s A");
?></span>
  </div>
  </div>
  </div>
  
  </body>
  
  
 
  </html>