
<!DOCTYPE html>
<html>
<head>
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<style type="text/css">
		.query-string a{
			display: block;
			margin: 15px 0px;
			text-decoration: none;
		}
		#getValue{
			border: 0px;
    background: #f9023b;
    color: white;
    padding: 4px 10px;
    
		}
		#getValue:hover{	
    box-shadow: 0px 0px 15px #00000040;
		}
		html,body{
			padding: 0px;
			margin:0px;
			overflow-x: hidden;
		}
		.query-string{
			padding: 20px;
		}
	</style>
</head>
<body>
	
<div class="query-string">
		
<a href="index.php?id=1&language=html">First Query String URL  </a>
<a href="index.php?id=2&language=css"> Second Query String URL  </a>
<a href="index.php?id=3&language=javascript"> Third Query String URL  </a>
<a href="index.php?id=4&language=php">Fourth Query String URL </a>

<button id="getValue">
	Get Query String Value
</button>
<br><br>
<div id="result"></div>
</div>
<script type="text/javascript" src="custom.js"></script>
</body>
</html>
