<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Caixa de comentário</title>
    <link rel="stylesheet" href="materialize/css/estilo.css">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="materialize/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>formulario crud</title>
    </head>
</head>
<style>

</style>
<body>
    <div class="detailBox">
        <div class="titleBox">
          <h3>Comentários</h3>
      </div>
      <div class="commentBox">
       <form class="form-inline" role="form" method="post" action="inserir.php">
        <div class="form-group">
            <input class="form-control" name="nome" type="text" value="" placeholder="Digite seu nome" />
        </div>
        <div class="form-group">
            <textarea style="width: 45em; height: 10rem;" rows="4" cols="50" name="comentario"  placeholder="comente aqui ..">
            </textarea> 
        </div>
        <div class="form-group">
            <input type="submit" value="comentar" class="btn blue" name="validar" >
        </div>
    </form>
</div>
<div class="actionBox">
    <h5 class="light">Consultas</h5><hr>
    <table class="striped">
        <thead>
            <td>Nome</td>
            <td>comentário</td>
        </thead>
        <tbody>
            <?php include_once ('ler.php'); ?>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
    <p class="taskDescription" style="text-align: center; font-weight: bolder;">
        Todos os direitos reservados 2018
    </p>
</div>
</div>
<script type="text/javascript" src="materialize/js/jquery.min.js"></script>
<script type="text/javascript" src="materiaaliza/js/materialize.min.js"></script>
<!-- Inicializando materialize  -->
<script type="text/javascript">
    $(document).ready(function(){

    });
</script>
</body>
</html>
