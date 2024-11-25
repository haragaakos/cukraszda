<?php
include 'header.php'; // A fejléc megjelenítése
?>



<body>
  <h2>PDF Generátor</h2>
  <form action="services/pdfgenerator_service.php" method="POST">
    <label for="tipus">Válasszon sütemény típust:</label>
    <select id="tipus" name="tipus" required>
      <?php
      require_once 'config/database.php';
      $stmt = $pdo->query("SELECT DISTINCT tipus FROM suti");
      while ($row = $stmt->fetch()) {
        echo "<option value='{$row['tipus']}'>{$row['tipus']}</option>";
      }
      ?>
    </select>
    <br>
    
    <label for="mentes">Válasszon mentes opciót:</label>
    <select id="mentes" name="mentes" required>
      <?php
      $stmt = $pdo->query("SELECT DISTINCT mentes FROM tartalom");
      while ($row = $stmt->fetch()) {
        echo "<option value='{$row['mentes']}'>{$row['mentes']}</option>";
      }
      ?>
    </select>
    <br>
    
    <label for="egyseg">Válasszon egységet:</label>
    <select id="egyseg" name="egyseg" required>
      <?php
      $stmt = $pdo->query("SELECT DISTINCT egyseg FROM ar");
      while ($row = $stmt->fetch()) {
        echo "<option value='{$row['egyseg']}'>{$row['egyseg']}</option>";
      }
      ?>
    </select>
    <br>
    <button type="submit">PDF Létrehozása</button>
  </form>
</body>
</html>

<?php
include 'footer.php'; 
?>

