<!DOCTYPE html>
<html>
<head>
    <title>My PHP Template</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    test xfr
    <?php include('./templates/_header.php'); ?>

    <h1><?php echo "Hello, World!"; ?></h1>
    <p><?php echo "Today is " . date('Y-m-d'); ?></p>

    <?php include('./templates/_footer.php'); ?>


</body>
</html>