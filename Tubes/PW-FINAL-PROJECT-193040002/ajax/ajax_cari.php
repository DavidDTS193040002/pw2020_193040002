<?php

require '../php/functions.php';
$makanan = cari($_GET['keyword']);

?>
<table>
  <?php if (empty($makanan)) : ?>
    <tr>
      <th>
        <h3 style="color: red; font-style: italic; font-family: Arial, Helvetica, sans-serif; font-weight: bold; text-align:center">Data tidak ditemukan!</h3>
      </th>
    </tr>
  <?php endif; ?>


  <?php foreach ($makanan as $m) : ?>
    <div class="nama">
      <a href="php/detail.php?id=<?= $m['id']; ?>" style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;">
        <?= $m["nama_makanan"]; ?>
      </a>
    </div>
  <?php endforeach; ?>
  </div>
</table>