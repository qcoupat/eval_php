<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EVAL DWWM - Form edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
if ($_POST){
    try {
        require_once("db.php");
        $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
        PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION);
        @$title = $_POST['title'];
        @$description = $_POST['description'];
        @$date = $_POST['date'];
        $sql = "INSERT INTO posts (post_title, description, post_at) VALUES ('$title', '$description','$date')";
        $result = $cnx-> exec($sql);
        header('location:index.php');
    } catch (Exception $e) {
        die('Erreur : '.$e->getmessage());
    }
}
?>

<a class="btn btn-primary" href="index.php" role="button">Back to List</a>
<h3>Ajouter un article</h3>
<div class="row">
    <div class="col-12 col-md-6">
        <form method="post" action="#">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Veuillez entrer le titre" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="4" class="form-control" placeholder="Entrez la description" required></textarea>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" name="date" id="date" value="<?php echo date('y-m-d');?>"required>
        </div>
        <button type="submit" class="btn btn-dark" name="valider">Add</button>
        </form>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
    
</body>
</html>