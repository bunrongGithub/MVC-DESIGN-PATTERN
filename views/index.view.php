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
<div>
    <nav>
        <ul>
            <li>

                <a href="/" style="<?php echo \Core\Functions::request()->urlIs('/') ? "color:red":"" ?>" >index</a>

            </li>
            <li>
                <a href="/about">about</a>
            </li>
        </ul>

    </nav>
</div>

</body>
</html>
