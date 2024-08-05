<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: examp1</title>
    <script>
        var x = 10, y = 20;
        var z = x + y;
        document.write("Sum of "+x+" and "+y+"is: " +z);
        </script>
</head>
<body>
    <?php
    $x = 10;
    $y = 20;
    $z = $x + $y;
    print("<br> Sum of".$x." and ".$y." is : " .$z);
    ?>
    <h1>This will dispaley the javascript code using innerHTML</h1>
    <p>
        Hello! I am paragraph
     </p>
</body>
</html>