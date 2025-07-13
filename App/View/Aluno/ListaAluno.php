<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Lista.css">
    <title>Listagem de alunos</title>
</head>

<body class="page-student-list">

    <?php include VIEWS . "/Includes/navbar.php" ?>

    <div class="table-actions">
        <a href="/aluno/form" class="btn-add-student">+ Adicionar Aluno</a>
    </div>
    
    <table class="student-table">
        <thead class="table-header">
            <tr class="header-row">
                <th class="header-cell">Id</th>
                <th class="header-cell">Nome</th>
                <th class="header-cell">RA</th>
                <th class="header-cell">Curso</th>
                <th class="header-cell">Ações</th>
            </tr>
        </thead>
        <tbody class="table-body">
            <?php foreach ($model->rows as $item): ?>
                <tr class="data-row">
                    <td class="data-cell" data-label="Id"><?= $item->Id ?></td>
                    <td class="data-cell" data-label="Nome"><?= $item->Nome ?></td>
                    <td class="data-cell" data-label="RA"><?= $item->RA ?></td>
                    <td class="data-cell" data-label="Curso"><?= $item->Curso ?></td>
                    <td class="data-cell" data-label="Ações">
                        <a class="link-update" href="/aluno/form?id=<?= $item->Id ?>">Atualizar</a>
                        <a class="link-delete"
                            href="/aluno/delete?id=<?= $item->Id ?>"
                            onclick="return confirm('Tem certeza que deseja excluir este aluno?')">
                            Excluir
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>

            <?php if (count($model->rows) == 0): ?>
                <tr class="empty-row">
                    <td class="empty-cell" colspan="5">Nenhum registro encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>