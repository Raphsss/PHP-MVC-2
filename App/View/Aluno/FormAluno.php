<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
            min-height: 100vh;
        }

        h1 {
            color: #333;
            font-weight: 600;
            margin-bottom: 2rem;
            text-align: center;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: background-color 0.2s ease-in-out;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .form-control {
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }
    </style>
</head>

<body class="d-flex flex-column">
    <?php include VIEWS . '/Includes/navbar.php' ?>

    <div class="container d-flex flex-grow-1 justify-content-center align-items-center p-4">
        <div class="row justify-content-center w-100">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="bg-white rounded-4 shadow-lg p-4 my-5">

                    <h1>Cadastro de Aluno</h1>

                    <?php if (!empty(trim($model->getErrors()))): ?>
                        <div class="error-message">
                            <?= $model->getErrors() ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="/aluno/form">
                        <input name="id" type="hidden" value="<?= $model->Id ?? '' ?>" />

                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" value="<?= $model->Nome ?? '' ?>"
                                class="form-control" name="nome" id="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="ra" class="form-label">RA:</label>
                            <input type="text" value="<?= $model->RA ?? '' ?>"
                                class="form-control" name="ra" id="ra" required>
                        </div>
                        <div class="mb-3">
                            <label for="curso" class="form-label">Curso:</label>
                            <input type="text" value="<?= $model->Curso ?? '' ?>"
                                class="form-control" name="curso" id="curso" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>