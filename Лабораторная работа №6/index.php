<?include "./changeSetting.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body style="background-color: <?echo $_COOKIE['background']?>">
    <div class="container">
        <section>
            <card class="col-8 mx-auto">
                <h1 class="text-center">Личный кабинет</h1>
                <h2 class="text-center">Ваше имя: <? echo $_COOKIE['login'] ?></h2>

                <form class="card col-6 mx-auto p-3" action="index.php" method="POST" >
                    <h5 class="card-tilte">Настройки</h5>
                    <input class="form-control mb-2" type="text" placeholder="Изменить имя..." name="name">
                    <input class="form-control" type="text" placeholder="Изменить фон..." name="background" list="backgrounds">
                    
                    <datalist id="backgrounds">
                    <option value="red" />
                    <option value="green" />
                    <option value="black" />
                    <option value="white" />
                </datalist>
                <button class="btn btn-primary mt-2" type="submit">Изменить</button>
                </form>



                <button class="btn btn-secondary mt-3" style="display: block; margin: 0 auto; ">
                    <a style="text-decoration: none; color: black" href="logout.php">Выход</a>
                </button>
            </card>
        </section>
    </div>

</html>