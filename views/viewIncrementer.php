<!DOCTYPE html>
<html>
<head>
    <title>Simple Incrementer</title>
</head>
<body>
    <h1>Simple Incrementer</h1>
    <form action="controllerIncrementer.php" method="post">
        <label for="textbox">Number</label>
        <input type="text" id="textbox" name="textbox">
        <input type="submit" value="Submit">
    </form>
    <p>Result: <?php echo $result;?> </p>
    <a href="../index.php">Home</p>
</body>
</html>