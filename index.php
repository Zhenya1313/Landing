<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <div id="menu" class="menu">
        <div class="p_menu active">Home</div>
        <div class="p_menu">Услуги</div>
        <div class="p_menu">Контакты</div>
    </div>
    <div class="first_section">
        <div class="headline">
            <div class="title">Lorem ipsum</div>
            <div class="pod_text">Lorem ipsum</div>
        </div>
        <div class="player">
                <video class="video" src="" controls="controls" autoplay>
                </video>
        </div>
    </div>
    <div class="first_section">
        <div class="send_form">
            <form action="telegram.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-group name" name="name" placeholder="Введите имя">
                </div>
                <div class="form-group">
                    <input type="text" class="form-group phone" name="phone" placeholder="Введите телефон">
                </div>
                <div class="form-group">
                    <textarea name="msg" class="form-group message" placeholder="Введите сообщение"></textarea>
                </div>
                <button type="submit" class="btn">Отправить</button>
            </form>
        </div>
    </div>
</div>

<div>

</div>

<script>
    var btnContainer = document.getElementById("menu");
    // Сделать все кнопки с class="btn" внутри контейнера
    var btns = btnContainer.getElementsByClassName("p_menu");
    // Выполните цикл по кнопкам и добавьте активный класс к текущей/нажатой кнопке
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
</body>
</html>