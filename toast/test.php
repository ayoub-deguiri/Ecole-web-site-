
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="beautyToast.css">
    <script>
 beautyToast.success({
   title: 'Success', 
   message: 'Success Message' 
 });
 </script>
</head>
<body>
    <button onclick="test()">test</button>
    <script>
       
    </script>
    <script src="beautyToast.js"></script>
    <?php
 echo "<script>
 beautyToast.success({
   title: 'Success', 
   message: 'Success Message' 
 });
 </script>";
?>
</body>
</html>