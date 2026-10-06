<!DOCTYPE html>
<html lang="en">
<head>
    <title> Cars HTML Table</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML5">
    <meta name="author" content="">
</head>

<body>
    <?php 
        require_once('settings.php');
        $db_con = mysqli_connect("localhost", "root", "", "exhibition_ db");
        if ($db_con) 
        {
            $sql = "SELECT * FROM cars";
            $result = mysqli_query($db_con, $sql);
            if ($result)
                {
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        echo "<tr>";
                        echo "<td>" . $row['car_id'] . "</td>";
                        echo "<td>" . $row['make'] . "</td>";
                        echo "<td>" . $row['model'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['yom'] . "</td>";
                        echo "</tr>";
                    }
                }
                else 
                {
                    echo "<p>There are no Records.</p>";
                }

            mysqli_close($db_con);
        }
        else
        {
            die("Unable to connect to database: " . mysqli_connect_error());
        }

    ?>
</body>