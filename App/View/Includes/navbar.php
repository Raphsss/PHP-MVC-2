<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SisBiblioteca</title>
  <link rel="stylesheet" href="/Css/navbar.css" />
</head>
<body class="page-navbar">

  <nav class="main-navbar">
    <div class="navbar-container">
      <a href="/" class="brand">SisBiblioteca</a>

      <button class="menu-toggle" id="menu-toggle" aria-label="Abrir menu">&#9776;</button>

      <div class="nav-links" id="nav-links">
        <a class="nav-link" href="/aluno">Aluno</a>
        <a class="nav-link" href="/livro">Livros</a>
        <a class="nav-link" href="/categoria">Categorias</a>
        <a class="nav-link" href="/autor">Autores</a>
        <a class="nav-link logout" href="/logout">Sair</a>
      </div>
    </div>
  </nav>

  <script>
    const toggleBtn = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');

    toggleBtn.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  </script>

</body>
</html>
