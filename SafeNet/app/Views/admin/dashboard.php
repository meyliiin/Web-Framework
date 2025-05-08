<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard SafeNet</title>
</head>

<body>
  <div class="container">
    <div class="header">
      <h1>Dashboard SafeNet</h1>
      <div>
        <button class="add-button" onclick="window.location.href='/admin/create'">Tambah Data Baru</button>
        <button class="logout-button" onclick="window.location.href='/logout'">Logout</button>
      </div>
    </div>

    <?php if (session()->getFlashdata('pesan')): ?>
      <div class="flash-message">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
    <?php endif; ?>


    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Media</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 + (5 * ($currentPage - 1)); ?>
          <?php
          $judol = array_reverse($judol);
          foreach ($judol as $item): ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $item['judul']; ?></td>
              <td><img src="/assets/img/<?= $item['media']; ?>" alt="Media" style="width: 100px;"></td>
              <td><?= character_limiter(strip_tags($item['deskripsi']), 50); ?></td>
              <td>
                <div class="action-group">
                  <a href="/admin/detail/<?= $item['slug']; ?>" class="action-button detail-button">Detail</a>
                  <a href="/admin/edit/<?= $item['slug']; ?>" class="action-button edit-button">Edit</a>
                  <div>
                    <form action="/admin/delete/<?= $item['id']; ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus materi ini?');">
                      <?= csrf_field(); ?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="action-button delete-button">Hapus</button>
                    </form>
                  </div>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <div class="d-flex justify-content-center mt-4">
        <?= $pager->links('judol', 'page_judol'); ?>
      </div>
    </div>
  </div>
</body>

</html>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  body {
    background-color: #f5f5f5;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
  }

  .header h1 {
    color: #2c3e50;
  }

  .add-button,
  .logout-button {
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
  }

  .add-button {
    background-color: #3498db;
  }

  .add-button:hover {
    background-color: #2980b9;
  }

  .logout-button {
    background-color: rgb(255, 0, 0);
    padding: 8px 8px;
  }

  .logout-button:hover {
    background-color: rgb(143, 9, 9);
  }

  .table-container {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  th,
  td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
    color: #2c3e50;
  }

  tr:hover {
    background-color: #f5f5f5;
  }

  /* Tombol aksi */
  .action-group {
    display: flex;
    justify-content: center;
    gap: 8px;
    flex-wrap: wrap;
  }

  .action-button {
    padding: 6px 12px;
    font-size: 14px;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .detail-button {
    background-color: #28a745;
  }

  .detail-button:hover {
    background-color: #218838;
  }

  .edit-button {
    background-color: #ffc107;
    color: #000;
  }

  .edit-button:hover {
    background-color: #e0a800;
  }

  .delete-button {
    background-color: #dc3545;
  }

  .delete-button:hover {
    background-color: #c82333;
  }

  .flash-message {
    background-color: #d4edda;
    /* Hijau terang */
    color: #155724;
    /* Hijau gelap */
    border: 1px solid #c3e6cb;
    padding: 12px 20px;
    border-radius: 5px;
    margin: 20px 0;
    /* Margin atas dan bawah */
    text-align: center;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    font-weight: 500;
  }
</style>