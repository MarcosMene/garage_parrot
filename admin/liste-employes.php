<?php
require_once __DIR__ . "/../lib/config.php";
require_once __DIR__ . "/../lib/session.php";
//only admin has permission to visit this page
adminOnly();
require_once __DIR__ . "/../lib/pdo.php";
require_once __DIR__ . "/../lib/employees.php";
require_once __DIR__ . "/templates/header-admin.php";


if (isset($_GET['page'])) {
  $page = (int)$_GET['page'];
} else {
  $page = 1;
}

//get employees
$employees = getEmployees($pdo, _ADMIN_ITEM_PER_PAGE_, $page);


//get total number of employees
$totalEmployees = getTotalEmployees($pdo);

//total pages according to total employees
$totalPages = ceil($totalEmployees / _ADMIN_ITEM_PER_PAGE_);
?>


<!-- if employees and page exist otherwise message error  -->
<div class="wrapper">
  <!-- connection  -->
  <section class="connection">
    <div class="connection-header">
      <h1 class="header-titles">Liste Employés</h1>
      <a href="ajouter-employe.php" class="btn  btn-fill">Ajouter</a>
    </div>
    <?php if ($employees && $page) : ?>

    <div class="connection-wrapper wrapper">
      <div class="connection-table">
        <table>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>role</th>
            <th class="size100">action</th>
          </tr>
          <tbody>
            <?php foreach ($employees as $employee) { ?>
            <tr>
              <td><?= $employee["lastname"]; ?></td>
              <td><?= $employee["name"]; ?></td>
              <td><?= $employee["email"]; ?></td>
              <td><?= $employee["role"]; ?></td>

              <?php if ($employee["role"] === 'employee') { ?>
              <td><a href="modifier-employe.php?id=<?= $employee['id'] ?>"><i class="fa-solid fa-pencil"></i></a>
                | <a href="delete-employe.php?id=<?= $employee['id'] ?>"
                  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet employé ?')"><i
                    class="fa-solid fa-trash-can"></i></a>
                <?php } ?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>
      <nav aria-label="Page navigation employes">
        <ul class="pagination">
          <?php if ($totalPages > 1) { ?>
          <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
          <li class="page-item">
            <a class="page-link <?php if ($i == $page) {
                                        echo " active";
                                      } ?>" href="?page=<?php echo $i; ?>">
              <?php echo $i; ?>
            </a>
          </li>
          <?php } ?>
          <?php } ?>
        </ul>
      </nav>
    </div>
    <?php else : ?>
    <article class="cards">
      <h3 class="message my-5">Aucune employé pour le moment.</h3>
    </article>
    <?php endif ?>
  </section>
  <!-- END connection  -->
</div>

<?php
require_once __DIR__ . "/templates/footer-admin.php";
?>