<header>
  <!-- Navbar -->
  <?php 
$arqui = explode(DIRECTORY_SEPARATOR,$_SERVER['PHP_SELF']);
?>

  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">3°B Técnico em Informática</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Opções</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link <?php if($arqui[2]=='index.php')echo 'active'; ?>" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link <?php if($arqui[2]=='clientes.php')echo 'active'; ?>" href="clientes.php">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($arqui[2]=='servicos.php')echo 'active'; ?>" href="servicos.php">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($arqui[2]=='vendas.php')echo 'active'; ?>" href="ordens.php">Ordens de Serviço</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($arqui[2]=='usuarios.php')echo 'active'; ?>" href="usuarios.php">Usuários</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  
  <!-- Background image -->
  <div
    class="p-4 text-center bg-image"
    style="
      background-image: url('images/background-header.png');
      height: 330px; background-repeat:no-repeat; background-size: cover;">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); margin-top: 100px;">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-1" style="font-family: 'Sifonn', sans-serif;">Site Programação Web</h1>
          <h2 class="mb-1" style="font-family: 'Sifonn', sans-serif;">Lucas Furtado Souza</h2>
          <h4 style="font-family: 'Kanit', sans-serif;">IFRO - <i>Campus</i> Ji-Paraná</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>