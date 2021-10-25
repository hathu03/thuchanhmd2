<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Danh Sách Mặt Hàng</title>
    <style>
        #right {
            float: right;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        #left {
            float: left;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        th {
            background: limegreen;
            color: white;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<h2 style="text-align: center; margin-top: 20px">Danh Sách Mặt Hàng</h2>
<div id="left">
    <form method="get" class="form-inline my-2 my-lg-0">
        <span>Nhập Tên Hàng:</span>
        <input class="form-control mr-sm-2" type="search" value="<?php echo $_REQUEST['search'] ?? '' ?>"
               name="search" aria-label="Search">
        <button class="btn btn-warning" type="submit">SEARCH</button>
    </form>
</div>
<div id="right"><a href="index.php?page=product-create" type="button" class="btn btn-warning">ADD</a></div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên hàng</th>
        <th scope="col">Loại hàng</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($products)) {
        foreach ($products as $key => $product): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['category'] ?></td>
                <td><a href="index.php?page=product-update&id=<?php echo $product['id'] ?>">EDIT</a> |
                    <a href="index.php?page=product-delete&id=<?php echo $product['id'] ?>">DELETE</a>
                </td>
            </tr>
        <?php endforeach;
    } ?>
    </tbody>
</table>
</body>
</html>
