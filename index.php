<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MACLONGO: Produtos e serviços de alta qualidade para a indústria e ferramentas">
    <title>Maclongo</title>
    <link rel="stylesheet" href="css/styleLan.css">
    <link rel="shortcut icon" href="img/logo.png">
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
        <li><a href="/php/Produtos.php" onclick="toggleMenu()">Produtos</a></li>
        <li><a href="/php/Servicos.php" onclick="toggleMenu()">Serviços</a></li>
        <li><a href="/php/Empresa.php" onclick="toggleMenu()">Empresa</a></li>
        <li><a href="#contactos" onclick="toggleMenu()">Contactos</a></li>
        <button class="login-btn">Login</button>
    </ul>
</nav>
</header>



<!-- Seção Home -->
<section id="home" class="section-home">
    <h1>Bem-vindo à MACLONGO</h1>
    <p>Oferecemos produtos e serviços de alta qualidade para a sua indústria.</p>
</section>



<main>
    <!-- Seção Produtos -->
    <section id="produtos" class="produtos-container">
        <h2><strong>Nossos Produtos</strong></h2>
        <div class="produtos-grid">
            <?php if (!empty($produtos)) : ?>
                <?php foreach ($produtos as $produto) : ?>
                    <article class="produto-card">
                        <img src="<?php echo $produto['url']; ?>" alt="Imagem do produto: <?php echo $produto['nome']; ?>" class="produto-img">
                        <div class="produto-info">
                            <h3><?php echo $produto['nome']; ?></h3>
                            <p><?php echo $produto['descricao']; ?></p>
                            <button class="produto-button" aria-label="Saiba mais sobre o produto: <?php echo $produto['nome']; ?>">Saiba +</button>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Não há produtos disponíveis no momento.</p>
            <?php endif; ?>
        </div>
    </section>

   <!-- Seção Serviços -->
<section id="servicos" class="sec_servicos">
    <h2 style="text-align: center;"><strong>Nossos Serviços</strong></h2>
    <div class="container_service">
        <article class="service_card"> <!-- Substituído service_box por service_card -->
            <img src="img/service1.jpg" alt="Afiação de Ferramentas">
            <h3>Afiação e Recuperação de Ferramentas</h3>
            <p>Prestamos serviços de afiação e recuperação de ferramentas de corte.</p>
            <button class="service-button">Saiba mais</button>
        </article>

        <article class="service_card"> <!-- Substituído service_box por service_card -->
            <img src="img/service2.jpg" alt="Reparação de Ferramentas Elétricas">
            <h3>Reparação de Ferramentas Elétricas</h3>
            <p>Serviços especializados em reparação de ferramentas elétricas e industriais.</p>
            <button  class="service-button">Saiba mais</button>
        </article>
    </div>
</section>

    <!-- Seção Contactos -->
<section class="contact_container" id="contactos">
    <div class="right-side">
        <h2>Entre em Contacto</h2>
        <p>Para mais informações e orçamentos, por favor contacte-nos!</p>
        <form class="contact_form" method="post" action="submit.php">
            <div class="input-box">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Seu Nome" required>
            </div>
            <div class="input-box">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Seu Email" required>
            </div>
            <div class="input-box message-box">
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" placeholder="Sua Mensagem" required></textarea>
            </div>
            <div class="button">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
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
                <img src="img/icon_email.png" alt="Email" class="footer-icon">
                <p>geral@maclongo.pt</p>
            </div>
            <div class="footer-item">
                <img src="img/icon_phone.png" alt="Telefone" class="footer-icon">
                <p>914 577 707 / 918 253 586</p>
            </div>
            <div class="footer-item">
                <img src="img/icon_hours.png" alt="Horário" class="footer-icon">
                <p>2ª a 6ª Feira: 9h às 12h30 e das 14h às 18h30</p>
            </div>
        </div>
        <p>MACLONGO, Lda | Todos os Direitos Reservados &copy; 2024</p>
    </div>
</footer>

<script src="/js/script_m.js"></script>

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
