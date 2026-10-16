<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Museo Soumaya</title>
    <link rel="icon" href="Recursos/sou.ico" type="image/x-icon" />

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="css/styles.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/script.js"></script>

    <style>
        .parallax {
            /* The image used */
            background-image: url('Recursos/Vestibulo/vestibuloentrada.jpg_large');

            /* Set a specific height */
            min-height: 600px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen">
    <header class="fixed top-0 w-full z-50 bg-[#1e293b]/80 shadow-sm">
        <div class="container mx-auto px-4 py-3 flex flex-col md:flex-row items-center justify-between">
            <div class="relative mt-2 md:mt-0 md:ml-6">
                <!-- Logo -->
                <a href="Index.php" class="flex items-center mb-2 md:mb-0 md:mr-6 hover:bg-gray-700">
                    <img src="Recursos/logo.png" alt="Logo" class="h-12" />
                </a>
            </div>

            <!-- Icono del menú hamburguesa para dispositivos móviles -->
            <div class="md:hidden flex items-center">
                <button id="hamburger-icon" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Navegación -->
            <nav class="w-full md:w-auto">
                <ul id="menu" class="flex flex-col md:flex-row items-center justify-center space-y-2 md:space-y-0 md:space-x-6 text-center hidden md:flex">
                    <li>
                        <a href="Exposiciones.php" class="text-white hover:text-black transition-colors">Exposiciones</a>
                    </li>

                    <!-- Galerías con dropdown -->
                    <li class="dropdown relative">
                        <a class="dropdown-toggle text-white hover:text-black transition-colors"
                            href=""
                            id="dropdownMenuButton"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Galerías
                        </a>
                        <ul class="dropdown-menu mt-2 bg-[#1e293b] text-gray shadow rounded z-50" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item text-white " href="Galerias.php">Galerias</a></li>
                            <li><a class="dropdown-item text-white " href="Vestibulo.php">Vestibulo</a></li>
                            <li><a class="dropdown-item text-white " href="#">Sala 1</a></li>
                            <li><a class="dropdown-item text-white " href="#">Sala 2</a></li>
                            <li><a class="dropdown-item text-white " href="#">Sala 3</a></li>
                            <li><a class="dropdown-item text-white " href="#">Sala 4</a></li>
                            <li><a class="dropdown-item text-white " href="#">Sala 5</a></li>
                            <li><a class="dropdown-item text-white " href="#">Rodín</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="Colecciones.php" class="text-white hover:text-black transition-colors">Colecciones</a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:text-black transition-colors">Productos</a>
                    </li>
                    <li>
                        <a href="Contacto.php" class="text-white transition-colors">Contacto</a>
                    </li>
                </ul>
            </nav>

            <!-- Carrito -->
            <div class="relative mt-2 md:mt-0 md:ml-6">
                <a href="checkout.php"
                    class="bg-white-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors flex items-center justify-center space-x-2">
                    <img src="Recursos/carrito.png" alt="Carrito" class="w-6 h-6 object-contain" />
                    <span id="num_cart" class="absolute -top-1 -right-1 bg-red-600 text-white text-xs font-bold px-1.5 py-0.5 rounded-full shadow-lg"></span>
                </a>
            </div>
        </div>
    </header>

    <div class="parallax"></div>
    <div style="height: 50px;"></div>

    <main>

        <div class="max-w-7xl mx-auto p-6 space-y-12">

            <!-- Grid principal -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                <!-- Columna izquierda: texto -->
                <div class="space-y-6 text-justify text-sm md:text-base leading-relaxed">
                    <h1 class="text-2xl md:text-4xl font-bold text-gray-600 border-b-4 border-gray-300 pb-2 mb-6 text-center md:text-left">
                        Vestibulo:Un umbral entre la arquitectura, el arte y la historia.
                    </h1>
                    <p>
                        El vestíbulo del Museo Soumaya es mucho más que una entrada: es un espacio de <strong>triple altura</strong> que representa una síntesis perfecta entre arquitectura y arte, un punto de encuentro donde convergen siglos de creación humana. Desde el primer paso, el visitante se ve envuelto por un ambiente majestuoso que dialoga con lo mejor del arte universal y nacional, dando la bienvenida a una experiencia cultural única.
                    </p>
                    <p>
                        En este gran espacio se alzan obras de algunos de los <strong>grandes maestros de la historia del arte</strong>. Destaca el óleo <em>La Virgen con el Niño y san Juan Bautista</em> (1480), de <strong>Sandro Botticelli</strong>, que comparte escenario con una impresionante versión en bronce de <em>La Piedad</em> de <strong>Michelangelo Buonarroti</strong>, fundida a partir de su célebre original en mármol. A su lado, dos esculturas monumentales de <strong>Auguste Rodin</strong> —<em>El pensador</em> y <em>La puerta del infierno</em>— completan este conjunto escultórico de nivel internacional. Esta colección es <strong>única en América Latina</strong> y llegó al acervo del museo luego de un largo proceso de colaboración entre el Ministerio de Cultura de Francia, el Museo Rodin de París, la fundidora Coubertin y la Fundación Carlos Slim. La fundición, iniciada en 2013, culminó en otoño de 2015 con una pátina café claro, siendo esta la <strong>octava y última réplica autorizada de su tipo</strong>.
                    </p>
                    <p>
                        Pero el vestíbulo no sólo celebra la tradición artística europea; también <strong>rinde homenaje al arte mexicano</strong> con piezas que representan el alma del país. Se encuentra allí el <strong>último mural de Diego Rivera</strong>, <em>Río Juchitán</em>, acompañado por obras clave de <strong>Rufino Tamayo</strong>, como <em>El día y la noche</em> y <em>Naturaleza muerta</em>, que exploran los matices y el carácter profundo de lo mexicano. A esta constelación artística se suma el <strong>mural <em>Zapata</em> de David Alfaro Siqueiros</strong>, una obra contemporánea a <em>Del porfirismo a la Revolución</em>, con la figura del caudillo del sur como protagonista extraído del imaginario histórico.
                    </p>
                    <p>
                        El vestíbulo también alberga una joya del arte virreinal: el <strong>biombo <em>La Conquista de México</em></strong>, recientemente incorporado al acervo. Esta obra recoge el relato fundacional del país y conmemora el encuentro entre dos mundos, con <strong>Hernán Cortés</strong> y <strong>Motecuhzoma Xocoyotzin</strong> como figuras centrales de un episodio que sigue moldeando la identidad mexicana a más de 500 años de distancia.
                    </p>
                    <p>
                        Además de su riqueza artística, el vestíbulo es un espacio funcional y abierto al público. Integra un <strong>auditorio con capacidad para 320 personas</strong>, una <strong>biblioteca infantil</strong> y <strong>zonas de reflexión y creación</strong>, reforzando así la vocación educativa y comunitaria del museo.
                    </p>
                    <p>
                        En conjunto, el vestíbulo del Museo Soumaya es un espacio simbólico y dinámico, <strong>puerta de entrada a un viaje por el arte y la historia de la humanidad</strong>. Es un lugar donde las fronteras entre épocas, estilos y culturas se disuelven, invitando a la contemplación, el diálogo y el descubrimiento constante.
                    </p>
                </div>
                <!-- Columna derecha: multimedia -->
                <div class="space-y-6">
                    <img src="Recursos/Vestibulo/david.jpeg" alt="Interior del museo" class="w-full max-w-xs mx-auto shadow-md" />
                    <img src="Recursos/Vestibulo/puertas.jpeg" alt="Interior del museo" class="w-full max-w-xs mx-auto shadow-md" />
                    <img src="Recursos/Vestibulo/piedad.jpeg" alt="Interior del museo" class="w-full max-w-xs mx-auto shadow-md" />

                </div>
            </div>
        </div>

    </main>

    <div style="height: 100px;"></div>
    <footer class="text-neutral-300 text-sm">
        <!-- Logos de patrocinadores -->
        <div class="bg-neutral-800 border-b border-neutral-700">
            <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col md:flex-row flex-wrap justify-center items-center gap-4">
                <!-- Logos (más pequeños) -->
                <div class="flex flex-wrap justify-center gap-4 w-full md:w-auto">
                    <a href="https://fundacioncarlosslim.org/"><img src="Recursos/Patrocinadores/logo1.png" alt="Logo 1" class="h-6 md:h-8 lg:h-10 object-contain"></a>
                    <a href="https://aprende.org/"><img src="Recursos/Patrocinadores/logo2.png" alt="Logo 2" class="h-6 md:h-8 lg:h-10 object-contain"></a>
                    <a href="https://www.museosoumaya.org/inicio/exposiciones/casa-guillermo-tovar-de-teresa/"><img src="Recursos/Patrocinadores/logo3.png" alt="Logo 3" class="h-6 md:h-8 lg:h-10 object-contain"></a>
                    <a href="https://www.cehm.org.mx/"><img src="Recursos/Patrocinadores/logo4.png" alt="Logo 4" class="h-6 md:h-8 lg:h-10 object-contain"></a>
                    <a href="https://fundacioncarlosslim.org/ven-conoce-salon-deporte/"><img src="Recursos/Patrocinadores/logo5.png" alt="Logo 5" class="h-6 md:h-8 lg:h-10 object-contain"></a>
                </div>

                <!-- Redes sociales -->
                <div class="flex justify-center md:ml-auto gap-3 pt-4 md:pt-0">
                    <a href="https://www.youtube.com/channel/UC3z9vbkQNv2WmVD2pxsBFuA?view_as=subscriber" class="w-10 h-10 flex items-center justify-center bg-transparent">
                        <img src="Recursos/redes sociales/you.png" alt="YouTube" class="w-8 h-8 object-contain filter invert">
                    </a>
                    <a href="https://www.instagram.com/elmuseosoumaya/" class="w-10 h-10 flex items-center justify-center bg-transparent">
                        <img src="Recursos/redes sociales/insta.png" alt="Instagram" class="w-8 h-8 object-contain filter invert">
                    </a>
                    <a href="https://www.facebook.com/elmuseosoumaya/" class="w-10 h-10 flex items-center justify-center bg-transparent">
                        <img src="Recursos/redes sociales/face.png" alt="Facebook" class="w-8 h-8 object-contain filter invert">
                    </a>
                    <a href="https://www.tiktok.com/@elmuseosoumaya?_t=8cOshiArL1y&_r=1" class="w-10 h-10 flex items-center justify-center bg-transparent">
                        <img src="Recursos/redes sociales/tk.png" alt="TikTok" class="w-8 h-8 object-contain filter invert">
                    </a>
                    <a href="https://twitter.com/ElMuseoSoumaya" class="w-10 h-10 flex items-center justify-center bg-transparent">
                        <img src="Recursos/redes sociales/x.png" alt="X" class="w-8 h-8 object-contain filter invert">
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-neutral-900 text-neutral-200">
            <div class="max-w-7xl mx-auto px-4 py-4 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 text-[10px]">

                <!-- Plaza Carso -->
                <div class="flex flex-col gap-1 text-neutral-400">
                    <h3 class="text-white font-semibold text-xs">Plaza Carso</h3>
                    <p>Bulevar Cervantes Saavedra esq. Presa Falcón, Ampliación Granada, Miguel Hidalgo, 11529, CDMX</p>
                    <p>Horario: diario de 10:30 a 18:30 h</p>
                    <p>T 551103 9800 | Entrada gratuita</p>
                    <div style="height: 3px;"></div>
                    <img src="Recursos/exposiciones/Exposiciones_Carso.jpg" alt="Plaza Carso" class="w-full h-20 object-cover rounded">
                    <iframe class="w-full h-28 rounded mt-1" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d120395.03535173602!2d-99.2047!3d19.440693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2021a6e3a3d09%3A0x9372e2224c033cb3!2sMuseo%20Soumaya!5e0!3m2!1ses-419!2sus!4v1746860760007!5m2!1ses-419!2sus"></iframe>
                </div>

                <!-- Plaza Loreto -->
                <div class="flex flex-col gap-1 text-neutral-400">
                    <h3 class="text-white font-semibold text-xs">Plaza Loreto</h3>
                    <p>Av. Revolución y Río Magdalena –Eje 10 Sur–, Tizapán, San Ángel, Álvaro Obregón, 01090, CDMX</p>
                    <p>Horario: Mié a lun de 10:30 a 18:30 h</p>
                    <p>T 551103 9866 | Entrada gratuita</p>
                    <div style="height: 3px;"></div>
                    <img src="Recursos/exposiciones/Exposiciones_Loreto.jpg" alt="Plaza Loreto" class="w-full h-20 object-cover rounded">
                    <iframe class="w-full h-28 rounded mt-1" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30117.591517952646!2d-99.19257!3d19.338866!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20001a914067b%3A0xdc102f9035983d67!2sMuseo%20Soumaya%20Plaza%20Loreto!5e0!3m2!1ses-419!2sus!4v1746860804345!5m2!1ses-419!2sus"></iframe>
                </div>

                <!-- Atrio -->
                <div class="flex flex-col gap-1 text-neutral-400">
                    <h3 class="text-white font-semibold text-xs">Plaza Atrio San Francisco</h3>
                    <p>Av. Hidalgo 10, Centro Histórico, Cuauhtémoc, 06010, CDMX</p>
                    <p>Horario: Mié a dom de 10:30 a 18:30 h</p>
                    <p>T 551103 9800 | Entrada gratuita</p>
                    <div style="height: 20px;"></div>
                    <img src="Recursos/exposiciones/Exposiciones_Atrio.jpg" alt="Atrio San Francisco" class="w-full h-20 object-cover rounded">
                    <iframe class="w-full h-28 rounded mt-1" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30100.00535915555!2d-99.14013!3d19.433969!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f92b59c4680d%3A0x2e2c99efbd0f4407!2sAv%20Francisco%20I.%20Madero%207%2C%20Centro%20Hist%C3%B3rico%20de%20la%20Cdad.%20de%20M%C3%A9xico%2C%20Centro%2C%20Cuauht%C3%A9moc%2C%2006000%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1746941152953!5m2!1ses-419!2smx"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Guillermo Tovar de Teresa -->
                <div class="flex flex-col gap-1 text-neutral-400">
                    <h3 class="text-white font-semibold text-xs">Casa G. Tovar de Teresa</h3>
                    <p>Valladolid 52, Roma Norte, Cuauhtémoc, 06700, CDMX</p>
                    <p>Horario:Jue, vie y sáb con cita previa</p>
                    <p>T 551103 9850 | Entrada gratuita</p>
                    <div style="height: 20px;"></div>
                    <img src="Recursos/exposiciones/Exposiciones_GTT.jpg" alt="G. Tovar de Teresa" class="w-full h-20 object-cover rounded">
                    <iframe class="w-full h-28 rounded mt-1" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30101.326322805653!2d-99.161276!3d19.426841!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff72161bacd3%3A0x53960948616a61b0!2sCasa%20Museo%20Guillermo%20Tovar%20de%20Teresa!5e0!3m2!1ses-419!2smx!4v1746940995893!5m2!1ses-419!2smx"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <!-- Leyenda final -->
        <div class="bg-neutral-950 text-neutral-400 text-center py-2 text-[10px]">
            Museo Soumaya 2025®. Todos los derechos reservados.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script>
        // Mostrar/Ocultar el menú cuando se hace clic en el icono del menú hamburguesa
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const menu = document.getElementById('menu');

        hamburgerIcon.addEventListener('click', () => {
            // Alterna la visibilidad del menú en dispositivos móviles
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>