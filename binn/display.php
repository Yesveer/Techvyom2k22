<?php


//server configuration

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techvyom";

//connection
$conn = mysqli_connect($servername, $username, $password, $dbname);




if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

$query = "SELECT name, gender, roll_no, college, year FROM students";

$result = mysqli_query($conn, $query);
?>
<table border="1" cellspacing="0" cellpadding="10">
    <tr>

        <th>Full Name</th>
        <th>Gender</th>
        <th>Roll No</th>
        <th>College</th>
        <th>Year</th>

    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        $sn = 1;
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
            <tr>

                <td><?php echo $data['name']; ?> </td>
                <td><?php echo $data['gender']; ?> </td>
                <td><?php echo $data['roll_no']; ?> </td>
                <td><?php echo $data['college']; ?> </td>
                <td><?php echo $data['year']; ?> </td>

            <tr>
            <?php
            $sn++;
        }
    } else { ?>
            <tr>
                <td colspan="8">No data found</td>
            </tr>

        <?php } ?>
</table