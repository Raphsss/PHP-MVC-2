<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cadastro de Aluno</title>
    <link  rel="stylesheet" href="/css/Form.css" />
</head>

<body class="page-student-form">
    <?php include VIEWS . '/Includes/navbar.php' ?>

    <div class="form-container">
        <div class="form-box">
            <h1 class="form-title">Cadastro de Aluno</h1>

            <?php if (!empty(trim($model->getErrors()))): ?>
                <div class="error-message">
                    <?= $model->getErrors() ?>
                </div>
            <?php endif; ?>

            <form method="post" action="/aluno/form">
                <input name="id" type="hidden" value="<?= $model->Id ?? '' ?>" />

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" value="<?= $model->Nome ?? '' ?>" name="nome" id="nome" required>
                </div>

                <div class="form-group">
                    <label for="ra">RA:</label>
                    <input type="text" value="<?= $model->RA ?? '' ?>" name="ra" id="ra" required>
                </div>

                <div class="form-group">
                    <label for="curso">Curso:</label>
                    <input type="text" value="<?= $model->Curso ?? '' ?>" name="curso" id="curso" required>
                </div>

                <button type="submit" class="btn-submit">Salvar</button>
            </form>
        </div>
    </div>
</body>

</html>
