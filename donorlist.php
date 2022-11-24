<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor List</title>
    <link rel="stylesheet" href="donorlist.css?v=<?php echo time();?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/
font-awesome.min.css">
</head>
<body>
    <h1><i class="fa fa-users"></i>Donors List</h1>
    <br>
    <table class="table">
        <thead>
			<tr>
				<th>Full Name</th>
				<th>Gender</th>
				<th>Phone</th>
				<th>Blood Group</th>
				<th>DOB</th>
				<th>Address</th>
                <th>PinCode</th>
				<th>Country</th>
                <th>State</th>
                <th>District</th>
                
			</tr>
		</thead>

        <tbody>
            <?php
           include "db.php";
			$sql = "SELECT * FROM donor";
			$result=mysqli_query($con,$sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["gender"] . "</td>
                    <td>" . $row["phone"] . "</td>
                    <td>" . $row["blood_group"] . "</td>
                    <td>" . $row["dob"] . "</td>
                    <td>" . $row["address"] . "</td>
                    <td>" . $row["pincode"] . "</td>
                    <td>" . $row["country"] . "</td>
                    <td>" . $row["state"] . "</td>
                    <td>" . $row["district"] . "</td>
                    
                </tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>

