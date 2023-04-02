<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel</title>
</head>
<body>
    <div>
        <?php
        if(DB::connection()->getPdo()){
            echo "connnected to ".DB::connection()->getDatabaseName();
        }
        ?>
    </div>
</body>
</html>