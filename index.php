
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulario</h1>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <label>Arquivo </label>
        <input type="file" name="arquive" id="arquive">
        <br>
        <input type="submit" name="acao" value="cadastrar">
      </form>
</body>
</html>

<?php 
    if(isset($_POST['acao'])){
        $arquivo = $_FILES['arquive'];
        //var_dump($_FILES['arquive']);

       if (move_uploaded_file($arquivo['tmp_name'], 'uploads/'.$arquivo['name'])) {
            echo "Upload do arquivo com sucesso";
       } else {
            echo "Falha ao subir arquivo";
       }
       
    }

 
?>