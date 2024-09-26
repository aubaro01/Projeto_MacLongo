<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa - MacLongo</title>
    <link rel="stylesheet" href="style_Pages.css">
    <link rel="shortcut icon" href="/img/logo.png">

</head>
<body>

<header>
<nav>
    <a href="/index.php" class="logo">MACLONGO</a>
    <div class="menu-icon" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <ul id="nav-links">
        <li><a href="index.html" onclick="toggleMenu()">Home</a></li>
        <li><a href="/php/Produtos.php" onclick="toggleMenu()">Produtos</a></li>
        <li><a href="Servicos.php" onclick="toggleMenu()">Serviços</a></li>
        <li><a href="/index.html#contactos" onclick="toggleMenu()">Contactos</a></li>
        <button class="login-btn">Login</button>
    </ul>
</nav>
</header>

<main>
<section class="about_section container">
    <h1 class="section_title">MacLongo, Lda</h1>
    
    <figure class="about_figure">
        <img class="img_about" src="/img/about01.jpg" alt="Sede da MacLongo">
        <figcaption>Sede da MacLongo</figcaption>
    </figure>

    <h2 class="section_subtitle">A nossa história</h2>

    <article class="text-about">
        <p>Criada em Setembro de 1998, a <strong>MACLONGO</strong> possui mais de 20 anos de experiência na comercialização de máquinas, ferramentas e acessórios para a indústria.</p>
        <p>Com uma força de vendas focada nos distritos norte e centro do país, a empresa não se limita à comercialização de equipamentos, oferecendo uma gama completa de produtos e serviços.</p>
        <p>O <i><strong>core business</strong></i> da empresa é a comercialização de máquinas e acessórios, com foco em áreas como Ar-comprimido, Ferramentas, Polimento, Máquinas Industriais, Parafusaria, Fixação, entre outras.</p>
        <p>Com forte notoriedade no mercado, a <strong>MACLONGO</strong> é referência em diversos sectores, sempre com o compromisso de atender às expectativas dos seus clientes.</p>
    </article>
</section>


<section class="about_boxs">
    <article class="about_box">
        <h3>Missão</h3>
        <p>A <strong>MACLONGO</strong> tem como missão oferecer aos clientes produtos com excelente relação preço-qualidade, garantindo um alto nível de serviços.</p>
    </article>

    <article class="about_box">
        <h3>Visão</h3>
        <p>Ser uma empresa de referência na indústria nacional, atendendo às necessidades dos clientes com uma gama completa de produtos e serviços.</p>
    </article>
</section>

<section class="about_boxs2">
    <article class="about2_box">
        <h3>Valores</h3>
        <ul class="valores-lista">
            <li>Inovação</li>
            <li>Ambição</li>
            <li>Qualidade</li>
            <li>Sustentabilidade</li>
            <li>Rapidez</li>
            <li>Flexibilidade</li>
            <li>Ética</li>
            <li>Fidelidade</li>
        </ul>
    </article>
</section>
</main>

<footer>
    <div class="footer">
        <p>REDES SOCIAIS</p>
        <div class="social-media">
            <a href="https://www.facebook.com/people/Maclongo-Com%C3%A9rcio-de-M%C3%A1quinas-e-Ferramentas-Lda/100066271255190/" target="_blank" aria-label="Facebook">
                <img src="img/icon_facebook.png" alt="Facebook">
            </a>
        </div>

        <div class="contact-info">
            <div class="footer-item">
                <img src="/img/email_icon (1).png" alt="Email" class="footer-icon">
                <p>geral@maclongo.pt</p>
            </div>
            <div class="footer-item">
                <img src="/img/telefone_icon.png" alt="Telefone" class="footer-icon">
                <p>914 577 707 / 918 253 586</p>
            </div>
            <div class="footer-item">
                <img src="/img/horario_icon.png" alt="Horário" class="footer-icon">
                <p>2ª a 6ª Feira: 9h às 12h30 e das 14h às 18h30</p>
            </div>
        </div>
        <p>MACLONGO, Lda | Todos os Direitos Reservados &copy; 2024</p>
    </div>
</footer>

<script src="/js/script_m.js"></script>
<script src="/js/navBar.js"></script>
</body>
</html>
