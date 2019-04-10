document.addEventListener("DOMContentLoaded", function (event) {

	document.getElementsByClassName("nav").addEventListener("click", fetchContent);
	
	function fetchContent(value) {
		var xhttp;
		var url;

		switch (value) {
			case "home":
				url = "home.html";
				break;
			case "adventurers":
				url = "adventurers.html";
				break;
			case "manacircles":
				url = "manacircles.html";
				break;
			case "weapons":
				url = "weapons.html";
				break;
			case "wyrmprints":
				url = "wyrmprints.html";
				break;
			case "dragons":
				url = "dragons.html";
				break;
			default:
				url = "404.html";
		}

		xhttp = new XMLHttpRequest();
		xhttp.responseType = "text";
		xhttp.onreadystatechange = function () {
			if (xhttp.readyState === 4 && xhttp.status === 200) {
				document.getElementsByTagName("content")[0].innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET", url, true);
		xhttp.send();
	}

});
