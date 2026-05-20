<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café Premium — Do Produtor à Xícara</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <style>
        /* ==========================================================================
           RESET & VARIÁVEIS GLOBAIS (Design do Sistema — Paleta Terrosa Minimalista)
           ========================================================================== */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            /* Cores Estilizadas e Neutras */
            --bg-dark: #0f0c1b;         /* Fundo profundo luxuoso */
            --bg-card: rgba(22, 19, 32, 0.45); /* Vidro translúcido escuro */
            --border-glow: rgba(186, 151, 122, 0.15);
            
            /* Tons de Café e Ouro Champagne */
            --accent-primary: #ba977a;   /* Ouro sutil / Café cru elegante */
            --accent-bright: #e3ccb8;    /* Tom creme claro de destaque */
            --text-main: #f5f2eb;        /* Off-white quente, confortável para leitura */
            --text-muted: #a8a29e;       /* Cinza terroso para textos secundários */
            
            /* Tipografia e Efeitos */
            --font-serif: 'Playfair Display', Georgia, serif;
            --font-sans: 'Inter', system-ui, sans-serif;
            --shadow-premium: 0 30px 70px rgba(0, 0, 0, 0.6);
            --transition-smooth: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        html {
            scroll-behavior: smooth;
            font-family: var(--font-sans);
            background-color: var(--bg-dark);
            color: var(--text-main);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* Estrutura base de cabeçalho moderno */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(15, 12, 27, 0.75);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.04);
            padding: 20px 0;
        }

        .nav-container {
            width: 90%;
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: var(--font-serif);
            font-size: 1.4rem;
            font-weight: 500;
            letter-spacing: 1px;
            color: var(--text-main);
            text-decoration: none;
        }

        .logo span {
            color: var(--accent-primary);
        }

        .nav-menu {
            display: flex;
            gap: 32px;
            list-style: none;
        }

        .nav-menu a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 400;
            letter-spacing: 0.5px;
            transition: var(--transition-smooth);
        }

        .nav-menu a:hover {
            color: var(--accent-bright);
        }

        /* ==========================================================================
           REGRAS DE LAYOUT & CONTAINER GLOBAL RESISTENTE
           ========================================================================== */
        .container {
            width: 90%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section {
            padding: 140px 0;
            position: relative;
        }

        .section.alt {
            background: linear-gradient(180deg, rgba(22, 19, 32, 0.3) 0%, transparent 100%);
        }

        /* Elemento de Rótulo / Eyebrow */
        .eyebrow, .section-label {
            display: inline-flex;
            align-items: center;
            padding: 6px 16px;
            border-radius: 100px;
            background: rgba(186, 151, 122, 0.06);
            border: 1px solid rgba(186, 151, 122, 0.18);
            color: var(--accent-bright);
            font-size: 0.75rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 28px;
        }

        /* Cabeçalhos de Seções Modulares */
        .section-head {
            max-width: 800px;
            margin-bottom: 80px;
        }

        .section-head h2 {
            font-family: var(--font-serif);
            font-size: clamp(2.2rem, 4vw, 3.8rem);
            font-weight: 400;
            line-height: 1.15;
            letter-spacing: -0.5px;
            margin-bottom: 24px;
        }

        .section-head p {
            color: var(--text-muted);
            font-size: clamp(1rem, 1.2vw, 1.15rem);
            line-height: 1.8;
            font-weight: 300;
        }

        /* Botões Minimalistas Premium */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 36px;
            border-radius: 4px;
            font-size: 0.88rem;
            font-weight: 500;
            letter-spacing: 1px;
            text-decoration: none;
            text-transform: uppercase;
            transition: var(--transition-smooth);
            cursor: pointer;
        }

        .btn-primary {
            background: var(--accent-primary);
            color: #0f0c1b;
            border: 1px solid var(--accent-primary);
        }

        .btn-primary:hover {
            background: transparent;
            color: var(--accent-bright);
            border-color: var(--accent-bright);
            transform: translateY(-2px);
        }

        .btn-ghost {
            background: transparent;
            color: var(--text-main);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .btn-ghost:hover {
            border-color: var(--accent-primary);
            color: var(--accent-bright);
            transform: translateY(-2px);
        }

        /* ==========================================================================
           HERO SECTION (Otimizada com Layout Flexível Grid e Imagens Puras)
           ========================================================================== */
        .hero {
            padding: 200px 0 100px;
            min-height: 100vh;
            margin-top: -120px;

            display: flex;
            align-items: center;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 80px;
            align-items: center;
        }

        .hero-copy h1 {
            font-family: var(--font-serif);
            font-size: clamp(3rem, 5.5vw, 5.8rem);
            font-weight: 400;
            line-height: 1.05;
            letter-spacing: -2px;
            margin-bottom: 28px;
        }

        .hero-copy h1 span {
            color: var(--accent-primary);
            font-style: italic;
        }

        .hero-text {
            color: var(--text-muted);
            font-size: clamp(1.05rem, 1.3vw, 1.25rem);
            line-height: 1.8;
            font-weight: 300;
            max-width: 58ch;
            margin-bottom: 40px;
        }

        .hero-actions {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 64px;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.06);
            padding-top: 40px;
        }

        .stat-card {
            background: transparent;
        }

        .stat-card strong {
            display: block;
            font-family: var(--font-serif);
            font-size: clamp(2rem, 3vw, 3.2rem);
            font-weight: 400;
            color: var(--accent-bright);
            margin-bottom: 8px;
        }

        .stat-card span {
            color: var(--text-muted);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 400;
        }

        /* Painel Visual com Glassmorphism Avançado */
        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .glass-card {
            position: relative;
            width: 100%;
            aspect-ratio: 4/5;
            min-height: 580px;
            border-radius: 12px;
            background: linear-gradient(180deg, rgba(255,255,255,0.02) 0%, rgba(255,255,255,0.00) 100%),
                        url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.06);
            box-shadow: var(--shadow-premium);
        }

        .glass-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(15, 12, 27, 0.1) 0%, rgba(15, 12, 27, 0.85) 100%);
            z-index: 1;
        }

        .coffee-circle {
            position: absolute;
            right: -30px;
            top: -30px;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            border: 1px solid rgba(186, 151, 122, 0.15);
            background: radial-gradient(circle, rgba(186, 151, 122, 0.04) 0%, transparent 70%);
            animation: floatCircle 16s ease-in-out infinite;
            z-index: 0;
        }

        .main-card-content {
            position: absolute;
            left: 40px;
            right: 40px;
            bottom: 40px;
            z-index: 2;
        }

        .main-card-content h3 {
            font-family: var(--font-serif);
            font-size: 2rem;
            font-weight: 400;
            line-height: 1.2;
            margin-bottom: 16px;
        }

        .main-card-content p {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.7;
            font-weight: 300;
        }

        /* Etiquetas Flutuantes Minimalistas */
        .floating-tag {
            position: absolute;
            padding: 10px 20px;
            border-radius: 4px;
            background: rgba(15, 12, 27, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.08);
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            backdrop-filter: blur(10px);
            z-index: 3;
            animation: floatTag 8s ease-in-out infinite;
        }
        

        .tag-one { top: 40px; left: -20px; animation-delay: 0s; }
        .tag-two { top: 160px; right: -20px; animation-delay: -2s; }
        .tag-three { bottom: 180px; left: -30px; animation-delay: -4s; }

        /* ==========================================================================
           SEÇÕES DE CONTEÚDO (Cards, Grades de Produtos e Elementos Dinâmicos)
           ========================================================================== */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 32px;
        }

        .info-card {
            background: var(--bg-card);
            border: 1px solid rgba(255, 255, 255, 0.03);
            border-radius: 8px;
            padding: 48px;
            transition: var(--transition-smooth);
        }

        .info-card:hover {
            border-color: var(--border-glow);
            transform: translateY(-8px);
            background: rgba(22, 19, 32, 0.6);
        }

        .info-card h3 {
            font-family: var(--font-serif);
            font-size: 1.45rem;
            font-weight: 400;
            margin-bottom: 20px;
            color: var(--accent-bright);
        }

        .info-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.75;
            font-weight: 300;
        }

        /* Grade de Produtos Estilizada */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 24px;
        }

        .product-card {
            background: var(--bg-card);
            border: 1px solid rgba(255, 255, 255, 0.03);
            border-radius: 6px;
            padding: 40px 32px;
            position: relative;
            transition: var(--transition-smooth);
        }

        .product-card:hover {
            border-color: var(--border-glow);
            transform: translateY(-6px);
        }

        .product-icon {
            font-family: var(--font-serif);
            font-size: 1.1rem;
            color: var(--accent-primary);
            margin-bottom: 32px;
            display: block;
            position: relative;
        }

        .product-icon::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 24px;
            height: 1px;
            background: rgba(186, 151, 122, 0.3);
        }

        .product-card h3 {
            font-family: var(--font-sans);
            font-size: 1.2rem;
            font-weight: 500;
            margin-bottom: 12px;
            letter-spacing: -0.2px;
        }

        .product-card p {
            color: var(--text-muted);
            font-size: 0.9rem;
            line-height: 1.7;
            font-weight: 300;
        }

        /* Seção de Qualidade e Métricas */
        .quality-wrap {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 80px;
            align-items: center;
        }

        .check-list {
            list-style: none;
            margin-top: 40px;
            display: grid;
            gap: 20px;
        }

        .check-list li {
            padding-left: 36px;
            position: relative;
            font-size: 1rem;
            font-weight: 300;
            color: var(--text-main);
        }

        .check-list li::before {
            content: "—";
            position: absolute;
            left: 0;
            color: var(--accent-primary);
            font-weight: 400;
        }

        .quality-panel {
            background: var(--bg-card);
            border: 1px solid rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            padding: 40px;
            display: grid;
            gap: 20px;
        }

        .metric {
            padding: 32px;
            border-radius: 6px;
            background: rgba(15, 12, 27, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.02);
            transition: var(--transition-smooth);
        }

        .metric:hover {
            border-color: rgba(186, 151, 122, 0.1);
        }

        .metric strong {
            display: block;
            font-family: var(--font-serif);
            font-size: 2.4rem;
            font-weight: 400;
            color: var(--accent-bright);
            margin-bottom: 8px;
        }

        .metric span {
            color: var(--text-muted);
            font-size: 0.88rem;
            letter-spacing: 0.5px;
            font-weight: 300;
        }

        /* Seção de Linha do Tempo Estilizada */
        .timeline {
            display: grid;
            gap: 32px;
            max-width: 900px;
            margin: 0 auto;
        }

        .timeline-item {
            display: flex;
            gap: 40px;
            padding: 40px;
            background: var(--bg-card);
            border: 1px solid rgba(255, 255, 255, 0.03);
            border-radius: 8px;
            align-items: flex-start;
            transition: var(--transition-smooth);
        }

        .timeline-item:hover {
            border-color: var(--border-glow);
        }

        .timeline-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin-top: 10px;
            background: var(--accent-primary);
            box-shadow: 0 0 0 6px rgba(186, 151, 122, 0.15);
            flex: 0 0 auto;
        }

        .timeline-item h3 {
            font-family: var(--font-serif);
            font-size: 1.35rem;
            font-weight: 400;
            margin-bottom: 12px;
            color: var(--accent-bright);
        }

        .timeline-item p {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.7;
            font-weight: 300;
        }

        /* Bloco de Contato Corporativo */
        .contact-box {
            border-radius: 12px;
            padding: 80px 60px;
            background: linear-gradient(135deg, rgba(22, 19, 32, 0.7) 0%, rgba(15, 12, 27, 0.9) 100%);
            border: 1px solid rgba(186, 151, 122, 0.12);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
        }

        .contact-box h2 {
            font-family: var(--font-serif);
            font-size: clamp(2rem, 3vw, 3.2rem);
            font-weight: 400;
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .contact-box p {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.75;
            font-weight: 300;
            max-width: 60ch;
        }

        /* ==========================================================================
           SISTEMA DE ANIMAÇÕES ULTRA-FLUIDAS (Intersection Observer)
           ========================================================================== */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1.2s cubic-bezier(0.16, 1, 0.3, 1), 
                        transform 1.2s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: transform, opacity;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Keyframes Nativos Refinados */
        @keyframes floatTag {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes floatCircle {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(-15px, 10px) scale(1.05); }
        }

        /* ==========================================================================
           RESPONSIVIDADE COMPLETA E INTELIGENTE
           ========================================================================== */
        @media (max-width: 1200px) {
            .product-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 24px;
            }
            .info-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 992px) {
            .section {
                padding: 100px 0;
            }
            .hero-grid, .quality-wrap {
                grid-template-columns: 1fr;
                gap: 64px;
            }
            .hero {
                padding-top: 160px;
            }
            .hero-visual {
                min-height: auto;
            }
            .glass-card {
                min-height: 500px;
            }
            .contact-box {
                flex-direction: column;
                align-items: flex-start;
                padding: 48px 32px;
                gap: 40px;
            }
        }

        @media (max-width: 768px) {
            .info-grid, .product-grid {
                grid-template-columns: 1fr;
            }
            .hero-stats {
                grid-template-columns: 1fr;
                gap: 32px;
            }
            .timeline-item {
                flex-direction: column;
                gap: 20px;
                padding: 32px 24px;
            }
            .nav-menu {
                display: none; 
            }
            .footer-grid {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .footer-copyright {
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="nav-container">
            <a href="#" class="logo">CAFÉ<span>PREMIUM</span></a>
            <ul class="nav-menu">
                <li><a href="#sobre">Origem</a></li>
                <li><a href="#produtos">Coleções</a></li>
                <li><a href="#qualidade">Pureza</a></li>
                <li><a href="#estrutura">Expansão</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-copy reveal">
                   
                    <h1>Conectando tradição, qualidade e <span>experiência única</span>.</h1>
                    <p class="hero-text">
                        Uma plataforma estruturada para valorizar, apresentar e negociar micro-lotes de alta classificação. Foco em rastreabilidade cirúrgica, sustentabilidade real e conexão direta entre mestres produtores e o mercado de alta gastronomia.
                    </p>

                    <div class="hero-actions">
                        <a href="#produtos" class="btn btn-primary">Explorar Coleções</a>
                        <a href="#sobre" class="btn btn-ghost">Nossa Philosophy</a>
                    </div>

                    <div class="hero-stats">
                        <div class="stat-card">
                            <strong>+1.500</strong>
                            <span>Produtores Assistidos</span>
                        </div>
                        <div class="stat-card">
                            <strong>100%</strong>
                            <span>Origem Controlada</span>
                        </div>
                        <div class="stat-card">
                            <strong>Estrita</strong>
                            <span>Análise Sensorial</span>
                        </div>
                    </div>
                </div>

                <div class="hero-visual reveal">
                    <div class="glass-card">
                        <div class="coffee-circle"></div>
                        <div class="floating-tag tag-one">Torra Customizada</div>
                        <div class="floating-tag tag-two">Densidade Selecionada</div>
                        <div class="floating-tag tag-three">SCA 85+ Points</div>

                        <div class="main-card-content">
                            <span style="color: var(--accent-primary); font-size: 0.75rem; letter-spacing: 1px; text-transform: uppercase; display: block; margin-bottom: 8px;">Lote Reserva</span>
                            <h3>Excelência Consistente em Cada Etapa</h3>
                            <p>Do terroir impecável ao envase sob atmosfera modificada. Processos validados por juízes internacionais e uma cadeia de suprimentos totalmente transparente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sobre" class="section">
            <div class="container">
                <div class="section-head reveal">
                    <span class="section-label">O Legado da Marca</span>
                    <h2>Design Minimalista Para Marcas de Forte Presença Comercial</h2>
                    <p>Esta estrutura foi projetada especificamente para cooperativas de ponta e exportadores tradicionais que demandam autoridade visual, reputação limpa e escalabilidade tecnológica.</p>
                </div>

                <div class="info-grid">
                    <article class="info-card reveal">
                        <h3>Terroir & Altitude</h3>
                        <p>Apresentação detalhada da procedência geográfica, mapeamento de faces solares, altitudes médias elevadas e microclimas únicos que desenham perfis químicos complexos.</p>
                    </article>

                    <article class="info-card reveal">
                        <h3>Relação Simbiótica</h3>
                        <p>Valorização do homem do campo por meio de contratos de comércio justo, pacotes de assistência agronômica contínua e investimentos massivos em infraestrutura local.</p>
                    </article>

                    <article class="info-card reveal">
                        <h3>Posicionamento</h3>
                        <p>A estética limpa e o espaçamento generoso elevam instantaneamente o valor percebido do produto, alinhando a marca aos players mais luxuosos do mercado global.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="produtos" class="section alt">
            <div class="container">
                <div class="section-head reveal">
                    <span class="section-label">Categorias</span>
                    <h2>Linhas Estruturadas Para Atender Diferentes Demandas Comerciais</h2>
                    <p>Um ecossistema versátil desenhado para se adequar a catálogos de sacas verdes (commodity premium), grãos torrados comerciais, cápsulas tecnológicas ou lotes de leilão.</p>
                </div>

                <div class="product-grid">
                    <article class="product-card reveal">
                        <span class="product-icon">01</span>
                        <h3>Classificação Tradicional</h3>
                        <p>Perfil de torra equilibrado, doçura de caramelo acentuada e aceitação em massa no ambiente corporativo.</p>
                    </article>

                    <article class="product-card reveal">
                        <span class="product-icon">02</span>
                        <h3>Micro-Lotes Especiais</h3>
                        <p>Notas sensoriais complexas (florais e frutadas), acidez fosfórica brilhante e rastreabilidade total da fazenda.</p>
                    </article>

                    <article class="product-card reveal">
                        <span class="product-icon">03</span>
                        <h3>Blends Corporativos</h3>
                        <p>Combinação exata de grãos de diferentes regiões para garantir consistência extrema e sabor exclusivo o ano todo.</p>
                    </article>

                    <article class="product-card reveal">
                        <span class="product-icon">04</span>
                        <h3>Lotes de Exportação</h3>
                        <p>Preparação rigorosa de padrão internacional (Afonso, NY2/3), pronto para embarques e trâmites portuários céleres.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="qualidade" class="section">
            <div class="container quality-wrap">
                <div class="quality-copy reveal">
                    <span class="section-label">Rigor Analítico</span>
                    <h2>Controle Científico para Manter a Confiança Mercadológica</h2>
                    <p>Interfaces corporativas exigem precisão. Demonstre de forma clara os seus pilares técnicos de controle: análises físicas via inteligência artificial, curvas de torra computadorizadas e certificações internacionais.</p>

                    <ul class="check-list">
                        <li>Varredura óptica eletrônica de defeitos físicos</li>
                        <li>Rastreamento térmico via software Cropster em tempo real</li>
                        <li>Homologação de práticas regenerativas e pegada de carbono neutra</li>
                        <li>Análise de cup de acordo com os rigorosos protocolos mundiais SCA</li>
                    </ul>
                </div>

                <div class="quality-panel reveal">
                    <div class="metric">
                        <strong>Score 85+</strong>
                        <span>Pontuação mínima aceita para nossa linha de microlotes</span>
                    </div>
                    <div class="metric">
                        <strong>24/7</strong>
                        <span>Monitoramento e suporte logístico para importadores</span>
                    </div>
                    <div class="metric">
                        <strong>ISO 22000</strong>
                        <span>Alinhado às diretrizes globais de segurança alimentar</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="estrutura" class="section alt">
            <div class="container">
                <div class="section-head reveal">
                    <span class="section-label">Arquitetura de Expansão</span>
                    <h2>Um Ecossistema Pronto para o Crescimento Digital</h2>
                    <p>Diferente de landing pages comuns, esta estrutura de código modular foi projetada pensando nas próximas integrações de canais de venda complexos da empresa.</p>
                </div>

                <div class="timeline">
                    <div class="timeline-item reveal">
                        <span class="timeline-dot"></span>
                        <div>
                            <h3>Portal do Comprador Internacional</h3>
                            <p>Ambiente seguro contendo laudos de classificação, certificados fitossanitários e tracking de contêineres marítimos.</p>
                        </div>
                    </div>

                    <div class="timeline-item reveal">
                        <span class="timeline-dot"></span>
                        <div>
                            <h3>Mecanismo de Cotação B2B</h3>
                            <p>Formulários dinâmicos com atualização de precificação em tempo real indexada à Bolsa de Nova York (ICE).</p>
                        </div>
                    </div>

                    <div class="timeline-item reveal">
                        <span class="timeline-dot"></span>
                        <div>
                            <h3>Canal do Cooperado / Produtor</h3>
                            <p>Dashboard focado na transparência, permitindo o acompanhamento de entregas de café, notas de classificação e balanço financeiro.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contato" class="section">
            <div class="container">
                <div class="contact-box reveal">
                    <div>
                        <span class="section-label" style="margin-bottom: 20px;">Contato Institucional</span>
                        <h2>Posicione Sua Operação no Topo do Mercado</h2>
                        <p>Este layout reflete as tendências de design de estúdios europeus. Estamos prontos para escalar este front-end conectando painéis administrativos, bancos de dados relacionais e sistemas integrados (ERPs).</p>
                    </div>
                    <a href="mailto:negocios@cafepremium.com" class="btn btn-primary" style="white-space: nowrap;">Solicitar Acordo</a>
                </div>
            </div>
        </section>

    </main>

    <script>
        // Menu Mobile (Hamburguer)
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
        document.addEventListener("DOMContentLoaded", () => {
            const observerOptions = {
                root: null,
                rootMargin: "0px",
                threshold: 0.12
            };

            const revealCallback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target); // Libera memória do navegador
                    }
                });
            };

            const observer = new IntersectionObserver(revealCallback, observerOptions);
            
            document.querySelectorAll('.reveal').forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>