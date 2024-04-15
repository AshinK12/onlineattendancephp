<?php
include 'test.php';

// Retrieve attendance records from database
$sql = "SELECT * FROM attendance";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Attendance Dashboard</title>
</head>
<body>
    <h2>Employee Attendance Dashboard</h2>
    <table border="1">
        <tr>
            <th>Employee ID</th>
            <th>Attendance Date</th>
            <th>Status</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["employee_id"]. "</td><td>" . $row["attendance_date"]. "</td><td>" . $row["status"]. "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</body>
</html>
