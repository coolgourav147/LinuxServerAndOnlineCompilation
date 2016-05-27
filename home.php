<?php
session_start();
if($_SESSION['x']==='lock'){
	print "<html>
<head>
	<link rel='stylesheet' type='text/css' href='mmm.css'>
</head>
<body>
	<div id='main'>
		<table id='table1'>
			<tr>
				<td>
					<div id='welcome'>
						Welcome Root
					</div>
				</td>
				<td>
					<div id='logout'>
						<a href='' id='l1'>LogOut!</a>
					</div>
				</td>
			</tr>
		</table>
		<table id='table2' >
			<tr>
				<td id='td2'>
					<div id='mar1'>
						<marquee id='m1'><h1 id='h2'>Linux World</h1></marquee>
					</div>
				</td>
				<td id='td2'>
					<div id='mar2' >
						<marquee id='m2' direction='right'><h1 id='h2'>dlroW xuniL</h1></marquee>
					</div>
				</td>
			</tr>
		</table>
		<hr />
		<table id='table3'>
			<tr>
				<td id='c1'>
					<div>
						<marquee direction='down' height='50%' onmouseover='this.stop();' onmouseout='this.start();' >
							<a href='basic.php' id='a'>basic commands</a><br />
							<a href='filesys.php' id='a'>File System</a><br />	
							<a href='server.php' id='a'>Servers</a><br />
						</marquee>
						<marquee direction='up' height='50%' onmouseover='this.stop();' onmouseout='this.start();'>
							<a href='server.php' id='a'>Servers</a><br />
							<a href='filesys.php' id='a'>File System</a><br />
							<a href='basic.php' id='a'>basic commands</a><br />
						</marquee>
					</div>
				</td>
				<td>
					<div>
						<center>
							<table id='table4'>
							<tr>
								<td id='as'><a href='crtusr.php'>Create User</a></td>
								<td id='as'><a href='filesys.php'>File System</a></td>
							</tr>
							<tr>
								<td id='as'><a href='server.php'>Servers</a></td>
								<td id='as'><a href='basic.php'>Basic Commands</a></td>
							</tr>
							</table>
						</center>
					</div>
				</td>
				<td id='c1'>
					<div id='t3d'>
						<marquee direction='down' height='50%' onmouseover='this.stop();' onmouseout='this.start();'>
							<a href='basic.php' id='a'>basic commands</a><br />
							<a href='filesys.php' id='a'>File System</a><br />
							<a href='server.php' id='a'>Servers</a><br />
						</marquee>
						<marquee direction='up' height='50%' onmouseover='this.stop();' onmouseout='this.start();'>
						<a href='server.php' id='a'>Servers</a><br />
						<a href='filesys.php' id='a'>File System</a><br />
						<a href='basic.php' id='a'>basic commands </a>
						</marquee>
					</div>
				</td>
			</tr>
		</table>
			<p id='t'><b><i>Special Thnkyou:</i></b></p>
			<p  id='t'>Vikash Sir</p>
			<p  id='t'>Vimal sir</p>
			<p  id='t'>Abhishek sir</p>
			<p  id='t'>Ashutosh sir</p>
	</div>
</body>
</html>"; 
}
else{
	header('location: log_in.html');
}
?>
