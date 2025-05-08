<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail - SafeNet</title>
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

        .detail-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 25px;
        }

        .detail-group {
            margin-bottom: 20px;
        }

        .detail-group label {
            font-weight: 600;
            color: #2c3e50;
            display: block;
            margin-bottom: 6px;
        }

        .detail-group .value {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #333;
        }

        .detail-group img {
            max-width: 100%;
            border-radius: 4px;
            margin-top: 10px;
        }

        .button-group {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .back-button {
            background-color: rgb(0, 139, 194);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: rgb(0, 61, 131);
        }

        .text-justify p {
            margin-bottom: 1rem;
            /* jarak antar paragraf */
            text-align: justify;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Detail Blog</h1>
        </div>

        <div class="detail-container">

            <div class="detail-group">
                <label>Judul</label>
                <div class="value"><?= $judol['judul']; ?></div>
            </div>

            <div class="detail-group">
                <label>Gambar Utama</label>
                <img src="/assets/img/<?= $judol['media']; ?>" alt="Gambar Blog">
            </div>

            <div class="detail-group">
                <label>Deskripsi</label>
                <div class="value text-justify">
                    <?= nl2br($judol['deskripsi']); ?>
                </div>
            </div>

            <div class="button-group">
                <button class="back-button" onclick="window.history.back()">Kembali</button>
            </div>
        </div>
    </div>
</body>

</html>