<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>@yield('title')</title>
</head>
<body>

    <header>
        <div class="header">
            <img src="img/logo.png" href="/" class="logo-header" alt="logotipo">
            <div class="header-links">
                <a href="/" class="header-links-text">Home</a>
                <a href="/" class="header-links-text">Produtos</a>
                <a href="/" class="header-links-text">Cadastro</a>
                <a href="/" class="header-links-text">Sobre</a>
                <i class="" id="mob-menu" onclick="openMenu()"></i>
            </div>
        </div>
        <div id="menuMobileOptions">
            
        </div>
    </header>

    <section onclick="closeMenu()">
         @yield('content')
    </section>

    <footer>
        <div class="footer">
            <p class="text-footer"><strong>BuyBox&copy; {{ date('Y') }}</strong></p>
        </div>
    </footer>

<script>
    function heddenElemet(){
        let menu_button = document.getElementById("mob-menu");
        const links = document.querySelectorAll('.header-links-text');
        for(let i = 0; i < links.length; i++) {
            links[i].textContent = "";
        }
        menu_button.className = "fa-solid fa-bars mobile-menu fa-lg";
    }

    function apearElemet(){
        let menu_button = document.getElementById("mob-menu");
        let links = document.querySelectorAll('.header-links-text');
        let texts = ["Home","Produtos","Cadastro","Sobre"];
        for(let i = 0; i < links.length; i++) {
            links[i].textContent = texts[i];
        }
        menu_button.className = "";
    }

    function openMenu(){
        let menu = document.getElementById("menuMobileOptions");
        let mobButton = document.getElementById('mob-menu');
        menu.innerHTML = `<div class="menu-options-div">
                <div style="padding-top: 13px; border-bottom: 1px solid white; padding-bottom: 5px">
                    <a href="/" class="header-links-text-mob"><i class="fa-solid fa-house" style="margin-right: 5px"></i> Home</a>
                </div>
                <div style="padding-top: 13px; border-bottom: 1px solid white; padding-bottom: 5px">
                    <a href="/" class="header-links-text-mob"><i class="fa-solid fa-boxes-stacked" style="margin-right: 5px"></i> Produtos</a>
                </div>
                <div style="padding-top: 13px; border-bottom: 1px solid white; padding-bottom: 5px">
                    <a href="/" class="header-links-text-mob"><i class="fa-solid fa-right-to-bracket" style="margin-right: 5px"></i> Cadastro</a>
                </div>
                <div style="padding-top: 13px; border-bottom: 1px solid white; padding-bottom: 5px">
                    <a href="/" class="header-links-text-mob"><i class="fa-solid fa-circle-info" style="margin-right: 5px"></i> Sobre</a>
                </div>
            </div>`;
        mobButton.onclick = closeMenu;
    }

    const mediaQuery = window.matchMedia('(max-width: 560px)');
    
    if (mediaQuery.matches) {
        heddenElemet();
    } 
    mediaQuery.addListener((mediaQueryList) => {
        if (mediaQueryList.matches) {
            heddenElemet();
        } else {
            apearElemet();
        }
    });

    function closeMenu(){
        let menu = document.getElementById("menuMobileOptions");
        let mobButton = document.getElementById('mob-menu');
        menu.innerHTML = ``;
        mobButton.onclick = openMenu;
    }
</script>
</body>

</html>