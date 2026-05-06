<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Creaont</title>

    <style>
        body {
            font-family: Arial;
            background: radial-gradient(circle at top, #0b0f14, #05080c);
            color: white;
            padding: 40px;
        }

        h1 {
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
        }

        /* ================= TABLE ================= */
        table {
            width: 100%;
            border-collapse: collapse;
            background: #111827;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 25px rgba(0,255,200,0.1);
        }

        th {
            background: #69c500;
            color: black;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        tr {
            border-bottom: 1px solid #1f2937;
        }

        tr:hover {
            background: rgba(0,255,200,0.05);
            transition: 0.2s;
        }

        /* ================= IMAGE ================= */
        img {
            border-radius: 8px;
            border: 1px solid #88ff00;
        }

        /* ================= BUTTON ================= */
        .btn {
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            cursor: pointer;
            border: none;
            transition: 0.2s;
        }

        .btn-edit {
            background: #69c500;
            color: black;
        }

        .btn-edit:hover {
            background: #69c500;
        }

        .btn-delete {
            background: #ff4d4d;
            color: white;
        }

        .btn-delete:hover {
            background: #cc0000;
        }

        .btn-add {
            display: inline-block;
            background: #69c500;
            color: black;
            padding: 8px 14px;
            border-radius: 6px;
        }

        .btn-add:hover {
            background: #69c500;
        }

        .btn-back {
            display: inline-block;
            margin-bottom: 15px;
            padding: 6px 12px;
            border: 1px solid #69c500;
            color: #69c500;
            border-radius: 6px;
        }

        .btn-back:hover {
            background: #69c500;
            color: black;
        }

        /* ================= TOP BAR ================= */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            gap: 10px;
        }

        .left-info {
            display: flex;
            gap: 20px;
            color: #88ff00;
            font-size: 14px;
        }

        .right-action {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .input-search {
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #333;
            background: #0b0f14;
            color: white;
        }

        /* ================= FORM (NEW) ================= */
        .form-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .form-box {
            background: #111827;
            padding: 25px;
            border-radius: 12px;
            width: 400px;
            box-shadow: 0 0 25px rgba(0,255,200,0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #333;
            background: #0b0f14;
            color: white;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #69c500;
            box-shadow: 0 0 6px #69c500;
        }

        .btn-submit {
            width: 100%;
            background: #69c500;
            color: black;
            padding: 10px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
        }

        .btn-submit:hover {
            background: #98ff22;
        }

        .preview-img {
            display: block;
            margin: 0 auto 15px;
            border-radius: 10px;
            border: 2px solid #69c500;
        }
    </style>
</head>
<body>

    @yield('content')

</body>
</html>
