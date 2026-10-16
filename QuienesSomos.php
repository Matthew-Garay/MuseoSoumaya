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
            background-image: url('Recursos/enConstruccion.jpg');

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
                        ¿Quiénes somos?
                    </h1>
                    <p>Desde hace más de 25 años Museo Soumaya. Fundación Carlos Slim abrió sus puertas en el centro cultural y comercial Plaza Loreto y desde 2011 inauguró, en un proyecto de reconversión urbana y reto de ingeniería, su sede en Plaza Carso.</p>
                    <p>La institución sin fines de lucro y de entrada gratuita tiene por vocación coleccionar, investigar, conservar y difundir el patrimonio artístico e histórico de México y Europa principalmente, para compartirlo con los públicos más diversos. Es un espacio para el encuentro con las artes que difícilmente se pueden apreciar en nuestro país; su objetivo es promover el conocimiento y disfrute estético mediante exposiciones permanentes, temporales e itinerantes por toda la República Mexicana y América Latina, catálogos y publicaciones mensuales, espacios lúdicos, de reflexión y creación, conferencias, programas interactivos con el apoyo de las nuevas tecnología como RA Infinitum, realidad aumentada y virtual.</p>
                    <p>La sede de Plaza Loreto, al sur de Ciudad de México, se erige sobre una antigua fábrica de papel y cuenta con diversas exposiciones que muestran la colección de la fábrica Galas de México, cuyas imágenes viven en el imaginario nacional.</p>
                    <p>Desde diciembre de 2018, se completó un eje cultural en la histórica Colonia Roma con la Casa Guillermo Tovar de Teresa.</p>
                    <p>Entre los acervos del museo se encuentran el de Antiguos Maestros Europeos con trabajos de las escuelas italianas, flamenca, neerlandesa, francesa y españolas de los siglos XV al XVII.</p>
                    <p>El arte del siglo XIX en México se encuentra representado por creadores como Arrieta, Bustos y Velasco; de Europa se dan cita grandes artistas como Turner, Ingres, Monet, Renoir y Degas. Destaca la colección del maestro Auguste Rodin, la más importante fuera de Francia, cuyas obras junto con Van Gogh y Cézanne marcaron el advenimiento de la modernidad. El acervo artístico y documental más completo del poeta libanés Gibran Kahlil Gibran también se puede consultar de manera gratuita. Las Vanguardias mexicanas y europeas están presentes con Vlaminck, Picasso, Dalí, Alfaro Siqueiros, Rivera y Orozco.</p>
                    <p>La vocación del museo reconoce la trayectoria de mujeres artistas de las que se suman 72 creadoras y más de 100 obras: Artemisia Gentileschi; las impresionistas Berthe Morisot, Mary Cassatt, Eva Gonzalès; también Camille Claudel, Tamara de Lempicka y Leonora Carrington.</p>

                    <div class="space-y-2">
                        <button class="w-full text-left font-bold bg-gray-300 px-4 py-2" onclick="toggleSection('mision')">Misión</button>
                        <div id="mision" class="hidden px-4 py-2 text-sm">
                            <p>Compartir la colección de Fundación Carlos Slim que ofrece más de 30 siglos de arte americano y europeo, en espacios de encuentro para todos, que motiven la reflexión y el diálogo en el panorama cultural latinoamericano, mediante el compromiso y la acción social.</p>
                        </div>


                        <button class="w-full text-left font-bold bg-gray-300 px-4 py-2" onclick="toggleSection('vision')">Visión</button>
                        <div id="vision" class="hidden px-4 py-2 text-sm">
                            <p>Conservar, investigar y difundir el patrimonio cultural de Fundación Carlos Slim, a través de exposiciones permanentes, temporales e itinerantes, así como programas de inclusión, responsabilidad social y medio ambiental, educativos y de desarrollo humano, académicos y editoriales, para optimizar el entorno y la calidad de vida de nuestros visitantes a partir de la mejora continua, y así cumplir con los parámetros de excelencia internacional.</p>
                        </div>


                        <button class="w-full text-left font-bold bg-gray-300 px-4 py-2" onclick="toggleSection('carso')">Plaza Carso</button>
                        <div id="carso" class="hidden px-4 py-2 text-sm">
                            <p>Museo Soumaya de Plaza Carso se encuentra ubicado en la zona de conversión urbana llamada Nuevo Polanco. Fue inaugurado el 29 de marzo de 2011 por el entonces presidente Felipe Calderón, con la asistencia del escritor colombiano Gabriel García Márquez y de muchos otros personajes. El edificio tiene un diseño vanguardista que consiste en una brillante estructura asimétrica plateada de formas suaves, con reminiscencias a la obra escultórica de Rodin. Tiene una altura de 46 metros; está recubierto por más de 16,000 placas de aluminio hexagonales, sin más aberturas visibles que la puerta de entrada, y cuenta con 17,000 metros cuadrados de construcción. Es llamativo el hecho de que los paneles no se apoyan en el suelo ni se tocan entre sí, por lo que dan la impresión de flotar alrededor del edificio. La cubierta es semitransparente y permite que la planta superior se ilumine directamente por la luz del sol. Fue diseñado por el arquitecto mexicano Fernando Romero, con la asesoría de Ove Arup y Frank Gehry. El estilo arquitectónico ha sido comparado con el del Edificio Selfridges en Birmingham, y con el del Museo Guggenheim en Bilbao. El interior del museo está dividido en 6 plantas conectadas entre sí mediante ascensores y una rampa exterior en espiral. Generalmente, se invita a los visitantes a subir hasta la sexta planta y descender cómodamente por la rampa, ya que el museo no tienen un discurso cronológico, sino temático.</p>
                        </div>

                        <button class="w-full text-left font-bold bg-gray-300 px-4 py-2" onclick="toggleSection('loreto')">Plaza Loreto</button>
                        <div id="loreto" class="hidden px-4 py-2 text-sm">
                            <p>Museo Soumaya de Plaza Loreto se fundó en 1994. El espacio donde se encuentra actualmente fue, en el siglo XVI, parte de la encomienda del conquistador Hernán Cortés y posteriormente un molino de trigo instalado por su hijo, Martín Cortés. Con el paso de los años cambió de actividad, hasta que en el siglo XIX se constituyó como una fábrica de papel. En 1906, bajo la dirección de don Alberto Lenz, recibió el nombre de Fábrica de Papel de Loreto y Peña Pobre. En la década de los ochenta sufrió un incendio que acabó con la mayoría de las instalaciones, por lo que su operación se trasladó al estado de Tlaxcala. Esto dio pie a que, a principios de los noventa, Grupo Carso emprendiera un proyecto de conversión urbana de las ruinas de la misma para transformarla en lo que hoy es la sede del Soumaya en el sur de Ciudad de México.</p>
                        </div>

                        <button class="w-full text-left font-bold bg-gray-300 px-4 py-2" onclick="toggleSection('tovar')">Casa Guillermo Tovar de Teresa</button>
                        <div id="tovar" class="hidden px-4 py-2 text-sm">
                            <p>En la moderna colonia Roma, una típica casa porfiriana de fachada de 1910, adquirida por Guillermo Tovar de Teresa en 1995, se convirtió en su hogar hasta 2013, cuando el cronista emérito de Ciudad de México falleció. Antes de residir en ella, realizó diversas adecuaciones: se modernizaron las instalaciones sanitarias y eléctricas; se abrió un tragaluz en el vestíbulo y se amplió y techó el pasillo ajedrezado. La construcción se extendió para agregar una biblioteca y estudio personal. Después de la muerte del historiador, su hermano, nuestro primer Secretario de Cultura, Rafael Tovar de Teresa, emprendió la tarea de realizar un inventario, labor interrumpida también por su fallecimiento, y finalizada por su familia y equipos de investigadores. El acervo en unidad fue adquirido por Fundación Carlos Slim. Museo Soumaya-Casa Guillermo Tovar de Teresa abrió sus puertas en diciembre de 2019. Pasillos de memoria, nicotina, mole y tequila en los que nos convoca el arte novohispano, el variopinto escenario decimonónico, libros, y el archivo personal del también historiador interesado en el México del ayer, el de hoy y el del mañana.</p>
                        </div>
                    </div>
                </div>
                <!-- Columna derecha: multimedia -->
                <div class="space-y-6">
                    <div class="aspect-video w-full max-w-md md:max-w-sm mx-auto">
                        <iframe class="w-full h-full shadow" src="https://www.youtube.com/embed/Rllh2IugLco?si=WqjdskCHgImlGnzL" title="30 siglos de arte en Museo Soumaya" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <img src="Recursos/Interior/Interior1.jpg" alt="Interior del museo" class="w-full max-w-xs mx-auto shadow-md" />
                    <img src="Recursos/Interior/Interior2.jpg" alt="Interior del museo" class="w-full max-w-xs mx-auto shadow-md" />
                    <img src="Recursos/Interior/Interior3.jpg" alt="Interior del museo" class="w-full max-w-xs mx-auto shadow-md" />
                    <img src="Recursos/Interior/Interior4.jpg" alt="Interior del museo" class="w-full max-w-xs mx-auto shadow-md" />
                </div>
            </div>
        </div>

    </main>

    <div style="height: 50px;"></div>
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
        function toggleSection(id) {
            const el = document.getElementById(id);
            el.classList.toggle('hidden');
        }
    </script>

</body>

</html>