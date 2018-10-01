<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Crossword </title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	<script src="/js/jquery.js"></script>
<script src="/js/crossword.js"></script>

	<script src="/js/script.js"></script>

	<style type="text/css" media="screen">
	/*
		Default puzzle styling
	*/
	body {
		font: 62.5%/1.3em Helvetica, sans-serif;
		width: 100%;
	
	}
		table { 
			border-collapse: collapse; 
			border-spacing: 0; 
			max-width: 100%;
		}
		table tr{
			width: 100%;
		}
		table td {
			width: 25px;
			height:25px;
			border: 1px solid #cdcdcd;
			padding: 0;
			margin: 0;
			background-color: #333;
			position: relative;
		}
				
		td input {
			width: 100%;
			height: 100%;
			padding: 0em;
			border: none;
			text-align: center;
			font-size: 2em;
			color: #666;
			background-color: #f4f4f4;
		}
		
		td input:focus {
			background-color: #fff;
		}
		
		td span {
			color: #444;
			font-size: 1em;
			position: absolute;
			top: 3.8px;
			left: 1px;
		}
		
		input.done {
			font-weight: bold;
			color: green;
		}
		
		.active,
		.clues-active {
			background-color: #ddd;
		}
		.clue-done {
			color: #999;
			text-decoration: line-through;
		}
		
		#puzzle-wrapper {
			 float:left;
			width: 50%;
			margin-left: 0%;
		}
		#puzzle-clues {
			float: left;
			width: 40%;
			margin-left:5%
					
}
		
		#puzzle-clues li{
			font-size: 2em;
			margin: 0.3em;
			line-height: 2em;
		}
		
	</style>

</head>

<body>
	
<div class="row">
<div class="col s12 l6 m12">
<div id="puzzle-wrapper"></div>
</div>


	</body></html>
