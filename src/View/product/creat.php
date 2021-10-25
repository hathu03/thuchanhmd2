<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Thêm Mặt Hàng</title>
</head>
<body>
<h2>Thêm Mặt Hàng</h2>
<form method="post">
    <table>
        <tr>
            <td><label for="product-name">Tên hàng</label></td>
            <td><input type="text" id="product-name" name="name"></td>
        </tr>
        <tr>
            <td><label for="product-category">Loại hàng</label></td>
            <td><select style="width: 210px;" id="product-category" name="category">
                    <option>chọn loại hàng...</option>
                    <option>Điện thoại</option>
                    <option>Điều hòa</option>
                    <option>Tủ lạnh</option
            </td>
        </tr>
        <tr>
            <td><label for="product-price">Giá</label></td>
            <td><input type="text" id="product-price" name="price"></td>
        </tr>
        <tr>
            <td><label for="product-quantity">Số lượng</label></td>
            <td><input type="text" id="product-quantity" name="quantity"></td>
        </tr>
        <tr>
            <td><label for="product-description">Mô tả</label></td>
            <td><textarea id="product-description" name="description" cols="21"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right">
                <button type="submit" class="btn btn-success">SUBMIT</button>
                <a href="index.php" type="button" class="btn btn-danger">CANCEL</a></td>
        </tr>
    </table>
</form>
</body>
</html>