<?php
session_start();

?>

<?php
    $db = new PDO("mysql:host=localhost;dbname=ceni", "root", "root");
    
    $info = [];
  
    if ($query = $db->query("SELECT * FROM products")) {
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($db->errorInfo());
    }

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отель Агат</title>
    
    
    
    
    
</head>
<body>

<div class='header'>
    <div class='container'>
        <div class='header-line'>
            <div class='header-logo'>
                <img src="logo.png" alt="">
            </div>

            <div class='nav'>
                <a class='nav-item' href="#glavnaya" rel='m_PageScroll2id'>ГЛАВНАЯ</a>
                <a class='nav-item' href="#onas" rel='m_PageScroll2id'>О НАС</a>
                <a class='nav-item' href="#uslugi" rel='m_PageScroll2id'>УСЛУГИ</a>
                <a class='nav-item' href="#nomera" rel='m_PageScroll2id'>НОМЕРА</a>
            </div>

            <div class='cart'>
                <a href="auth.php">
                    <img class='cart-img' src="img/login.png" alt="">
                </a>
            </div>
            
            <div class='registr'>
                <a href="register.php">
                    <img class='registr-img' src="img/registr.png" alt="">
                </a>
            </div>

            <div class='phone'>
                <div class='phone-holder'>
                    <div class='phone-img'>
                        <img src="phone.png" alt="">
                    </div>

                    <div class='number'><a class='num'>+7-963-509-37-77</a></div>
                </div>

                <div class='phone-text'>
                    Свяжитесь с нами для <br> бронирования
                </div>
            </div>

            <div class='btn'>
                <a class='button' href="#nomera" rel='m_PageScroll2id'>ЗАКАЗ НОМЕРА</a>
            </div>
            
            <div class='poisk'>
                <input size=15px placeholder= "Поиск" type="text" id="text-to-find" value="">
                <input class='buttonpoisk' type="button" onclick="javascript: FindOnPage('text-to-find'); return false;" value="Искать"/>
            </div>
                
            <div class='loginAfterAuth'>
            
                <?php
                if ($_SESSION['user']) {
                    echo '<a href="vendor/logout.php" class="logout">Выход</a>';
                }
                ?>
                
                <div class='12345'>
                    <a class="userlogin" ><?= $_SESSION['user']['full_name'] ?></a>
                    
                </div>
            
                
                
            </div>

            <div class='burger-menu'>

                <button id='burger'>
                    <img src="menu-img.png" alt="">
                </button>

                <div id='menu' class='burger-slide disp'>
                    <a class='nav-item block' href="@">ГЛАВНАЯ</a>
                    <a class='nav-item block' href="@">О НАС</a>
                    <a class='nav-item block' href="@">УСЛУГИ</a>
                    <a class='nav-item block' href="@">НОМЕРА</a>
                </div>

            </div>




        </div>


        <div class='header-down'>

            <div class='header-title' id="glavnaya">
                Добро пожаловать в

                <div class='header-subtitle'>
                    отель Агат
                </div>

                <div class='header-suptitle'>
                    С ЛУЧШИМИ НОМЕРАМИ
                </div>

                

            </div>

        </div>

    </div>

</div>

<div class='cards'>

    <div class='container'>

       <div class='cards-holder'>

            <div class='card'>

                <div class='card-image'>
                    <img class='card-img' src='card.png'>
                </div>

                <div class='card-title'>
                    Удобное  <span>расположение</span>
                </div>

                <div class='card-desc'>
                    Отель находится в самом центре города.


                </div>

            </div>

            <div class='card'>

                <div class='card-image'>
                    <img class='card-img' src='card.png'>
                </div>

                <div class='card-title'>
                    Качественное        <span>обслуживание</span>
                </div>

                <div class='card-desc'>
                    Мы гарантируем высокое качество обслуживания.

                </div>

            </div>

            <div class='card'>

                <div class='card-image'>
                    <img class='card-img' src='card.png'>
                </div>

                <div class='card-title'>
                   Высокий  <span>комфорт</span>
                </div>

                <div class='card-desc'>
                    Гости отеля могут разместиться в комфортных номерах.
                </div>

            </div>
        </div>
    </div>

</div>


