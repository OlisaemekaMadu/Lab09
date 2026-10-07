<!DOCTYPE html>
<html lang="en">
<head>
    <title> Cars Model HTML Table</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML5">
    <meta name="author" content="">
</head>

<body>
    <?php 
        require_once('settings.php');
        $db_con = mysqli_connect("localhost", "root", "", "exhibition_ db");
        $model_entered = mysqli_real_escape_string($db_con, $_GET['model']);

        if (isset($model_entered))
        {
            $sql = "SELECT * FROM cars WHERE model = '$model_entered';";
            $result = mysqli_query($db_con, $sql);

            if (mysqli_num_rows($result) > 0) 
            {
                echo "<table border='1' cellpadding='5'>";
                echo "<tr><th>ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>";
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
                echo "🚫 No matching cars found. <a href='search_form.php'>Try Again</a>";
            }
            mysqli_close($db_con);
        }
        else
        {
            echo "Invalid login. <a href='search_form.php'>Please enter a model to search.</a>";
        }

    ?>
</body>