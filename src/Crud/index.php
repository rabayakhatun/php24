
<?php
include '../Keya_tasks/header.php';
?>
<div class="container">
<br>
<h2>Input Your Information Below:</h2>
<br>
<form name="form1" method="post" action="">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
            </div>
        </div>
    </div><br>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
            </div>
            <div class="col">
                <label for="groupid">Group ID:</label>
                <select class="form-control" id="groupid" name="groupid">
                    <option value="BBCAP19">BBCAP19</option>
                    <option value="BBCAP20">BBCAP20</option>
                    <option value="BBCAP21">BBCAP21</option>
                    <option value="BBCAP22">BBCAP22</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div><br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button><br>
</form>
<br>

<?php

if (isset($_POST['submit'])) {
    
    $fname = $_POST['fname'];     
    $lname = $_POST['lname'];     
    $city = $_POST['city'];      
    $groupid = $_POST['groupid']; 

    
    include 'db.php';

    
    $sql = "INSERT INTO studentInfo (first_name, last_name, city, groupid)
            VALUES ('$fname', '$lname', '$city', '$groupid')";

    
    if ($conn->query($sql) === TRUE) {
        
        echo "New record added";
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>
<?php

include 'db.php';

$sql = "SELECT * FROM studentInfo";


$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table class='table table-striped-columns'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Group ID</th>
                    <th>Edit/Remove</th>
                </tr>
            </thead>
            <tbody>";

    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['city']}</td>
                <td>{$row['groupId']}</td>
                <td><a href='updatesingle.php?id=$row[id]'><i class='fa fa-edit'></i></a></td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    
    echo "No results";
}

$conn->close();
?>
</div>
<?php
include '../Keya_tasks/footer.php';
?>