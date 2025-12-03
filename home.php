
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order SMiX</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 25px 35px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        img {
            width: 120px;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .input-group {
            text-align: left;
            margin-bottom: 15px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 5px;
        }

        input[type="submit"],
        .btn-view {
            width: 100%;
            padding: 10px;
            border: none;
            color: white;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            display: block;
            margin-top: 10px;
        }

        input[type="submit"] {
            background: #2c7be5;
        }

        input[type="submit"]:hover {
            background: #1d5fc1;
        }

      .btn-view {
            width: 100%;
            padding: 10px;
            border: none;
            color: white;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            display: block;  
            background: #28a745;
            text-decoration: none;
            text-align: center;
            box-sizing: border-box; 
            margin-top: 10px;
        }


        .btn-view:hover {
            background: #1c7c32;
        }
    </style>
</head>

<body>

<div class="container">
    <img src="./images/Logo.jpg" alt="Logo">
    <h1>Masukkan Data Order</h1>

    <form action="proses.php" method="POST">

        <div class="input-group">
            <label>Nama yang Order:</label>
            <input type="text" name="nama" required>
        </div>

        <div class="input-group">
            <label>Varian:</label>
            <select name="varian" id="varians">
                <option value="Bolognese">Bolognese</option>
                <option value="Sour Cream">Sour Cream</option>
            </select>
        </div>

        <div class="input-group">
            <label>Jumlah yang Order:</label>
            <input type="text" name="jumlahVarian" required>
        </div>

        <input type="submit" value="Submit">

        <a href="daftar_order.php" class="btn-view">Lihat Semua Order</a>

    </form>
</div>

</body>
</html>
