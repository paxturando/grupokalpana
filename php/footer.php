<div id="wrapper-footer">
    <footer>
        <div id="wrapper-footer-superior">
            <div id="wrapper-footer-columna-servicios" class="wrapper-footer-columna ocultar-small">
                <section id="lista-servicios">
                    <h4>Qué hacemos</h4>
                    <ul>
                        <li>
                            <a href="servicios-paquete-idea.php">paquete idea</a>
                        </li>
                        <li>
                            <a href="servicios-desarrollo-web.php">desarrollo web</a>
                        </li>
                        <li>
                            <a href="servicios-marketing-internet.php">marketing online</a>
                        </li>
                        <li>
                            <a href="servicios-aplicaciones-moviles.php">aplicaciones para móviles</a>
                        </li>
                        <li>
                            <a href="servicios-alojamiento-virtual.php">alojamiento virtual</a>
                        </li>
                        <li>
                            <a href="servicios-soporte-mantenimiento.php">soporte y mantenimiento</a>
                        </li>
                    </ul>
                </section>
            </div>
            <div id="wrapper-footer-columna-tweets" class="wrapper-footer-columna ocultar-medio">
                <aside id="tweets">
                    <h4>Últimos tweets</h4>
                    <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                    <script>
                        new TWTR.Widget({
                            version: 2,
                            type: 'profile',
                            rpp: 4,
                            interval: 5000,
                            theme: {
                                shell: {
                                },
                                tweets: {
                                    background: '#333',
                                    color: '#ddd',
                                    links: '#ff7100'
                                }
                            },
                            features: {
                                scrollbar: false,
                                loop: false,
                                live: false,
                                hashtags: false,
                                timestamp: false,
                                avatars: false,
                                toptweets: false,
                                fullscreen: false
                            }
                        }).render().setUser('GrupoKalpana').start();
                    </script>
                </aside>
            </div>
            <div id="wrapper-footer-columna-contacto" class="wrapper-footer-columna">
                <section id="informacion-contacto-footer">
                    <h4 class="ocultar-micro">Contacto</h4>
                    <address>
                        <p><span id="telefono-contacto-footer"></span>(+34) 679882938</p>
                        <p><span id="mail-contacto-footer"></span><a href="mailto:info@grupokalpana.com">info@grupokalpana.com</a></p>
                    </address>
                </section>
                <section id="redes-sociales" class="ocultar-micro">
                    <h4>Síguenos!</h4>
                    <ul>
                        <li>
                            <a href="#" target="_blank" class="redes-sociales-rss"></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/grupokalpana" target="_blank" class="redes-sociales-facebook"></a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="redes-sociales-google"></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/GrupoKalpana" target="_blank" class="redes-sociales-twitter"></a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <div id="wrapper-footer-inferior">
            <aside id="copy">
                <img src="./images/logo-pie.png" height="40" width="144" class="ocultar-medio">
                <p>©2013 Grupo Kalpana. Todos los derechos reservados.</p>
            </aside>
            <aside id="certificados" class="ocultar-medio">
                <ul>
                    <li>
                        <a href="http://www.w3.org/html/" target="_blank" class="certificados-html5"></a>
                    </li>
                    <li>
                        <a href="http://www.w3.org/Style/CSS/" target="_blank" class="certificados-css3"></a>
                    </li>
                </ul>
            </aside>
        </div>
    </footer>
</div>
