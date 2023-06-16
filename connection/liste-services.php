<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Garage V. Parrot</title>

  <!-- BOOTSTRAP  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- FONT AWESOME  -->
  <script src="https://kit.fontawesome.com/1a0b88a9d7.js" crossorigin="anonymous"></script>

  <!-- CSS  -->
  <!-- <link rel="stylesheet" href="./assets/css/override-bootstrap.css"> -->
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <header class="connection-header header">
      <div class="user-connection">
        <span>Vicent</span>
        <i class="fa-solid fa-user"></i>
      </div>
      <nav class="nav">
        <a class="logo" href="/">
          <img src="../assets/images/logo_car_title.png" alt="logo garage parrot">
        </a>

        <ul class="nav-list">
          <li>
            <a class="nav-link" aria-current="page" href="#">Employés</a>
          </li>
          <li>
            <a class="nav-link" href="#connections">connections</a>
          </li>
          <li>
            <a class="nav-link" href="#cars">Horaires</a>
          </li>
          <li>
            <a class="nav-link" href="#">Veicules</a>
          </li>
          <li>
            <a class="nav-link" href="#">Avis</a>
          </li>
          <li>
            <a href="#" class="btn-wire">Deconnecter</a>
          </li>
        </ul>
        <!-- HAMBURGER MENU  -->
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>
    </header>
  </div>

  <main class="main">

    <div class="wrapper">
      <!-- connection  -->
      <section class="connection">
        <div class="connection-header">
          <h2 class="header-titles">Liste Services</h2>
          <a href="add-employee.php" class="btn  btn-fill">Ajouter</a>
        </div>

        <div class="connection-wrapper wrapper">
          <div class="connection-table">
            <table>
              <tr>
                <th>Service</th>
                <th>Description</th>
                <th>action</th>
              </tr>
              <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>
                  <a href=""><i class="fa-solid fa-pencil"></i></a>
                  <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>
              <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>
                  <a href=""><i class="fa-solid fa-pencil"></i></a>
                  <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>
              <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>
                  <a href=""><i class="fa-solid fa-pencil"></i></a>
                  <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>
              <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>
                  <a href=""><i class="fa-solid fa-pencil"></i></a>
                  <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>
              <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>
                  <a href=""><i class="fa-solid fa-pencil"></i></a>
                  <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>
              <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>
                  <a href=""><i class="fa-solid fa-pencil"></i></a>
                  <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>
              <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>
                  <a href=""><i class="fa-solid fa-pencil"></i></a>
                  <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </section>
      <!-- END connection  -->
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="../assets/scripts/scripts.js"></script>
</body>

</html>