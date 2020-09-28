
<!DOCTYPE html>
<html>
<head>
  <title>AITAM</title>
<link rel="icon" type="image/png" href="images/aitam.ico"/>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="style/style1.css">
<script src="bootstrap/boot.js"></script>
<script src="bootstrap/boot0.js"></script>
<link rel="stylesheet" href="bootstrap/boot2.css">
<script src="bootstrap/boot3.js"></script>
<script src="bootstrap/boot4.js"></script>
</head>
<style type="text/css">

.results tr[visible='false'],
.no-result{
  display:none;
}

.results tr[visible='true']{
  display:table-row;
}

.counter{
  padding:8px; 
  color:#ccc;
}


#sidebar-container {
    min-height: 100vh;   
    background-color: #333;
    padding: 0;
}

/* Sidebar sizes when expanded and expanded */
.sidebar-expanded {
    width: 230px;
}
.sidebar-collapsed {
    width: 60px;
}

/* Menu item*/
#sidebar-container .list-group a {
    height: 50px;
    color: white;
}

/* Submenu item*/
#sidebar-container .list-group .sidebar-submenu a {
    height: 45px;
    padding-left: 30px;
}
.sidebar-submenu {
    font-size: 0.9rem;
}

/* Separators */
.sidebar-separator-title {
    background-color: #333;
    height: 35px;
}
.sidebar-separator {
    background-color: #333;
    height: 25px;
}
.logo-separator {
    background-color: #333;    
    height: 60px;
}

/* Closed submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
  content: " \f0d7";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
/* Opened submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
  content: " \f0da";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
  /*----------------------------------------------------------------*/
  /* 
Generic Styling, for Desktops/Laptops 
*/
table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}



/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

  .responsive-table-input-matrix {
    display: block;
    position: relative;
    width: 100%;

    &:after {
      clear: both;
      content: '';
      display: block;
      font-size: 0;
      height: 0;
      visibility: hidden;
    }

    tbody {
      display: block;
      overflow-x: auto;
      position: relative;
      white-space: nowrap;
      width: auto;


      tr {
        display: inline-block;
        vertical-align: top;

        td {
          display: block;
          text-align: center;

          &:first-child {
            text-align: left;
          }
        }
      }
    }

    thead {
      display: block;
      float: left;
      margin-right: 10px;

      &:after {
        clear: both;
        content: "";
        display: block;
        font-size: 0;
        height: 0;
        visibility: hidden;
      }

      th:first-of-type {
        height: 1.4em;
      }

      th {
        display: block;
        text-align: right;

        &:first-child {
          text-align: right;
        }
      }
    }
  }
}


/* Transparent
/* 
/*.navbar-default {
  background: none;
  border: none;
}*/

@media (min-width: 768px) {
  .navbar-nav {
    width: 100%;
    text-align: center;
  }
  .navbar-nav > li {
    float: none;
    display: inline-block;
  }
  .navbar-nav > li.navbar-right {
    float: right !important;
  }
}

