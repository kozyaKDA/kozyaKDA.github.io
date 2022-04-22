<?php
    require '../script.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../img/ico.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/pages/contacts.css">
    <title>Contacts</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <span class="header__span">Contacts</span>
            <a class="logo-link" href="../../index.php"><img class="logo" src="../../img/logo.png" alt="logo"></a>
            <nav class="navigation">
                <ul class="navigation__list">
                    <li class="navigation__item">
                        <a class="navigation__link" href="../../index.php">Home</a>
                    </li>
                    <li class="navigation__item">
                        <a class="navigation__link" href="../../html/about.html">About</a>
                    </li>
                </ul>
            </nav>
            <div class="menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>
        <main class="main">
            <div class="modal none" id="modal">
                <div class="modal__inner">
                    <div class="modal__header">
                        <h5 class="modal__title">Погодите-ка</h5>
                        <span id="close">&times;</span>
                    </div>
                    <div class="modal__content"></div>
                </div>
            </div>
            <div class="main__inner">
                <div class="main__item left-item">
                    <h1 class="main__title">Есть предложения?<br>Что-то не понятно?<br>Что-то работает некорректно<br>или не работает вовсе?</h1>
                    <div class="main__text flex">
                        <p class="text">Вы можете написать мне в социальных сетях</p>
                        <div class="main__links">
                            <div class="main__links-item"><a class="main__link vk" href="https://vk.com/truegoat" target="_blank">vk</a></div>
                            <div class="main__links-item"><a class="main__link wa" href="tel:+79603673787">wa</a></div>
                        </div>
                    </div>
                    <div class="main__text">
                        <p class="text">Или заполнить форму ниже для связи по почте</p>
                    </div>
                    <div class="main__form-wrapper">
                        <form class="main__form">
                            <div class="main__form-label">Ваш Email *</div><br> 
                            <input class="main__form-input inpt" id="email" name="email" type="email" placeholder="example@mail.ru"><br>
                            <div class="main__form-label">Как к Вам обращаться?</div><br>
                            <input required class="main__form-input inpt" id="name" name="name" type="text" placeholder="Зовут Имя, обращайтесь как хотите"><br>
                            <div class="main__form-label">Ваше сообщение *</div><br>
                            <textarea class="main__form-ta" id="text" name="text"  cols="55" rows="10" ></textarea><br>
                            <button class="main__form-btn btn" id="button" type="submit">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="main__item right-item">
                    <h1 class="main__title">F.A.Q.</h1>
                    <div class="search-box">
                        <input class="faq-search inpt" type="text" name="" id="">
                        <img class="search-icon" src="../../img/search.png" width="15px" height="15px" alt="">
                    </div>
                    
                    <ol class="main__list">
                        <?php
                            foreach($array as $item)
                            { ?>
                                <li class="main__list-item">
                                    <a class="main__list-link" href="#"> <?php echo $item['item_content']; ?></a>
                                </li>
                                <?php
                            }
                        ?>
                    </ol>
                </div>
            </div>
        </main>
        <footer class="footer">
            by <span class="footer__span"> true G.O.A.T.</span> - 2022
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../js/script.js"></script>
    <script src="../../js/search.js"></script>
    <!-- <script src="../js/menu.js"></script> -->
</body>
</html>