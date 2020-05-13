<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="view/register.php">Register</a>
<a href="view/login.php">Login</a>
<table border="1">
    <tr>
        <td>STT</td>
        <td>Username</td>
        <td>Password</td>
        <td>Email</td>
        <td>Phone</td>
        <td></td>
    </tr>

    <?php if (isset($customers)):?>
    <?php foreach ($customers as $index => $customer): ?>
    <tr>
        <td><?php echo $index ?></td>
        <td><?php echo $customer->username ?></td>
<!--        <td>--><?php //echo $customer->password ?><!--</td>-->
        <td><?php echo $customer->email ?></td>
        <td><?php echo $customer->phone ?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
        <td colspan="4">No Data</td>
    </tr>
    <?php endif; ?>
</table>
</body>
</html>