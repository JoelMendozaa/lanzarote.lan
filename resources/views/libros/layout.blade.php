<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<style>
     body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #2c6b32;
            text-align: center;
            font-size: 2rem;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            font-size: 1rem;
            color: #333;
        }

        th {
            background-color: #4caf50;
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #fafafa;
        }

        tr:hover {
            background-color: #e5f1e4;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #4caf50;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .btn-danger {
            background-color: #f44336;
        }

        .btn-danger:hover {
            background-color: #d32f2f;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .btn-container {
            text-align: right;
            margin-bottom: 20px;
        }
</style>
</head>

<body>
@yield('content')
</body>

</html>