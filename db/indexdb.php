<?php 
    include'header.php';
    include'db_config.php';
	
	
		$query ="insert into user values('NULL','2123','pk123','1234')";
		echo execute($query);
		
		/*if(mysqli_query($conn,$query)){
			echo "row inserted";
		}  
		else{
			if(mysqli_errno($conn)=="1136"){
	 			echo"There are may be problem with db  insertion, connect your administator";
			}
		}*/
		 
		$query="select * from user";
		$result= get($query);	
		echo"<table border='1'>"; 
		echo"<tr>
		     <th>Id</th><th>Name</th><th>Username</th>
			 </tr>";
		foreach ($result as $row){
			echo"<tr>";
			echo"<td>".$row["id"]."</td>";
			echo"<td>".$row["name"]."</td>";
			echo"<td>".$row["username"]."</td>";
			echo"</tr>";  
		}
		
		echo"</table>";
 
    include 'footer.php';
?>