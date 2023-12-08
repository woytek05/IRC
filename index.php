<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IRC</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <?php
        phpinfo();
        ?>
        <div class="main">
            <textarea class="textarea" name="textarea" id="textarea" readonly></textarea>
            <input class="input" placeholder="Write something..." type="text" name="input" id="input">
        </div>
    </div>
</body>

</html>