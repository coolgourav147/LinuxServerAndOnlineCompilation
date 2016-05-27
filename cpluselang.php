<html>
<head>
	<style>
		#prog{
			background-color:red;
		//	width:50%;
			//height:90%;
			margin:0px;
		}
		#sub{
			float:right;
			font-size:20px;
		}
		textarea{
			font-family:comic sans ms;
			font-size:16px;
			color:blue;
			font-style:bold;
			 opacity:0.7;
		}
		#out{
			margin-top:0%;
			//border:5px solid green;
			//background-color:red;
			float:top;
			width:100%;
			height:100%;
		}
		#p{
			color:green;
		}
		table{
			background-color:black;
		}
		#pout{

			font-size:40px;
			color:green;
		}
		#nemi{
			color:green;
		}
	</style>
</head>
<body>
<table width='100%' border='5px'>
	<tr>
		<td width='50%'>
			<div id='prog'>
				<form action='cpluslang.php' method='POST' />
					<b>ENTER YOUR C++ LANGUAGE PROGRAMM HERE</b>
					<input id='sub' type='submit' />
					<br />
					<textarea name='prog' rows='40' cols='80' ></textarea>
					<br />
				</form>
			</div>
		</td>
		<td width='50%'>
			<div id='out'>
				<p id='p'>
				<?php
					$prog=$_POST['prog'];
					$i=rand();
					$j=rand();
					$k= $i*$j;
					$l="nemi.cpp";
					$m="$k"."$l";
					$n="/ggg/$m";
					file_put_contents("$n","$prog");
					//shell_exec("sudo gcc $n -o /ggg/$k 2&>/ggg/$k.txt");
					shell_exec("sudo g++ $n -o /ggg/$k");
					shell_exec("sudo g++ $n  2> /ggg/$k.txt");
					//echo "<p id='pout'>";
					$output=shell_exec("sudo /ggg/./$k ");
					//echo shell_exec("cat /ggg/$k.txt");
					echo "<p id='pout'>$output</p>";
					$error = file_get_contents("/ggg/$k.txt");	
					echo "<pre id='nemi'>" . "$error" . "</pre>";
				?>
				</p>
			</div>
		</td>
	</tr>
</table>
</body>

</html>
