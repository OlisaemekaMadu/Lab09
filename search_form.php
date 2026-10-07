<!DOCTYPE html>
<html lang="en">
<head>
    <title> Model Search Page</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML5">
    <meta name="author" content="">
</head>

<body>

    <form action="search_result.php" method="get">

        <label for="username">Enter Car model:</label>
        <input type="text" id="model" name="model" required><br>

        <input type="hidden" name="token" value="abc123">
        <input type="submit" value="Login">
    </form>
    
</body>



</html>