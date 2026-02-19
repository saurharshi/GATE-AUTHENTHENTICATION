<html>
	<head>
		<title>
			database demo
		</title>
	</head>
	<body>
		<?php
			$servername = "localhost:3306";
			$dbUserName = "root";
			$password = "";
			
			$conn = new mysqli($servername,$dbUserName,$password,"webapp");
			
			$sql = "SELECT * FROM login";
			
			$result = $conn->query($sql);
			
			while($row=$result->fetch_assoc())
			{
				echo "Login Id: ".$row['login_id']." and Password : ".$row['password']."</br>";
			}
			
		?>
	</body>
</html>