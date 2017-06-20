<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title></title>
</head>
<body>
	<div id="container">
		<img class="slides" src="pic1.jpg" />
		<img class="slides" src="pic2.jpg" />
		<img class="slides" src="pic3.jpg" />
		<img class="slides" src="pic4.jpg" />
		<img class="slides" src="pic5.jpg" />
		
		<button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094;</button>
		<button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>
	</div>
</body>
<script>
	var index = 1;
		
	function plusIndex(n) {
	index = index + n;
	showImage(index);
	}

	showImage(1);

	function showImage(n) {
		var i;
		var x = document.getElementsByClassName("slides");
		
		if(n > x.length) {
			index = 1;
		}
		if(n < 1) {
			index = x.length;
		}
		for(i=0;i<x.length;i++) {
			x[i].style.display = "none";
		}
		x[index-1].style.display = "block";
	}
	
	autoSlide();
	
	function autoSlide() {
		var i;
		var x = document.getElementsByClassName("slides");
		
		for(i=0;i<x.length;i++) {
			x[i].style.display = "none";
		}
		index++;
		if(index > x.length) {
			index = 1
		}
		x[index-1].style.display = "block";
		setTimeout(autoSlide,3000);
	}

	</script>
</html>