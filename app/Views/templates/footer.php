<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importação das fontes idêntica ao novo padrão do header -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">

    <style>
        /* Variáveis alinhadas à nova Paleta Terrosa Minimalista e Neutra */
        :root {
            --bg-dark: #0f0c1b;
            --champagne: #ba977a;
            --creme-sutil: #e3ccb8;
            --text-muted: rgba(227, 204, 184, 0.6);
            --line-alpha: rgba(186, 151, 122, 0.12);
            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Inter', sans-serif;
        }

        /* Rodapé com Efeito Glassmorphism Sofisticado */
        .site-footer {
            background: linear-gradient(180deg, transparent, rgba(15, 12, 27, 0.95));
            border-top: 1px solid var(--line-alpha);
            padding: clamp(60px, 8vw, 100px) 0 clamp(30px, 4vw, 50px) 0;
            font-family: var(--font-sans);
            color: var(--creme-sutil);
            position: relative;
            overflow: hidden;
        }

        .container {
            width: min(100% - 40px, 1200px);
            margin: 0 auto;
        }

        /* Layout Inquebrável com CSS Grid Avançado */
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 48px;
            margin-bottom: 60px;
        }

        /* Estilização da Marca do Café */
        .footer-brand h3 {
            font-family: var(--font-serif);
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            font-weight: 700;
            color: var(--champagne);
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }

        .footer-brand h3 em {
            font-family: var(--font-serif);
            font-style: italic;
            font-weight: 400;
            color: var(--creme-sutil);
        }

        .footer-brand p {
            font-size: 0.95rem;
            line-height: 1.6;
            color: var(--text-muted);
            font-weight: 300;
        }

        /* Colunas de Links e Dados */
        .footer-nav h4 {
            font-family: var(--font-sans);
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--champagne);
            margin-bottom: 24px;
            font-weight: 600;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 14px;
        }

        .footer-links a {
            text-decoration: none;
            color: var(--text-muted);
            font-size: 0.95rem;
            font-weight: 400;
            transition: color 0.3s cubic-bezier(0.25, 1, 0.5, 1), padding-left 0.3s ease;
            display: inline-block;
        }

        /* Micro-interações Fluidas no Hover */
        .footer-links a:hover {
            color: var(--champagne);
            padding-left: 4px;
        }

        /* Linha de Divisão e Bottom do Footer */
        .footer-bottom {
            border-top: 1px solid var(--line-alpha);
            padding-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 300;
        }

        .footer-bottom-links a {
            color: var(--text-muted);
            text-decoration: none;
            margin-left: 24px;
            transition: color 0.3s ease;
        }

        .footer-bottom-links a:hover {
            color: var(--creme-sutil);
        }

        /* Ajustes de Responsividade via Media Query para Telas Pequenas */
        @media (max-width: 600px) {
            .footer-grid {
                gap: 36px;
            }
            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
            .footer-bottom-links a {
                margin: 0 12px;
            }
        }
    </style>
</head>
<body>

    <!-- O CONTEÚDO PRINCIPAL DO SITE TERMINA LOGO ACIMA -->
    </main>

    <!-- FOOTER PREMIUM DE LUXO -->
    <footer class="site-footer">
        <div class="container">
            
            <div class="footer-grid">
                <!-- Seção Institucional da Marca -->
                <div class="footer-brand">
                    <h3>Café <em>Premium</em></h3>
                    <p>Uma curadoria exclusiva de grãos raros de altitude. Unimos a sofisticação do design à pureza sensorial do café arábica perfeitamente torrado.</p>
                </div>

                <!-- Links de Navegação (Fonte Inter - Limpa para dados) -->
                <div class="footer-nav">
                    <h4>Navegação</h4>
                    <ul class="footer-links">
                        <li><a href="#sobre">A Origem</a></li>
                        <li><a href="#produtos">Os Grãos</a></li>
                        <li><a href="#qualidade">Processo SCA</a></li>
                        <li><a href="#contato">Atendimento</a></li>
                    </ul>
                </div>

                <!-- Dados de Contato / Corporativo -->
                <div class="footer-nav">
                    <h4>Contato & Endereço</h4>
                    <ul class="footer-links">
                        <li><a href="mailto:contato@cafepremium.com">contato@cafepremium.com</a></li>
                        <li><a href="tel:+5511999999999">+55 (11) 99999-9999</a></li>
                        <li><span style="font-size: 0.95rem; color: var(--text-muted); font-weight: 300; display: block; line-height: 1.6;">Alameda Lorena, 1040<br>Jardins, São Paulo - SP</span></li>
                    </ul>
                </div>
            </div>

            <!-- Base do Rodapé -->
            <div class="footer-bottom">
                <p>&copy; 2026 Café Premium. Conteúdo estritamente protegido.</p>
                <div class="footer-bottom-links">
                    <a href="#privacidade">Políticas de Privacidade</a>
                    <a href="#termos">Termos de Uso</a>
                </div>
            </div>

        </div>
    </footer>

    <!-- ANIMAÇÕES FLUIDAS DE ALTA PERFORMANCE (INTERSECTION OBSERVER) -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Configuração do Observer assíncrono nativo do navegador
            const observerOptions = {
                root: null, // Usa a viewport do navegador
                rootMargin: "0px",
                threshold: 0.15 // Ativa quando 15% do elemento surge na tela
            };

            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                        // Desativa o observer para este elemento após animar (otimiza memória)
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Seleciona todos os elementos com a classe .reveal criados no conteúdo principal
            const elementsToReveal = document.querySelectorAll(".reveal");
            elementsToReveal.forEach(el => imageObserver.observe(el));
        });
    </script>
</body>
</html>