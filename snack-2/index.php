<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="name" id="name" placeholder="Name">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="text" name="age" id="age" placeholder="Age">
        <button type="submit">
            login
        </button>
    </form>
    <p>
    <?php 
        if( empty($_GET["name"]) && empty($_GET["email"]) && empty($_GET["age"])){
            echo "Manca qualcosa...";
        }else if(strlen($_GET["name"]) <= 3){
            echo "Nome non valido!";
        }else if(strpos($_GET["email"], ".") && strpos($_GET["email"], "@")){
            echo "Email non valida!";
        }else if(gettype($_GET["age"] != "integer")){
            echo "Età non valida!";
        }else{
            echo "Accesso riuscito!";
        }
    ?>
    </p>
</body>
</html>