@media (min-width: 768px) {
  .navbar-nav1 {
    width: 100%;
    text-align: center;
  }
  .navbar-nav1 > li {
    float: right;
    display: inline-block;
    color: silver !important;
  }
}

  .button{
    display: block;
    color: #333;
    font-weight: bold;
    cursor: pointer;
    outline: none;
  }
  .button:hover 
  {
    background-color: grey;
    color:white;
    font-weight: bold;
    font-size: 18px;
  }



  input[type=text], select{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
 input[type=date],input[type=submit]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button id="toggle2" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-between" id="menu2">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="request.php">Order</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="accept.php">Accept</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="reject.php">Reject</a>
      </li>
    </ul>
    <div class="navbar-nav">
    <ul class="navbar-nav1">
    
      <li class="nav-item">
    <a class="nav-link" href="logout.php"><i class="fa fa-user">&nbsp&nbspLogout</i></a>
      </li>
    </ul>
</div>
  </div>

</nav>
<br>
</header>
<body>
<div class="row">

    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">

        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
            </li>
           <a href="#" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                  <span id="collapse-text" class="menu-collapsed"><i class="fa fa-fort-awesome" aria-hidden="true">&nbsp&nbsp&nbsp<b>A I T A M</b></i></span>
                </div>
            </a>
            <a id = "toggle" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content"style="cursor: pointer !important;">
                    <span class="fa fa-dashboard fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Dashboards</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id="menu" class="collapse sidebar-submenu">
                <a href="inandout.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">INWARD</span>
                </a>
                <a href="outandin.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">OUTWARD</span>
                </a>
            
            </div>
            <a id = "toggle1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content" style="cursor: pointer !important;">
                    <span class="fa fa-university fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Blocks</span>
                    <span class="submenu-icon ml-auto" ></span>
                </div>
            </a>
            <div id="menu1" class="collapse sidebar-submenu">
                <a href="Ablock.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">A</span>
                </a>
                <a href="Bblock.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">B</span>
                </a>
                <a href="Cblock.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">C</span>
                </a>
                <a href="Dblock.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">D</span>
                </a>
                <a href="Eblock.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">E</span>
                </a>
                <a href="Fblock.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">F</span>
                </a>
            </div>
        </ul>
    </div>



  <!------------------------------------------------------------------------>
  <div class="col">
    <a id = "toggle4" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start" style="color:white;">
                <div class="d-flex w-100 justify-content"style="cursor: pointer !important; align-items: center;">
                    <span class="menu-collapsed">ADD NEW ENTRY</span>
                </div>
</a>
</center>
<form action="cblockentry.php" method="POST">
<div class="collapse sidebar-submenu" id="menu4">
<table class="responsive-table-input-matrix">
    <thead>
    <tr>
      <th>DATE</th>
      <th>INFRASTRUCTURE</th>
      <th>MODEL NAME</th>
      <th>SERIAL NUMBER</th>
      
      
    </tr>
    <tr>
      <td><input type="date" name="dt"></td>
      <td><input type="text" name="infra"></td>
      <td><input type="text" name="modelname"></td>
      <td><input type="text" name="serialnumber"></td>
    </tr>
   
    </thead>
    <tbody>

     <tr>
      <th>TYPE</th>
      <th>PURPOSE</th>
      <th>TEMPORARY / PERMANENT</th>
      <th>SUBMIT</th>
    </tr>
    <tr>
      <td><input type="text" name="type"></td>
      <td><input type="text" name="purpose"></td>
      <td>
       <select name="temper">
      <option>---SELECT---</option>  
      <option>TEMPORARY</option>
      <option>PERMANENT</option> 
      </select>
    </td>
    <td><input class="button" type="submit" name="submit"></td>
    </tr>
  
    </tbody>
  </table>
</form>
  </div><br>

<div class="form-group pull-right" >
    <input type ="text"class="search form-control" placeholder="Search" style="border-color: black !important; height: 10% !important;">
</div>
 <h1 style="color:#2A1537;
  display: inline-block; margin: 0;
  padding: 0.5em 1em;
  background-color: #333;
  font-size: 1.25em;
  color: white;">C BLOCK</h1>
<span class="counter pull-right"></span>

<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th>Sno</th>
      <th>DATE</th>
      <th>INFRASTRUCTURE</th>
      <th>MODEL NAME</th>
      <th>SERIAL NUMBER</th>
      <th>TYPE</th>
      <th>PURPOSE</th>
      <th>TEMPORARY /<br> PERMANENT</th>
      <th>REMOVE</th>
      <th>REPAIR</th>

    </tr>
    <tr class="warning no-result">
      <td colspan="9"><center><i class="fa fa-warning"></i> No result</center></td>
    </tr>
  </thead>
  <tbody>
    <?PHP
             include 'connect.php';
            $oquery = "SELECT * FROM `cblock`  ORDER BY `sno` DESC";
            $sql = mysqli_query($conn, $oquery);
              while($row = mysqli_fetch_array($sql)){
             
             
               echo " <tr><th>".$row['sno']."</th><td>".$row['date']."</td><td>".$row['infra']."</td>
                        <td>".$row['modelname']."</td><td>".$row['serialno']."</td><td>".$row['type']."</td>
                        <td>".$row['purpose']."<td>".$row['temper']."</td><td><a href='cblockremove.php?k=".$row['sno']."'><b>Remove</b><td><a href='#.php?k=".$row['sno']."'><b>REPAIR</b></td></tr>";
              }
         ?>
  </tbody>
</table>
<br>

</div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
      });
});
</script>
<!-------------------------------------------------------------->
<script type="text/javascript">
$(document).ready(function(){
// Hide submenus
$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon
$('#collapse-icon').addClass('fa-angle-double-left'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}
$("#toggle").click(function() {
  $(this).toggleClass("on");
  $("#menu").slideToggle();
});
$("#toggle1").click(function() {
  $(this).toggleClass("on");
  $("#menu1").slideToggle();
});
$("#toggle2").click(function() {
  $(this).toggleClass("on");
  $("#menu2").slideToggle();
});
$("#toggle4").click(function() {
  $(this).toggleClass("on");
  $("#menu4").slideToggle();
});
$("#togglei").click(function() {
  $(this).toggleClass("on");
  $("#menui").slideToggle();
});

});
</script>

</body>
</html>