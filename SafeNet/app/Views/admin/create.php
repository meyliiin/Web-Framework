<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Baru - SafeNet</title>
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
            max-width: 800px;
            margin: 30px auto;
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

        .form-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2c3e50;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }

        .save-button {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .cancel-button {
            background-color: #95a5a6;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .save-button:hover {
            background-color: #27ae60;
        }

        .cancel-button:hover {
            background-color: #7f8c8d;
        }

        .preview-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .invalid-feedback {
            color: #e74c3c;
            /* Merah cerah */
            font-size: 14px;
            margin-top: 5px;
            margin-bottom: 10px;
            display: block;
            /* pastikan terlihat */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Tambah Info Judol</h1>
        </div>

        <div class="form-container">
            <form action="/admin/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul"
                        class="<?= session('errors.judul') ? 'is-invalid' : ''; ?>" placeholder="Masukkan Judul"
                        value="<?= old('judul'); ?>">
                    <div class="invalid-feedback">
                        <?= session('errors.judul'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi"
                        class="<?= session('errors.deskripsi') ? 'is-invalid' : ''; ?>"
                        placeholder="Tulis deskripsi materi..."><?= old('deskripsi'); ?></textarea>
                    <div class="invalid-feedback">
                        <?= session('errors.deskripsi'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="media">Upload Media</label>
                    <div class="d-flex align-items-center gap-3">
                        <img id="preview-img" src="/assets/img/default.jpg" alt="Preview" class="preview-img">
                        <input type="file" id="media" name="media"
                            class="<?= session('errors.media') ? 'is-invalid' : ''; ?>" onchange="previewImage()">
                    </div>
                    <div class="invalid-feedback">
                        <?= session('errors.media'); ?>
                    </div>
                </div>

                <div class="button-group">
                    <button type="button" class="cancel-button">Kembali</button>
                    <button type="submit" class="save-button">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Tombol kembali
        document.querySelector('.cancel-button').addEventListener('click', function() {
            if (confirm('Apakah Anda yakin ingin membatalkan dan kembali?')) {
                window.location.href = '/admin';
            }
        });

        // Preview media
        function previewImage() {
            const imageInput = document.getElementById('media');
            const preview = document.getElementById('preview-img');

            if (imageInput.files.length > 0) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(imageInput.files[0]);
            }
        }
    </script>
</body>

</html>