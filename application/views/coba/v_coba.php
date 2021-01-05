<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<?php
	echo count($jum_Stu);
	if($jum_stu>1)
		{		
			foreach($jum_stu as $row)
			{
				echo "Studio ".$row['nama_studio'];
				echo "<table border='1'>";
				$tmp_id_studio=$row["id_studio"];
				foreach($dat_table as $row2)
				{
					$id_stu=$row2["id_studio"];
					if($id_stu == $tmp_id_studio)
					{
						echo "<tr>";
						echo "<td>".$row2["nama_band"]."</td>";
						echo "<td>".$row2["jam_msk"]."</td>";
						echo "<td>".$row2["jam_klr"]."</td>";
						echo "</tr>";
					}
				}
				echo "</table>";
			}	
		}else
		{
			echo "<table border='1'>";
			foreach($dat_table as $row2)
				{	
					echo "<tr>";
					echo "<td>".$row2["nama_band"]."</td>";
					echo "<td>".$row2["jam_msk"]."</td>";
					echo "<td>".$row2["jam_klr"]."</td>";
					echo "</tr>";
				}
			echo "</table>";	
		}
?>

<?php
	//echo var_dump($dat_table);

?>

</body>
</html>