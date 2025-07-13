<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistema Biblioteca - Login</title>
    <link href="/css/Form.css" rel="stylesheet" />
</head>

<body class="page-student-form">

    <div class="form-container">
        <div class="form-box">
            <h1 class="form-title">Login</h1>

            <?php if (!empty($erro)) : ?>
                <div class="error-message">
                    <?= htmlspecialchars($erro) ?>
                </div>
            <?php endif; ?>

            <form method="post" action="/login">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email"
                        value="<?= isset($model->Email) ? htmlspecialchars($model->Email) : '' ?>" required />
                </div>

                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required />
                </div>

                <div class="form-group" style="flex-direction: row; align-items: center; gap: 0.5rem;">
                    <input type="checkbox" name="lembrar" id="lembrar" style="width: auto; margin: 0;" />
                    <label for="lembrar" style="margin: 0; font-weight: normal;">Lembrar meu usuário</label>
                </div>

                <button type="submit" class="btn-submit">Entrar</button>
            </form>
        </div>
    </div>

</body>

</html>
