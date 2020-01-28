<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Projeto php fundamentos</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Treinaweb</span>
    </nav>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome do curso</th>
                    <th scope="col">Carga Horária</th>
                    <th scope="col">Versão da ferramenta</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(cursos() as $curso) : ?>
                    <?php if (!$curso["status"]) {
                        continue;
                    } ?>

                    <tr>
                        <th scope="row"><?= $curso["nome_curso"] ?></th>
                        <td><?= carga_horaria($curso["carga_horaria"]) ?></td>
                        <td><?= $curso["versao_ferramenta"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>