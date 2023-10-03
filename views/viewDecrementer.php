<!DOCTYPE html>
<html>
<head>
    <title>Simple Decrementer</title>
</head>
<body>
    <h1>Simple Decrementer</h1>
    <form action="controllerDecrementer.php" method="post">
        <label for="textbox">Number</label>
        <input type="text" id="textbox" name="textbox">
        <input type="submit" value="Submit">
    </form>
    <p>Result: <?php echo $result;?> </p>
    <a href="../index.php">Home</p>
</body>
</html>