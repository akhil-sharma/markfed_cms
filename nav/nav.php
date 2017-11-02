<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://ecourts.gov.in/amritsar/history" target="_blank"> Amritsar </a>
  <a href="http://ecourts.gov.in/barnala/history" target="_blank"> Barnala </a>
  <a href="http://ecourts.gov.in/bathinda/history" target="_blank"> Bathinda </a>
  <a href="http://ecourts.gov.in/faridkot/history" target="_blank"> Faridkot </a>
  <a href="http://ecourts.gov.in/fatehgarh-sahib/history" target="_blank"> Fatehgarh Sahib </a>
  <a href="http://ecourts.gov.in/ferozepur/history" target="_blank"> Ferozepur </a>
  <a href="http://ecourts.gov.in/gurdaspur/history" target="_blank"> Gurdaspur </a>
  <a href="http://ecourts.gov.in/hoshiarpur/history" target="_blank"> Hoshiarpur </a>
  <a href="http://ecourts.gov.in/jalandhar/history" target="_blank"> Jalandhar </a>
  <a href="http://ecourts.gov.in/kapurthala/history" target="_blank"> Kapurthala </a>
  <a href="http://ecourts.gov.in/ludhiana/" target="_blank"> Ludhiana </a>
  <a href="http://ecourts.gov.in/mansa/history" target="_blank"> Mansa </a>
  <a href="http://ecourts.gov.in/moga/history" target="_blank"> Moga </a>
  <a href="http://ecourts.gov.in/muktsar/history" target="_blank"> Sh. Mukatsar Sahib </a>
  <a href="http://ecourts.gov.in/pathankot/history" target="_blank"> Pathankot </a>
  <a href="http://ecourts.gov.in/patiala/history" target="_blank"> Patiala </a>
  <a href="http://ecourts.gov.in/rupnagar/history" target="_blank"> Rupnagar </a>
  <a href="http://ecourts.gov.in/sas-nagar/history" target="_blank"> S.A.S. Nagar </a>
  <a href="http://ecourts.gov.in/nawanshahr/history" target="_blank"> S.B.S. Nagar </a>
  <a href="http://ecourts.gov.in/sangrur" target="_blank"> Sangrur </a>
  <a href="http://ecourts.gov.in/tarn-taran/history" target="_blank"> Tarn Taran </a>
  <a href="#" target="_blank"> </a>
  <a href="#" target="_blank"> </a>

</div>


<span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776; District Courts</span>



<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
</body>
</html> 
