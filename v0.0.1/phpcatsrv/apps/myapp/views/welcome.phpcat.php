<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	<style type="text/css">
	body{
		padding: 0;
		margin: 0;
		background: #373B44;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #aaa, #fff);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #aaa, #fff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	}
	#flex{
		display: flex;
		height: 100vh;
		justify-content:center;
		align-items:center;
		flex-direction:column;
	}
	#title{
		font-family: 'Open Sans', sans-serif;
		font-weight: normal;
		font-size: 64px;
		color: #666;
	}
	#sub-title{
		font-family: 'Open Sans', sans-serif;
		font-weight: normal;
		font-size: 24px;
		color: #666;
	}
	</style>
</head>
<body>
	<div id="flex">
		<span id="title">Welcome to PhpCat</span>
		<span id="sub-title">--version 0.0.1</span>
	</div>

</body>
</html>