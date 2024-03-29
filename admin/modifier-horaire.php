<?php
require_once __DIR__ . "/../lib/config.php";
require_once __DIR__ . "/../lib/session.php";
//only admin has permission to visit this page
adminOnly();
require_once __DIR__ . "/../lib/pdo.php";
require_once __DIR__ . "/../lib/tools.php";
require_once __DIR__ . "/../lib/schedules.php";
require_once __DIR__ . "/templates/header-admin.php";



//VARIABLES
$errors = [];
$messages = [];

$id = null;


if (isset($_GET['id'])) {
  $id = (int)$_GET['id'];
  $schedule = getSchedulesById($pdo, $_GET['id']);
  $_SESSION['schedule'] = $schedule;
}

$_SESSION['token'] = bin2hex(random_bytes(30));
?>

<!-- send message by form  -->
<script>
  $(document).ready(function() {
    $("form").submit(function(event) {
      event.preventDefault();
      var morningOpen = $("#morning-open").val();
      var morningClose = $("#morning-close").val();
      var afternoonOpen = $("#afternoon-open").val();
      var afternoonClose = $("#afternoon-close").val();
      var submit = $("#submit").val();

      $(".form-message").load('modifierHoraire.php', {
        morningOpen: morningOpen,
        morningClose: morningClose,
        afternoonOpen: afternoonOpen,
        afternoonClose: afternoonClose,
        submit: submit
      });
    })
  })
</script>

<div class="wrapper">

  <!-- BREADCRUMB  -->
  <div class="breadcrumbs breadcrumbs-connection">
    <div class="go-back-list">
      <a href="/admin/liste-horaires.php">Revenir liste horaires</a>
    </div>
  </div>
  <!-- END BREADCRUMB  -->

  <!-- connection  -->
  <section class="connection sections" id="connection">
    <h1 class="header-titles">Modifier Horaire</h1>

    <?php if ($schedule) : ?>
      <!-- messages  -->
      <div class="form-message flex-column d-flex flex-wrap justify-content-center mt-3">
      </div>

      <div class="w-100 text-center mt-4 d-none" id="backPage">
        <a href="javascript:history.back(1)" class="btn-fill ">Retourner liste horaires</a>
      </div>


      <div class="connection-wrapper w-max">

        <form action="modifierHoraire.php" method="POST">
          <div class="schedule-form">
            <p class="text-center text-uppercase font-weight-bold mb-0"><?= $schedule['day'] ?></p>
            <div class="class-group text-center">
              <p class="time-message">&gt;&gt; L'horaire 00:00 = fermé &lt;&lt;</p>
            </div>
            <fieldset>
              <legend>Matin</legend>
              <div class="form-group">
                <label for="morning-open">Ouverture</label>
                <input type="text" name="morning-open" id="morning-open" placeholder="00:00" minlength="5" maxlength="5" autocomplete="off" value=<?= htmlspecialchars($schedule['morningOpen'] ?? ""); ?>>
              </div>
              <div class="form-group">
                <label for="morning-close">Fermeture</label>
                <input type="text" name="morning-close" id="morning-close" placeholder="00:00" minlength="5" maxlength="5" autocomplete="off" value=<?= htmlspecialchars($schedule['morningClose'] ?? ""); ?>>
              </div>
            </fieldset>
            <fieldset>
              <legend>Après-midi</legend>
              <div class="form-group">
                <label for="afternoon-open">Ouverture</label>
                <input type="text" name="afternoon-open" id="afternoon-open" placeholder="00:00" minlength="5" maxlength="5" autocomplete="off" value=<?= htmlspecialchars($schedule['afternoonOpen'] ?? ""); ?>>
              </div>
              <div class="form-group">
                <label for="afternoon-close">Fermeture</label>
                <input type="text" name="afternoon-close" id="afternoon-close" placeholder="00:00" minlength="5" maxlength="5" autocomplete="off" value=<?= htmlspecialchars($schedule['afternoonClose'] ?? ""); ?>>
              </div>
            </fieldset>
          </div>
          <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
          <div class="form-btn">
            <button type="submit" id="submit" value="modify-schedule" class="btn-fill">Modifier</button>
          </div>
        </form>
      </div>

    <?php else : ?>
      <div id="form-message" class="d-flex  flex-wrap justify-content-center">
        <div class='d-flex justify-content-center  alert alert-danger mt-5 mb-3 mx-auto' role='alert'>Cette horaire
          n'existe
          pas</div>
      </div>

      <div class="go-back-page my-3 d-flex justify-content-center">
        <a href="javascript:history.back(1)" class="btn-wire mb-5">Retourner liste</a>
      </div>

    <?php endif ?>
  </section>
</div>

<?php
require_once __DIR__ . "/templates/footer-admin.php";
?>