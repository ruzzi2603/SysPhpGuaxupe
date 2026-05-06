<footer class="site-footer">
        <div class="container footer-grid">
            <div>
                <h3>Café Premium</h3>
                <p>
                    Um layout institucional forte, elegante e pronto para evoluir em um site comercial completo
                    para venda e apresentação de café.
                </p>
            </div>

            <div>
                <h4>Links</h4>
                <a href="#sobre">Sobre</a>
                <a href="#produtos">Produtos</a>
                <a href="#qualidade">Qualidade</a>
            </div>

            <div>
                <h4>Contato</h4>
                <p>Guaxupé - MG</p>
                <p>contato@cafepremium.com</p>
                <p>(35) 0000-0000</p>
            </div>
        </div>

        <div class="container footer-bottom">
            <span>© <?= date('Y') ?> Café Premium. Todos os direitos reservados.</span>
            <span>Design institucional moderno em PHP</span>
        </div>
    </footer>

    <style>
        .site-footer {
            margin-top: 30px;
            padding: 48px 0 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(10, 7, 5, 0.65);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.4fr 0.8fr 0.8fr;
            gap: 24px;
            padding-bottom: 28px;
        }

        .site-footer h3,
        .site-footer h4 {
            margin-bottom: 14px;
        }

        .site-footer p,
        .site-footer a,
        .site-footer span {
            color: var(--muted);
            line-height: 1.8;
            display: block;
        }

        .site-footer a:hover {
            color: #fff;
        }

        .footer-bottom {
            padding-top: 18px;
            border-top: 1px solid rgba(255,255,255,0.08);
            display: flex;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap;
            font-size: 0.92rem;
        }

        @media (max-width: 860px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

</body>
</html>