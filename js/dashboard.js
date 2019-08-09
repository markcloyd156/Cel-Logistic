function openNav() {
  document.getElementById("mySidenav").style.width = "400px";
  document.getElementById("main").style.marginLeft = "380px";
  

}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "70px";
 
  
}
	function jade(){
		alert('asda');
	}

function DivCon(){
	
	document.getElementById("main").innerHTML = 
	"<div class='jumbotron firstjumbo'><div class='row'><div class='col-sm-6'><h2 style='float:left; margin-top: -25px;'>CUSTOMER INQUIRY</h2><br><i class='glyphicon glyphicon-plus sa' onclick='jade()'></i><i class='glyphicon glyphicon-trash sa'></i><i class='glyphicon glyphicon-file sa'></i><i class='	glyphicon glyphicon-menu-left sa'></i><i class='glyphicon glyphicon-menu-right sa'></i><select><option>Actions</option></select><select><option>Reports</option></select></div><div class='col-sm-6'><h2 style='float:right; margin-top: -25px;' >CEL LOGISTICS-MANILA</h2></div></div></div>" + "<br>" + 
	"<div class='jumbotron sad'><div class='row'><div class='col-sm-6'><strong>Business Partner:<strong> <input type='text' style='width:300px; margin-left=20px; height:30px;'><i class='glyphicon glyphicon-search' style='margin-left: -20px;'></i></div><div class='col-sm-6'><p style='margin-top: -30px; font-size: 15px;'><strong>Partner ID:</strong></p> <b>Status:</b> <select style='margin-left: 40px; width:100px;'><option>Active</option></select></div></div></div>" + "<br>" + 
	"<div class='jumbotron sad1'> </div>";

}
function DivCon1(){
	document.getElementById("main").innerHTML =
	"<div class='jumbotron firstjumbo'><div class='row'><div class='col-sm-6'><h2 style='float:left; margin-top: -25px;'>INCOME ANALYSIS</h2><br><i class='glyphicon glyphicon-plus sa' onclick='jade()'></i><i class='glyphicon glyphicon-trash sa'></i><i class='glyphicon glyphicon-file sa'></i><i class='	glyphicon glyphicon-menu-left sa'></i><i class='glyphicon glyphicon-menu-right sa'></i><select><option>Actions</option></select><select><option>Reports</option></select></div><div class='col-sm-6'><h2 style='float:right; margin-top: -25px;' >CEL LOGISTICS-MANILA</h2></div></div></div>" + "<br>" ;
}
function DivCon2(){
	document.getElementById("main").innerHTML =
	"<div class='jumbotron firstjumbo'><div class='row'><div class='col-sm-6'><h2 style='float:left; margin-top: -25px;'>APPROVAL</h2><br><i class='glyphicon glyphicon-plus sa' onclick='jade()'></i><i class='glyphicon glyphicon-trash sa'></i><i class='glyphicon glyphicon-file sa'></i><i class='	glyphicon glyphicon-menu-left sa'></i><i class='glyphicon glyphicon-menu-right sa'></i><select><option>Actions</option></select><select><option>Reports</option></select></div><div class='col-sm-6'><h2 style='float:right; margin-top: -25px;' >CEL LOGISTICS-MANILA</h2></div></div></div>" + "<br>" ;
}


function proposal(){
	document.getElementById("main").innerHTML =
	"<div class='jumbotron firstjumbo'><div class='row'><div class='col-sm-6 col-xs-6 col-md-6 col-lg-6'><h2 style='float:left; margin-top: -25px;'>PROPOSAL</h2><br><i class='glyphicon glyphicon-plus sa' onclick='jade()'></i><i class='glyphicon glyphicon-trash sa'></i><i class='glyphicon glyphicon-file sa'></i><i class='	glyphicon glyphicon-menu-left sa'></i><i class='glyphicon glyphicon-menu-right sa'></i><select><option>Actions</option></select><select><option>Reports</option></select></div><div class='col-sm-6 col-xs-6 col-md-6 col-lg-6'><h2 style='float:right; margin-top: -25px;' >CEL LOGISTICS-MANILA</h2></div></div></div>" + "<br>" + 
	"<div class='jumbotron sad' style='height: 149px;'><div class='row'><div class='col-md-6 col-xs-6 col-sm-6 col-lg-6'><p style='margin-top: -30px; font-size:20px;'><b>Shipper:</b><input type='text' style='margin-left:50px; width: 320px; height: 30px;'/><i class='glyphicon glyphicon-search' style='margin-left: -25px; font-size:16px;'></i></p><p style='font-size:20px;'><b>Attention:</b><input type='text' style='margin-left:36px; width: 320px; height:30px;'/><ul class='nav nav-tabs' style='width:237px; margin-left: -20px;'><li><a href='#'' style='color:black;'>General Info.</a></li><li><a href='#' style='color:black;'>Financial Info.</a></li></ul></p></div><div class='col-md-6 col-xs-6 col-sm-6 col-lg-6'><p style='margin-top: -30px;'>Proposal Reference No:</p><p><i class='glyphicon glyphicon-th-large'></i> Hold</p></div></div></div>";
}

function joborder(){
	document.getElementById("main").innerHTML =
	"<div class='jumbotron firstjumbo'><div class='row'><div class='col-sm-6'><h2 style='float:left; margin-top: -25px;'>JOB ORDER</h2><br><i class='glyphicon glyphicon-plus sa' onclick='jade()'></i><i class='glyphicon glyphicon-trash sa'></i><i class='glyphicon glyphicon-file sa'></i><i class='	glyphicon glyphicon-menu-left sa'></i><i class='glyphicon glyphicon-menu-right sa'></i><select><option>Actions</option></select><select><option>Reports</option></select></div><div class='col-sm-6'><h2 style='float:right; margin-top: -25px;' >CEL LOGISTICS-MANILA</h2></div></div></div>" + "<br>" ;
}