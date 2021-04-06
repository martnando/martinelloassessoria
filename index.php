<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
$URL = 'http://www.martinelloassessoria.com.br/';
$title = 'Martinello Assessoria';
$desc = 'Martinello Assessoria';
$link_fb = '#';
$link_tw = '#';
$link_yt = '#';
$link_in = '#';
$link_ld = '#';
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="ISO-8859-1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="<?php echo $desc; ?>" />
        <meta name="keywords" content="#" />
        <meta name="author" content="<?php echo $title; ?>" />
        <meta property="og:site_name" content="<?php echo $title; ?>" />
        <meta property="og:url" content="<?php echo $URL; ?>" />
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:image" content="<?php echo $URL; ?>lib/img/post.jpg?1542991161" />
        <meta property="og:image:type" content="image/jpeg"/>
        <meta property="og:type" content="website">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:description" content="<?php echo $desc; ?>" />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@martinelloassessoria" />
        <meta name="twitter:creator" content="@martinelloassessoria" />
        <meta name="twitter:url" content="<?php echo $URL; ?>">
        <meta name="twitter:title" content="<?php echo $title; ?>">
        <meta name="twitter:description" content="<?php echo $desc; ?>">
        <meta name="twitter:image" content="<?php echo $URL; ?>lib/img/post.jpg?1542991161">
        <base href="<?php echo $URL; ?>">
        <link rel="canonical" href="<?php echo $URL; ?>">
        <link rel="shortcut icon" href="<?php echo $URL; ?>lib/img/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,900" rel="stylesheet">
        <link type="text/css" href="lib/css/reset.css" rel="stylesheet" />
        <link type="text/css" href="lib/css/estilo.css" rel="stylesheet" />
        <link type="text/css" href="lib/css/animate.css" rel="stylesheet" />
        <script type="text/javascript" src="lib/js/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="lib/js/scrollReveal.min.js"></script>
        <title><?php echo $title; ?></title>
    </head>
    <body class="bgParallax" data-speed="10">
        <header>
            <div class="center">
                <h1 onclick="$('html,body').animate({scrollTop: $('#home').offset().top}, 1000);" title="Martinello Assessoria">Martinello Asessoria</h1>
                <nav>
                    <!--<div class="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>-->
                    <ul>
                        <li onclick="$('html,body').animate({scrollTop: $('#home').offset().top}, 1000);">Home</li>
                        <li onclick="$('html,body').animate({scrollTop: $('#servicos').offset().top}, 1000);">Serviços</li>
                        <li onclick="$('html,body').animate({scrollTop: $('#sobre').offset().top}, 1000);">Sobre nós</li>
                        <li onclick="$('html,body').animate({scrollTop: $('#contato').offset().top}, 1000);">Contato</li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="home">
            <article class="title">
                <div class="content animated fadeInUp">
                    <h2>Contabilidade, Assessoria e Consultoria</h2>
                    <p>Mais de 30 anos de experiência auxiliando todos os tipos de empresa</p>
                    <i class="scroll-down" onclick="$('html,body').animate({scrollTop: $('#sobre').offset().top - 50}, 1000);"></i>
                </div>
            </article>
        </section>
        <section id="servicos" class="bgParallax" data-speed="10">
            <article class="intro">
                <div class="content">
                    <h3>Serviços</h3>
                    <ul>
                        <li>
                            <img src="lib/img/icon-adm.png" alt="Abertura de empresas" />
                            <h4>Abertura de empresas</h4>
                            <p>Elaboração de contrato social, registro de abertura, regularização de capital estrangeiro, alteração e encerramento.</p>
                        </li>
                        <li>
                            <img src="lib/img/icon-rh.png" alt="Recursos Humanos" />
                            <h4>Recursos Humanos</h4>
                            <p>Admissão, Demissão, Cálculos de folha de pagamento, rescisões de contrato e benefícios, gerenciamento de PCMSO, PPRA, PPP, etc.</p>
                        </li>
                        <li>
                            <img src="lib/img/icon-irpf.png" alt="Declarações Anuais" />
                            <h4>Declarações Anuais</h4>
                            <p>Elaboração de RAIS, DCTF, DIRF, DACON, IRPJ, IRPF, DES, PERDCOMP e outras declarações.</p>
                        </li>
                    </ul>
                </div>
            </article>
        </section>
        <section id="sobre" class="bgParallax" data-speed="10">
            <article class="intro">
                <div class="content">
                    <h3>Sobre nós</h3>
                    <p>Com mais de 30 anos de experiência, a Martinello Assessoria...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan fermentum odio, nec vehicula tellus efficitur quis. Proin blandit euismod ex, eget pellentesque libero vulputate vitae. Praesent facilisis lobortis augue, vel mollis velit bibendum nec.</p>
                    <p>Phasellus accumsan fermentum odio, nec vehicula tellus efficitur quis. Proin blandit euismod ex, eget pellentesque libero vulputate vitae. Praesent facilisis lobortis augue, vel mollis velit bibendum nec.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan fermentum odio, nec vehicula tellus efficitur quis. Proin blandit euismod ex, eget pellentesque libero vulputate vitae. Praesent facilisis lobortis augue, vel mollis velit bibendum nec.</p>
                    <p>Phasellus accumsan fermentum odio, nec vehicula tellus efficitur quis. Proin blandit euismod ex, eget pellentesque libero vulputate vitae. Praesent facilisis lobortis augue, vel mollis velit bibendum nec.</p>
                </div>
            </article>
        </section>
        <section id="contato" class="bgParallax" data-speed="10">
            <article class="intro">
                <div class="content">
                    <h3>Contato</h3>
                    <p>Se busca mais informações, orçamentos e/ou tenha dúvidas, preencha o formulário abaixo e responderemos o mais breve possível ou então entre contato via ligação, SMS ou whats app no número +55 (11) 99179.3756</p>
                    <form>
                        <div class="grid">
                            <div><label><input type="text" name="nome" placeholder="Nome:" /></label></div>
                            <div><label><input type="text" name="email" placeholder="E-mail:" /></label></div>
                            <div><label><input type="text" name="tel" placeholder="Telefone:" /></label></div>
                            <div><label><input type="text" name="assunto" placeholder="Assunto:" /></label></div>
                            <div class="full"><label><textarea name="mensagem" placeholder="Mensagem:"></textarea></label></div>
                        </div>
                        <input type="button" value="enviar" name="enviar" />
                        <span>Obrigado, sua mensagem foi enviada com sucesso. Aguarde.</span>
                    </form>
                </div>
            </article>
            <footer>
            <img src="lib/img/logo-oficial-footer.png" alt="Martinello Assessoria" width="50" />
            <ol>
                <li>
                    <a href="<?php echo $link_fb; ?>" target="_blank">
                        <img src="lib/img/icon-fb.png" alt="Siga-nos" width="30" height="34">
                    </a>
                </li>
                <li>
                    <a href="<?php echo $link_tw; ?>" target="_blank">
                        <img src="lib/img/icon-tw.png" alt="Siga-nos" width="30" height="34">
                    </a>
                </li>
                <li>
                    <a href="<?php echo $link_yt; ?>" target="_blank">
                        <img src="lib/img/icon-yt.png" alt="Siga-nos" width="30" height="34">
                    </a>
                </li>
                <li>
                    <a href="<?php echo $link_ld; ?>" target="_blank">
                        <img src="lib/img/icon-ld.png" alt="Siga-nos" width="30" height="34">
                    </a>
                </li>
                <li>
                    <a href="<?php echo $link_in; ?>" target="_blank">
                        <img src="lib/img/icon-in.png" alt="Siga-nos" width="30" height="34">
                    </a>
                </li>
            </ol>
            <p class="copy">© 2001-2018 - Martinello Assessoria. Todos os direitos reservados</p>
        </footer>
        </section>
        <script>
            $(document).ready(function () {
                $('.bgParallax').each(function () {
                    var $obj = $(this);
                    $(window).scroll(function () {
                        var yPos = -($(window).scrollTop() / $obj.data('speed'));
                        var bgpos = '50% ' + yPos + 'px';
                        $obj.css('background-position', bgpos);
                    });
                });
                $('.nav-icon').click(function () {
                    $(this).toggleClass('open');
                    $('nav ul').slideToggle();
                });
            });
            $(function () {
                var nav = $('header');
                $(window).scroll(function () {
                    if ($(this).scrollTop() >= $('#servicos').offset().top - 88) {
                        nav.addClass("scroll", 'slow');
                    } else {
                        nav.removeClass("scroll", 'slow');
                    }
                    state = !state;
                });
            });
            </script>
    </body>
</html>