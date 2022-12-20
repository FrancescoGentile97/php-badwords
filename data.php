<?php
$message = $_POST["message"];
$password = $_POST["password"];

?>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="text-center my-4">
            <h1 class="text-danger">PHP Badwords</h1>
        </div>
        <div class="my-4">
            <h2 class="pb-3">Paragraph: <?php echo $message ?></h2>
            <p>Paragraph lenght: <?php echo strlen($message)?></p>
            <p>Word to censor: <?php echo $password ?></p>
        </div>
        <div class="py-4 text-info">
            <h3><?php echo str_replace("$password", "***", $message)?></h3>
            <p>Paragraph lenght:: <?php echo strlen($message)?></p>
        </div>
    </div>
</body>