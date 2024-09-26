<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - MacLongo</title>
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style_Pages.css">
</head>
<body>

<header>
<nav>
    <a href="#" class="logo">MACLONGO</a>
    <div class="menu-icon" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <ul id="nav-links">
        <li><a href="/index.php" onclick="toggleMenu()">Home</a></li>
        <li><a href="/php/Produtos.php" onclick="toggleMenu()">Produtos</a></li>
        <li><a href="/php/Empresa.php" onclick="toggleMenu()">Empresa</a></li>
        <li><a href="/index.php#contactos" onclick="toggleMenu()">Contactos</a></li>
        <button class="login-btn">Login</button>
    </ul>
</nav>
</header>


<main>
   <!-- Seção Serviços -->
   <section id="servicos" class="sec_servicos">
    <h2 style="text-align: center;"><strong>Nossos Serviços</strong></h2>
    <div class="container_service">
        <article class="service_card"> <!-- Substituído service_box por service_card -->
            <img src="/img/service1.jpg" alt="Afiação de Ferramentas">
            <h3>Afiação e Recuperação de Ferramentas</h3>
            <p>Prestamos serviços de afiação e recuperação de ferramentas de corte.</p>
            <button  class="service-button">Reservar Serviço</button>
        </article>

        <article class="service_card"> <!-- Substituído service_box por service_card -->
            <img src="/img/service2.jpg" alt="Reparação de Ferramentas Elétricas">
            <h3>Reparação de Ferramentas Elétricas</h3>
            <p>Serviços especializados em reparação de ferramentas elétricas e industriais.</p>
            <button  class="service-button">Reservar Serviço</button>
        </article>
    </div>
</section>
</main>
    
<!-- Footer -->

<footer>
    <div class="footer">
        <p>REDES SOCIAIS</p>
        <div class="social-media">
            <a href="https://www.facebook.com/people/Maclongo-Com%C3%A9rcio-de-M%C3%A1quinas-e-Ferramentas-Lda/100066271255190/" target="_blank" aria-label="Facebook">
                <img src="/img/icon_facebook.png" alt="Facebook">
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

<script>
        window.onscroll = function() {
        var header = document.querySelector("header");
        var logo = document.querySelector(".nav-logo img");
        if (window.scrollY > 50) {
            header.classList.add("shrink");
            logo.style.height = "30px";
        } else {
            header.classList.remove("shrink");
            logo.style.height = "60px"; // Tamanho original da logo
        }
    };

function toggleMenu() {
    const navLinks = document.getElementById('nav-links');
    navLinks.classList.toggle('active');
}
</script>
</body>
</html>