<div class='history'>

    <div class='container'>

        <div class='history-holder'>
            <div class='history-info'>
                <div class='history-title'>
                    Наша <span>История</span>
                </div>

                <div class='history-desc'>
                    Как и у любого другого самобытного места, у нас есть своя, особая история. Строительство отеля было необходимо и ожидаемо, ведь прежде в городе не существовало отелей такого уровня и классификации с большим номерным фондом. «Агат» предложил гостям Барнаула и горожанам хорошую альтернативу: Множество современных комфортабельных номеров, конференц-зал, спа-зону, и сопутствующие услуги. Отель стал новой площадкой для деловой среды.
                </div>


                
            </div>

            <div class='history-images'>
                <img class='imgages-1' src="1.jpg" alt="">
                <img class='imgages-2' id="onas" src="2.jpg" alt="">
                <img class='imgages-3' src="3.jpg" alt="">
        </div>
        </div>

    </div>

</div>


<div class='black-block'>

    <div class='container'>

        <div class='block-holder'>
            <div class='left'>
                <div class='left-title'>
                    Отыхайте в одном из <br> самых лучших отелей.
                </div>

                <div class='left-text'>
                    Только в этом месяце стандарт номер от 4000 ₽
                </div>
            </div>

            <div class='right'>
                <div class='right-button'>
                    <a href='#nomera' class='right-btn' rel='m_PageScroll2id'>ЗАКАЗ НОМЕРА</a>
                </div>
            </div>
        </div>

    </div>

</div>


<div class='dishes'>

    <div class='container'>

        <div id="uslugi" class='dishes-title'>
            Наши <span>Услуги</span>
        </div>

        <div class='burgers'>
            <div class='burgers-image'>
                <img src='pizza.jpg' class='pizza'>
            </div>

            <div class='burgers-items'>
                <div class='burger-item'>
                    <img src="uslug1.jpg" class=''>
                    <div class='burger-text'>
                        Спа зона ----------------------- 990 ₽
                    </div>
                </div>

                <div class='burger-item'>
                    <img src="uslug2.jpg" class=''>
                    <div class='burger-text'>
                        Фитнес зона ------------------- 580 ₽
                    </div>
                </div>

                <div class='burger-item'>
                    <img src="uslug3.jpg" class=''>
                    <div class='burger-text'>
                        Багажная зона ---------------- 290 ₽
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<div class='menu'>

    <div class='container'>

        <div class='menu-title' id="nomera">
            Наши номера
        </div>

        <div class='menu-items'>
            
            <?php foreach ($info as $data): ?>

            <div class='menu-item'>
                <div class='menu-image'>
                    <img src='<?php echo $data['imgFile']; ?>' class='menu-img'>
                </div>

                <div class='menu-text'>
                    <?php echo $data['name']; ?>
                </div>

                
                
                <div class='menu-subtext'>
                    <?php echo $data['price']; ?> <br> Сутки
                </div>

                <div class='menu-button'>
                    <a href="#" class='menu-btn open-popup'>ЗАКАЗАТЬ</a>
                </div>
            </div>

            
            
            <?php endforeach; ?>
            
        </div>

    </div>

</div>

<div class='coment'>

    <div class='container'>

        <div class='coment-text'>
            Я надолго запомню мой отпуск, проведённый в этом отеле! Кусочек родной земли!!! Отдельное спасибо за подарок в виде фруктовой тарелки. Буду рекомендовать этот отель своим друзьям и родственникам также за рубежом, путешествующих в Барнаул!!!
        </div>

        <div class='coment-image'>
            <img src='face.png' class='coment-img'>
        </div>

        <div class='coment-type'>
            Гость
        </div>

        <div class='coment-name'>
            Юрий
        </div>

    </div>

</div>





<div class='cook'>

    <div class='container'>

        <div class='cook-title'>
            Наш <span>Персонал</span>
        </div>


        <div class='cook-content'>
            <img src='1c.jpg'>
            <img src='2c.jpg'>
            <img src='3c.jpg'>
        </div>

    </div>

</div>


<div class='footer'>
    ©2023 Vlado Slepanev. Все права защищены.
</div>
    
<div class="popup-bg">
                <div class="popup">
                    <img class="close-popup" src="img/close.png" alt="icon">
                
                    <div class="bronyatext">
                        Для бронирования свяжитесь с нами по телефону +7-963-509-37-77
                    
                    
                    
                    </div>
                </div>
            </div>
    


<script src="js/jquery.min.js"></script>    
<script src="js/main.js"></script>
<script src="js/PageScroll2id.min.js"></script>
<script src="js/scroll.js"></script>
<script src="js/poisk.js"></script>


</body>
</html>
