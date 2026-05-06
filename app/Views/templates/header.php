<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café Premium | Qualidade, Origem e Sabor</title>
    <meta name="description" content="Site institucional e comercial de café premium com design sofisticado, animações suaves e apresentação profissional da marca.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #0f0b08;
            --bg-2: #18110d;
            --card: rgba(255, 255, 255, 0.06);
            --card-strong: rgba(255, 255, 255, 0.1);
            --text: #f6f1ea;
            --muted: rgba(246, 241, 234, 0.72);
            --accent: #c98c4d;
            --accent-2: #8b5a2b;
            --accent-3: #e4b77a;
            --line: rgba(255, 255, 255, 0.12);
            --shadow: 0 20px 60px rgba(0, 0, 0, 0.35);
            --radius: 24px;
            --radius-sm: 16px;
            --max: 1200px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background:
                radial-gradient(circle at top, rgba(201, 140, 77, 0.18), transparent 28%),
                radial-gradient(circle at bottom right, rgba(228, 183, 122, 0.10), transparent 22%),
                linear-gradient(180deg, var(--bg), var(--bg-2));
            color: var(--text);
            overflow-x: hidden;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: min(100% - 32px, var(--max));
            margin: 0 auto;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(18px);
            background: rgba(15, 11, 8, 0.72);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .nav {
            min-height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            letter-spacing: 0.5px;
        }

        .brand-mark {
            width: 44px;
            height: 44px;
            border-radius: 14px;
            background: linear-gradient(135deg, var(--accent), var(--accent-3));
            box-shadow: 0 10px 30px rgba(201, 140, 77, 0.35);
            display: grid;
            place-items: center;
            color: #1b120d;
            font-size: 1.15rem;
            transform: rotate(-6deg);
        }

        .brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1.05;
        }

        .brand-text strong {
            font-size: 1rem;
        }

        .brand-text span {
            font-size: 0.78rem;
            color: var(--muted);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 26px;
            color: var(--muted);
            font-size: 0.95rem;
        }

        .nav-links a {
            position: relative;
            transition: 0.3s ease;
        }

        .nav-links a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, var(--accent), var(--accent-3));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .nav-links a:hover {
            color: #fff;
        }

        .nav-links a:hover::after {
            transform: scaleX(1);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .btn {
            border: 0;
            outline: 0;
            cursor: pointer;
            border-radius: 999px;
            padding: 12px 18px;
            font-weight: 600;
            transition: 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent), var(--accent-3));
            color: #24170f;
            box-shadow: 0 10px 30px rgba(201, 140, 77, 0.28);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 36px rgba(201, 140, 77, 0.35);
        }

        .btn-ghost {
            background: rgba(255, 255, 255, 0.06);
            color: var(--text);
            border: 1px solid rgba(255, 255, 255, 0.09);
        }

        .btn-ghost:hover {
            background: rgba(255, 255, 255, 0.10);
            transform: translateY(-2px);
        }

        .mobile-toggle {
            display: none;
            width: 46px;
            height: 46px;
            border-radius: 14px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            cursor: pointer;
        }

        .hero-bg {
            position: fixed;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
            z-index: -1;
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(16px);
            opacity: 0.55;
            animation: float 12s ease-in-out infinite;
        }

        .orb.one {
            width: 260px;
            height: 260px;
            background: rgba(201, 140, 77, 0.20);
            top: 10%;
            left: -60px;
        }

        .orb.two {
            width: 320px;
            height: 320px;
            background: rgba(228, 183, 122, 0.10);
            bottom: 8%;
            right: -90px;
            animation-delay: -4s;
        }

        .orb.three {
            width: 180px;
            height: 180px;
            background: rgba(139, 90, 43, 0.20);
            top: 42%;
            right: 18%;
            animation-delay: -7s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-20px) scale(1.04); }
        }

        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.9s ease, transform 0.9s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 920px) {
            .nav-links {
                display: none;
            }

            .mobile-toggle {
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="hero-bg">
        <span class="orb one"></span>
        <span class="orb two"></span>
        <span class="orb three"></span>
    </div>

    <header class="site-header">
        <div class="container">
            <nav class="nav">
                <a href="<?= base_url('/') ?>" class="brand">
                    <div class="brand-mark">☕</div>
                    <div class="brand-text">
                        <strong>Café Premium</strong>
                        <span>Origem, sabor e excelência</span>
                    </div>
                </a>

                <div class="nav-links" id="navLinks">
                    <a href="#sobre">Sobre</a>
                    <a href="#produtos">Produtos</a>
                    <a href="#qualidade">Qualidade</a>
                    <a href="#estrutura">Estrutura</a>
                    <a href="#contato">Contato</a>
                </div>

                <div class="header-actions">
                    <a href="#contato" class="btn btn-ghost">Falar com a equipe</a>
                    <button class="mobile-toggle" id="menuToggle" aria-label="Abrir menu">☰</button>
                </div>
            </nav>
        </div>
    </header>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', () => {
                const isOpen = navLinks.style.display === 'flex';
                navLinks.style.display = isOpen ? 'none' : 'flex';
                navLinks.style.position = isOpen ? '' : 'absolute';
                navLinks.style.top = isOpen ? '' : '82px';
                navLinks.style.left = isOpen ? '' : '16px';
                navLinks.style.right = isOpen ? '' : '16px';
                navLinks.style.flexDirection = isOpen ? '' : 'column';
                navLinks.style.gap = isOpen ? '' : '16px';
                navLinks.style.padding = isOpen ? '' : '18px';
                navLinks.style.borderRadius = isOpen ? '' : '18px';
                navLinks.style.background = isOpen ? '' : 'rgba(15, 11, 8, 0.96)';
                navLinks.style.border = isOpen ? '' : '1px solid rgba(255,255,255,0.08)';
                navLinks.style.boxShadow = isOpen ? '' : '0 24px 60px rgba(0,0,0,0.35)';
            });
        }
    </script>