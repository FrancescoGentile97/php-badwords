<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="text-center my-4 text-danger">
            <h1>PHP Badwords</h1>
        </div>
        <div class="row py-4">
            <div class="col-md-6">
                <form action="data.php" method="POST">
                    <div class="mb-4">
                        <label class="form-label">Paragraph</label>
                        <input type="text" class="form-control" name="message">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Word to censor</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <button class="btn btn-danger">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>