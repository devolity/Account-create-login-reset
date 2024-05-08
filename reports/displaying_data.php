<?php
$db_host = 'localhost'; // Server Name
$db_user = 'aidbsdata'; // Username
$db_pass = 'bRn#QD768=hAELs;'; // Password
$db_name = 'aidbs_data'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM aidbs_registration';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Aidbs Data Report</title>
	<link href="data/aidbs-data.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="data/favicons.ico" />	
	
</head>
<body>
<a href="/"><img src="data/logo.png" alt="logo" class="logo-default"/></a>
	<h1>DATA SHEET</h1>
	<table class="data-table">
		<caption class="title">Aidbs Account-Create data Details</caption>
		<thead>
			<tr>
				  <th>ID No.</th>
					<th>FIRST NAME</th>
					<th>LAST NAME</th>
					<th>EMAIL</th>
          <th>PHONE</th>
          <th>GENDER</th>
          <th>BIRTHDAY</th>
          <th>PASSWORD</th>
					<th>DOMAIN</th>
					<th>Reg. Date</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
		  echo "<tr>";
		  echo "<td>" . $row['id'] . "</td>";
		  echo "<td>" . $row['fname'] . "</td>";
		  echo "<td>" . $row['lname'] . "</td>";
		  echo "<td>" . $row['email'] . "</td>";
		  echo "<td>" . $row['phone'] . "</td>";
		  echo "<td>" . $row['gender'] . "</td>";
		  echo "<td>" . $row['birthday'] . "</td>";
		  echo "<td>" . $row['password'] . "</td>";
		  echo "<td>" . $row['domain'] . "</td>";
		  echo "<td>" . date('F d, Y', strtotime($row['subdate'])) . "</td>";
		  echo "</tr>";
		}		?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="4">Remark</th>
				<th><?=number_format($total)?></th>
			</tr>
		</tfoot>
	</table>
</body>
</html>
