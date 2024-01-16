<!--Made by: Jonathan Bampa Oliveira || Instagram: @jonathan.bampa -->
<?php 
    $pagina = 'paginaInicial.html';
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1692266261277045');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1692266261277045&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N9J3CCD');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css"><!--LINK CSS PAGINA INICIAL-->
    <link rel="stylesheet" href="assets/css/contato.css"><!--LINK CSS PAGINA CONTATO-->
    <link rel="stylesheet" href="assets/css/quemSomos.css"><!--LINK CSS PAGINA QUEM SOMOS-->
    <link rel="stylesheet" href="assets/css/trabalheConosco.css"><!--LINK CSS PAGINA TRABALHE CONOSCO-->
    <link rel="stylesheet" href="assets/css/cobertura.css"><!--LINK CSS PAGINA QUEM SOMOS-->
    <link rel="stylesheet" href="assets/frameworks/bootstrap/bootstrap.min.css"><!--LINK BOOTSTRAP CSS-->
    <link rel="stylesheet" href="assets/frameworks/owl_carousel/owl.carousel.min.css"><!--LINK CSS OWL CAROUSEL-->
    <link rel="stylesheet" href="assets/frameworks/owl_carousel/owl.theme.default.min.css"><!--LINK OWL CAROUSEL THEME-->
    <link rel="stylesheet" href="assets/normalize/normalize.css"><!--LINK NORMALIZE CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com"><!--LINK GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><!--LINK GOOGLE FONTS-->
    <link rel="sortcut icon" href="assets/img/Logomarca.png"><!--ICONE DA BARRA DO NAVEGADOR-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto+Slab&display=swap" rel="stylesheet"><!--LINK GOOGLE FONTS-->    
    <title>Sibintech Monitoring</title>
