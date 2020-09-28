function loadProductes(id) {
	var xhttp;
	if (window.XMLHttpRequest) {
		xhttp = new XMLHttpRequest();
	}else{
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("portada").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "index.php?action=list_products&is_ajax=1&category_id="+id, true);
	xhttp.send();
}
function loadProduct(id) {
	var xhttp;
	if (window.XMLHttpRequest) {
		xhttp = new XMLHttpRequest();
	}else{
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("portada").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "index.php?action=product&is_ajax=1&product_id="+id, true);
	xhttp.send();
}
function loadSign() {
	var xhttp;
	if (window.XMLHttpRequest) {
		xhttp = new XMLHttpRequest();
	}else{
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("portada").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "index.php?action=signIn&is_ajax=1", true);
	xhttp.send();
}

$(document).ready(function(){
	$('#Boto').click(function(){
		$('#menu').toggle('slow');
	});
});
$(document).ready(function(){
	$('#perfil').click(function(){
		$('#menu-perfil').toggle('slow');
	});
});
$(document).ready(function(){
	$('#login').click(function(){
		$('#opcions-login').toggle('slow');
	});
});