</head>
<body>
    <header class="background_header" id="inicio">
        <div class="container mt-1 container_header pt-1">
            <a href="index.php"><img src="assets/img/Logomarca.png" class="logo_img mb-1" alt="Logo da Sibintech" oncontextmenu="return false;"></a>
            <nav class="navbar_all">
                <ul class="list-unstyled menu_header">
                    <li><a href="index.php" title="Página inicial">Home</a></li>
                    <li><a href="index.php?pagina=contato.html" title="Contatos mgp">Contato</a></li>
                    <li><a href="index.php?pagina=quemSomos.html" class="text-dark">Quem somos</a></li>
                    <li><a href="index.php?pagina=cobertura.html" title="Cobertura de atendimento">Cobertura</a></li>
                </ul>
            </nav><!--NAVBAR MENU NORMAL-->
            <div class="icones-redes pt-3">
                <a href="https://www.instagram.com/sibintech/" target="_blank" title="Instagram"><img src="assets/icones/instagram.png" oncontextmenu="return false;" alt="instagram icone"></a>
                <a href="https://api.whatsapp.com/send?phone=5544999091762&text=Ol%C3%A1,%20tudo%20bem?" target="_blank" title="Whatsapp"><img src="assets/icones/whatsapp.png" oncontextmenu="return false;" alt="whatsapp icone"></a>
                <a href="https://www.linkedin.com/company/sibintech/mycompany/" target="_blank"><img src="assets/icones/linkedin.png" alt="Linkedin icone" oncontextmenu="return false;"></a>
            </div><!--ICONES REDES SOCIAIS-->
            <nav class="navbar-mobile">
                <div class="dropdown-mobile">
                    <i class="fa-solid fa-bars icone-menu" id="icone-menu-mobile-click"></i>
                    <ul class="list-unstyled display_none" id="menu-mobile">
                        <li><a href="index.php" title="Página inicial">Home</a></li>
                        <li><a href="index.php?pagina=contato.html" title="Contatos MGP">Contato </a></li>
                        <li><a href="index.php?pagina=quemSomos.html">Quem somos</a></li>
                        <li><a href="index.php?pagina=cobertura.html" title="Lojas presenciais MGP">Cobertura</a></li>
                        <ul class="icones-redes-mobile d-flex list-unstyled"><!--ICONES REDES SOCIAIS-->
                            <li class="d-flex justify-content-center"><a href="https://www.instagram.com/sibintech/" target="_blank" title="Instagram"><img src="assets/icones/instagram.png" width="20" oncontextmenu="return false;" alt="icone instagram"></a></li>
                            <li class="d-flex justify-content-center"><a href="https://api.whatsapp.com/send?phone=55449999091762&text=Ol%C3%A1,%20tudo%20bem?" target="_blank" title="Whatsapp"><img src="assets/icones/whatsapp.png" width="20" oncontextmenu="return false;" alt="icone whatsapp"></a></li>
                            <li class="d-flex justify-content-center"><a href="https://www.linkedin.com/company/sibintech/mycompany/" target="_blank" title="Linkedin"><img src="assets/icones/linkedin.png" width="20" oncontextmenu="return false;" alt="icone linkedin"></a></li>
                        </ul>
                    </ul>
                </div>
            </nav><!--NAVBAR MENU MOBILE-->
        </div>
    </header><!--HEADER-->
    <?php require("$pagina")?><!--Requisições das páginas por PHP-->
    <footer class="bg-footer">
        <div class="container  pt-3">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <a href="#inicio" title="Logo Sibintech"><img class="logo_footer" src="assets/img/Logomarca_branco.png" alt="Logo da Sibintech" width="200" oncontextmenu="return false;"></a>
                </div>
                <div class="col-md-4 contatos-footer">
                    <h4>Contatos</h4>
                    <p><i class="fa-solid fa-phone icones_fontawesome"></i>Telefone: (44)9 9909-1762 | <a href="https://api.whatsapp.com/send?phone=5544999091762&text=Ol%C3%A1,%20tudo%20bem?" target="_blank" title="Whatsapp"><i class="fa-brands fa-whatsapp text-white"></i></a></p>
                    <p><i class="fa-solid fa-envelope icones_fontawesome"></i>E-Mail: contato@sibintech.com.br</p>
                </div>
                <div class="col-md-4 redes-footer">
                    <h4>Redes sociais</h4>
                    <ul class="footer-links list-unstyled">
                    <a href="https://api.whatsapp.com/send?phone=5544999091762&text=Ol%C3%A1,%20tudo%20bem?" target="_blank"><li><i class="fa-brands fa-whatsapp icones_fontawesome" class="mr-1"></i>Whatsapp</li></a>
                    <a href="https://www.instagram.com/mgptelecom/" target="_blank"><li><i class="fa-brands fa-instagram icones_fontawesome" class="mr-1"></i>Instagram</li></a>
                    <a href="https://www.linkedin.com/company/mgp-telecom/mycompany/" target="_blank"><li><i class="fa-brands fa-linkedin icones_fontawesome" class="mr-1"></i>Linkedin</li></a>
                    </ul>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="copyright">&copy; SIBINTECH. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled footer-links-sub d-flex justify-content-end">
                        <li><a href="index.php?pagina=politicaDePrivacidade.html" class="p-1">Política de privacidade</a></li>
                        <li><a href="index.php?pagina=contato.html" class="p-1">Fale conosco</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--FOOTER-->
    <script  src="assets/js/formulario.js"></script>
    <script src="https://kit.fontawesome.com/9b0cbbf8ae.js" crossorigin="anonymous"></script><!--FONTAWESOME LINK-->
    <script type="text/javascript" src="assets/frameworks/jquery/jquery-3.6.3.min.js"></script><!--JQUERY-->
    <script type="text/javascript" src="assets/frameworks/bootstrap/bootstrap.bundle.min.js"></script><!--BOOTSTRAP-->
    <script type="text/javascript" src="assets/frameworks/owl_carousel/owl.carousel.min.js"></script><!--OWL CAROUSEL-->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9J3CCD"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-1XWHE28R10"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1XWHE28R10');
        </script>
    <!-- Fim Google tag (gtag.js) -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11021515971"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-11021515971');
    </script>
    <script>
        let icone = document.querySelector('#icone-menu-mobile-click');
        let Menu = document.querySelector('#menu-mobile');
        let subMenu = document.querySelector('#submenu-mobile')
        let clickSobre = document.querySelector('#click_sobre');
        
        icone.addEventListener('click', function(){ 
            if(Menu.classList.contains('display_none')){
                Menu.classList.replace('display_none', 'display_block');
            }else{
                Menu.classList.replace('display_block', 'display_none');
            }
        });

        clickSobre.addEventListener('click', function(){
            console.log(subMenu.classList);
            if(subMenu.classList.contains('display_none')){
                subMenu.classList.replace('display_none', 'display_block');
            }else{
                subMenu.classList.replace('display_block', 'display_none');
            }
        });
    </script><!--SCRIPT TOGGLE MENU-->
    <script>
        $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            stagePadding: 25,
            loop:false,
            margin:5,
            nav:true,
            responsive:{
            0:{
                items:1,
                startPosition:1,
            },
            992:{
                items:3,
            }

            },
        });
        });
    </script><!--SCRIPT CARROSSEL PLANOS-->
</body>
</html>