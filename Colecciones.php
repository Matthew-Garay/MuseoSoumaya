<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Museo Soumaya</title>
    <link rel="icon" href="Recursos/sou.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/styles.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/script.js"></script>

    <style>
        .parallax {
            /* The image used */
            background-image: url('Recursos/Colecciones/colecciones.jpg');

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

        <div class="mx-auto p-4">
            <!-- Contenedor de las dos imágenes con texto desplegable -->
            <div class="space-y-8 w-full max-w-2xl mx-auto">
                <!-- Imágenes -->
                <div class="overflow-hidden shadow-2xl mx-auto w-full">
                    <img
                        src="Recursos/Colecciones/Coleccion1.jpg"
                        alt="Descripción de la imagen 1"
                        class="w-full h-auto block cursor-pointer"
                        data-target="contenedorTexto1" />
                    <div id="contenedorTexto1" class="bg-gray-100 text-gray-600 overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                        <div class="p-4">
                            <div class="max-w-3xl mx-auto leading-snug space-y-4">
                                <p>Fue un gran autodidacta, el reconocido historiador, bibliófilo, melómano, cinéfilo, agudo comentarista, promotor y defensor del patrimonio cultural iberoamericano Guillermo Tovar de Teresa, fue además un erudito contemporáneo con un profundo amor por México.</p>
                                <p>Siempre cercano al proyecto cultural de Fundación Carlos Slim, impulsó el nacimiento de Museo Soumaya y participó en el coleccionismo, curadurías, museografías, pero sobre todo en la investigación de obras virreinales, numismáticas, miniaturas, paisaje y retrato mexicanos...</p>
                                <p>Debido a la amistad entre el cronista emérito de Ciudad de México y el Ing. Carlos Slim, ante el prematuro fallecimiento de Guillermo, la familia Tovar de Teresa se acercó a Museo Soumaya para que el patrimonio cultural permaneciera reunido y en el país.<br>
                                    En 2017 se concluyó el proceso de inventario de la colección: archivo personal, biblioteca, fototeca, pinacoteca, colección de artes aplicadas y de arte popular; el destacado fondo documental de artistas mexicanos, así como sus residencias en la tradicional colonia Roma en Ciudad de México y en el estado de Zacatecas.<br>
                                    La casa museo, abierta al público desde el 20 de diciembre de 2018, ha mantenido el orden y carácter de antaño en tres ejes de conservación: a la memoria de Guillermo Tovar, al valor simbólico de los objetos reunidos y a los espacios y ambientes de los históricos inmuebles.</p>
                                <p>Entre los pintores novohispanos que se presentan en la casa porfiriana ubicada en la calle Valladolid 52 se encuentran Simón de Pereyns, Luis Lagarto, Baltazar Echave Rioja y Miguel Cabrera; también piezas de alfarería como las del taller poblano de los Gaspar Encinas o una mancerna que dialoga con el coco chocolatero que perteneciera al emperador Maximiliano de Habsburgo, así como cuadros de comedor de José Agustín Arrieta.</p>
                                <p>Su colección de herrajes –comprada directamente al pintor oaxaqueño Francisco Toledo– complementa la que ya resguardaba Museo Soumaya, adquirida en 1998 bajo su asesoría.<br>
                                    Otro importante conjunto de piezas que el especialista investigó y conservó es el de arte popular que reuniera Fernando Gamboa.</p>
                                <p>Mención especial merece el fondo documental, el que de forma sistemática hizo crecer con la transcripción de fojas de los archivos General de la Nación y de Indias, bibliotecas municipales e incluso conjuntos conventuales de diferentes estados.<br>
                                    Las investigaciones abordan gremios como los de arquitectos, ensambladores, carpinteros, plateros, batihojas, doradores, bordadores, creadores de órganos y pintores.<br>
                                    El fondo abarca desde el siglo XVI hasta la primera mitad del XX.</p>
                                <p>Sus bibliotecas están conformadas por grandes obras de la literatura universal, y se distinguen por resguardar primeras ediciones latinoamericanas.<br>
                                    Asimismo, su gran interés por su genealogía dio vida a otro vasto archivo: el que resguarda retratos y fotografías, invitaciones nupciales, bolos, cartas, además del entrañable diario recetario y cuaderno de notas escolares de Susana Ynocencia María de los Dolores de Teresa y Pesado.</p>
                                <p>Cada objeto es un documento que transmite fascinación y compromiso con la historia de nuestro país.<br>
                                    Desde Fundación Carlos Slim el compromiso es la preservación integral de la colección, su estudio y difusión, así como su digitalización, que puede consultarse sin costo desde Museo Soumaya en Plaza Carso.</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden shadow-2xl mx-auto w-full">
                    <img
                        src="Recursos/Colecciones/Coleccion2.png"
                        alt="Descripción de la imagen 2"
                        class="w-full h-auto block cursor-pointer"
                        data-target="contenedorTexto2" />
                    <div id="contenedorTexto2" class="bg-gray-100 text-gray-600 overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                        <div class="p-4">
                            <div class="max-w-3xl mx-auto leading-snug space-y-4">
                                <p>Salvo la colección del Museo Nacional de San Carlos y algunos esfuerzos de coleccionistas particulares, difícilmente se puede estudiar y admirar en México la producción artística europea de tan distintas latitudes realizada entre los siglos XIV al XVIII en los que convergen los estilos gótico, renacentista, manierista, barroco y el tránsito al neoclasicismo, etapas doradas de la Historia del arte en Occidente.</p>
                                <p>La obra más antigua en el acervo data de 1350 y pertenece a la mano de Niccolò di Ser Sozzo Tegliacci; de la escuela italiana, la colección cuenta con grandes intérpretes del Renacimiento florentino como el Maestro de San Miniato, Sandro Botticelli, Davide Ghirlandaio, Los Di Ridolfo, Bernardino di Betto conocido como Il Pinturicchio, Andrea del Sarto, Filippo Lippi y el también biógrafo Giorgio Vasari. Asimismo, magnos ejemplos de la fusión entre formas hieráticas bizantinas, preciosismo flamenco y un novedoso empleo del color están representados por pintores vénetos como Giovanni Bellini; Lorenzo Tiepolo; Jacopo Robusti, Il Tintoretto; Paolo Caliari, Il Veronese; Tiziano Vecellio y los Bassano. De impronta barroca, artistas como Orazio Gentileschi y su hija Artemisia, referente creativo y símbolo junto con Elisabetha Siriani, quienes han sido resignificadas por los estudios de género.</p>
                                <p>La escuela española está ampliamente representada por los pinceles manieristas y el color veneciano de Doménikos Theotokópoulos, el Greco; el realismo barroco de José de Ribera, El Españoleto; el misticismo de Francisco de Zurbarán, junto con la delicadeza de Bartolomé Esteban Murillo y Juan Carreño de Miranda.</p>
                                <p>En Flandes, entre los grandes intérpretes del «humanismo nórdico»: Joachim Patinir; Lucas Gassel; Peteer Baltens; Custodis; Martin de Vos y la dinastía de los Brueghel, cuya pintura costumbrista y alternativa naturalista ofreció una estimulante crónica de la época. También sobresalen los retratos de Anton van Dyck, Frans Hals, y la impronta del barroco por antonomasia de Peter Paul Rubens.</p>
                                <p>De Alemania, los Cranach, quienes destacaron por la sensualidad de sus figuras en escenas altamente simbólicas que renunciaban al paisaje y a la perspectiva.</p>
                                <p>La escuela francesa está presente con el marcado chiaroscuro de Trophime Bigot, las sugestivas atmósferas de Claude-Joseph Vernet y la impronta de Élisabeth Vigée-Le Brun.</p>
                                <p>Del gran estilo británico, algunos de los más celebrados maestros son Thomas Gainsborough, Joshua Reynolds y George Romney.</p>
                                <p>Los ejemplos más significativos de cada vertiente dialogan con los antiguos Maestros virreinales en una atmósfera azul intensa que resalta los brillos de marcos en la sala tres de la sede de Plaza Carso. La articulación en núcleos temáticos permite confrontar y destacar las diferentes cualidades plásticas de aquellos creadores que marcaron el rumbo de la historia.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden shadow-2xl mx-auto w-full">
                    <img
                        src="Recursos/Colecciones/Coleccion3.jpg"
                        alt="Descripción de la imagen 3"
                        class="w-full h-auto block cursor-pointer"
                        data-target="contenedorTexto3" />
                    <div id="contenedorTexto3" class="bg-gray-100 text-gray-600 overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                        <div class="p-4">
                            <div class="max-w-3xl mx-auto leading-snug space-y-4">
                                <p>La nutrida colección de escultura europea de los siglos XIX y XX da cuenta del paso del Romanticismo hacia la Modernidad. Mármoles, terracotas, yesos, bronces y pasta de vidrio abrevan en temas mitológicos, históricos y literarios en franca libertad creadora. Figuras de cuerpo entero, bustos e inéditos fragmentos permiten transitar de las formas equilibradas del estilo academicista hacia una exploración de mayor expresividad. Obras de gusto neoclásico de artistas como Louis-Ernest Barrias, Paul Dubois, Jean-Baptiste Carpeaux y Albert-Ernest Carrier-Belleuse dialogan con volúmenes de corte romántico como <em>Amor secreto</em> atribuible a Antonio Rossetti, así como las controvertidas e incisivas caricaturas de algunos miembros del parlamento francés: <em>las Celebridades del justo medio</em> de Honoré Daumier.</p>
                                <p>A partir del ecuador del siglo XIX, la consolidada burguesía optó por nuevos formatos. Si bien la estatuaria siguió en el aliento simbólico en las ciudades, la escultura en reducidos formatos permitió el análisis del movimiento, el vacío, la sombra…</p>
                                <p>A los caballos de Edgar Degas le siguieron bailarinas y bañistas que se fundieron en bronce después de su muerte. El yeso monumental de la <em>Venus victoriosa</em> explora los procesos creativos de Auguste Renoir.</p>
                                <p>El nuevo discurso plástico llegó con la revolución inaugurada por el padre de la escultura moderna: Auguste Rodin. La gliptoteca de Fundación Carlos Slim comenzó en 1992 con la disruptiva <em>Máscara del hombre de la nariz rota</em>. De manera constante se han integrado una a una, obras de todos los materiales y de todas las etapas creativas del maestro.</p>
                                <p>El acervo ha sido cuidadosamente estudiado por el investigador John L. Tancock, quien escribió: <em>El Museo Soumaya nos permite apreciar sobre todo la fecundidad y la enorme variedad de la obra del escultor durante los más de 50 años de actividad.</em> También se han dado cita críticas las voces plurales de François Blanchetière, Aline Magnien, Diane Tytgat, Agustín Arteaga, Cheryl Hartup, Richard Aste, John Zarobell, Soumaya Slim Domit… Recientemente, Jérôme Le Blay revisitó el fondo para completar su estudio enciclopédico, que por primera vez busca redimensionar la obra rodiniana. <em>La amplitud, la variedad y la extensión en el tiempo de esta colección, que sigue enriqueciéndose […] son tales que se hizo imprescindible para el Comité Rodin hacer un inventario de estas obras</em>, afirmó el especialista.</p>
                                <p>Entre quienes interpretaron el espíritu rebelde, simbólico y anticonformista del maestro, Camille Claudel, artista por derecho propio, está presente con obras emblemáticas como <em>Las conversadoras</em>, <em>La ola</em> o <em>El vals</em>. Por su parte, Émile-Antoine Bourdelle da cuenta de una búsqueda hacia la estilización y geometrización que formó a las nuevas generaciones de vanguardia.</p>
                                <p>Desde la sala Julián y Linda Slim de Museo Soumaya en la sede de Plaza Carso, se reúne bajo un mismo techo y en un espacio libre de columnas –reto de ingeniería–, la colección más amplia de Auguste Rodin fuera de Francia. Como si se tratara de un bosque de mármol y bronce, sin interruptores se aprecian los cuatro perfiles de las formas. La techumbre desvelada, única en permitir la entrada de los rayos solares, ofrece la oportunidad de apreciar el juego de luces y sombras en atmósferas que comprometen al espectador activo a emprender un recorrido propio, crítico y en libertad.</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="overflow-hidden shadow-2xl mx-auto w-full">
                    <img
                        src="Recursos/Colecciones/Coleccion4.png"
                        alt="Descripción de la imagen 4"
                        class="w-full h-auto block cursor-pointer"
                        data-target="contenedorTexto4" />
                    <div id="contenedorTexto4" class="bg-gray-100 text-gray-600 overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                        <div class="p-4">
                            <div class="max-w-3xl mx-auto leading-snug space-y-4">
                                <p>La nutrida colección de escultura europea de los siglos XIX y XX da cuenta del paso del Romanticismo hacia la Modernidad. Mármoles, terracotas, yesos, bronces y pasta de vidrio abrevan en temas mitológicos, históricos y literarios en franca libertad creadora. Figuras de cuerpo entero, bustos e inéditos fragmentos permiten transitar de las formas equilibradas del estilo academicista hacia una exploración de mayor expresividad. Obras de gusto neoclásico de artistas como Louis-Ernest Barrias, Paul Dubois, Jean-Baptiste Carpeaux y Albert-Ernest Carrier-Belleuse dialogan con volúmenes de corte romántico como <em>Amor secreto</em> atribuible a Antonio Rossetti, así como las controvertidas e incisivas caricaturas de algunos miembros del parlamento francés: <em>las Celebridades del justo medio</em> de Honoré Daumier.</p>
                                <p>A partir del ecuador del siglo XIX, la consolidada burguesía optó por nuevos formatos. Si bien la estatuaria siguió en el aliento simbólico en las ciudades, la escultura en reducidos formatos permitió el análisis del movimiento, el vacío, la sombra…</p>
                                <p>A los caballos de Edgar Degas le siguieron bailarinas y bañistas que se fundieron en bronce después de su muerte. El yeso monumental de la <em>Venus victoriosa</em> explora los procesos creativos de Auguste Renoir.</p>
                                <p>El nuevo discurso plástico llegó con la revolución inaugurada por el padre de la escultura moderna: Auguste Rodin. La gliptoteca de Fundación Carlos Slim comenzó en 1992 con la disruptiva <em>Máscara del hombre de la nariz rota</em>. De manera constante se han integrado una a una, obras de todos los materiales y de todas las etapas creativas del maestro.</p>
                                <p>El acervo ha sido cuidadosamente estudiado por el investigador John L. Tancock, quien escribió: <em>El Museo Soumaya nos permite apreciar sobre todo la fecundidad y la enorme variedad de la obra del escultor durante los más de 50 años de actividad.</em> También se han dado cita críticas las voces plurales de François Blanchetière, Aline Magnien, Diane Tytgat, Agustín Arteaga, Cheryl Hartup, Richard Aste, John Zarobell, Soumaya Slim Domit… Recientemente, Jérôme Le Blay revisitó el fondo para completar su estudio enciclopédico, que por primera vez busca redimensionar la obra rodiniana. <em>La amplitud, la variedad y la extensión en el tiempo de esta colección, que sigue enriqueciéndose […] son tales que se hizo imprescindible para el Comité Rodin hacer un inventario de estas obras</em>, afirmó el especialista.</p>
                                <p>Entre quienes interpretaron el espíritu rebelde, simbólico y anticonformista del maestro, Camille Claudel, artista por derecho propio, está presente con obras emblemáticas como <em>Las conversadoras</em>, <em>La ola</em> o <em>El vals</em>. Por su parte, Émile-Antoine Bourdelle da cuenta de una búsqueda hacia la estilización y geometrización que formó a las nuevas generaciones de vanguardia.</p>
                                <p>Desde la sala Julián y Linda Slim de Museo Soumaya en la sede de Plaza Carso, se reúne bajo un mismo techo y en un espacio libre de columnas –reto de ingeniería–, la colección más amplia de Auguste Rodin fuera de Francia. Como si se tratara de un bosque de mármol y bronce, sin interruptores se aprecian los cuatro perfiles de las formas. La techumbre desvelada, única en permitir la entrada de los rayos solares, ofrece la oportunidad de apreciar el juego de luces y sombras en atmósferas que comprometen al espectador activo a emprender un recorrido propio, crítico y en libertad.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden shadow-2xl mx-auto w-full">
                    <img
                        src="Recursos/Colecciones/Coleccion5.png"
                        alt="Descripción de la imagen 5"
                        class="w-full h-auto block cursor-pointer"
                        data-target="contenedorTexto5" />
                    <div id="contenedorTexto5" class="bg-gray-100 text-gray-600 overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                        <div class="p-4">
                            <div class="max-w-3xl mx-auto leading-snug space-y-4">
                                <p>En 1966, ya formalizada Fundación Carlos Slim y por intercesión de Guillermo Tovar de Teresa, se adquirió la cuidada y valiosa colección de Gonzalo Obregón, a sus herederos. La incorporación de pinturas, esculturas y artes aplicadas virreinales marcó la vocación y el nacimiento de Museo Soumaya en 1994.</p>
                                <p>El acervo se enriqueció en 2003 gracias a los fondos de Daniel Liebsohn y en 2017 con los de Guillermo Tovar de Teresa. Además de mantener reunidos dichos fondos, otra tarea esencial ha sido repatriar obra de este periodo, que en algún momento salió del territorio y que posteriormente se recuperó a partir de subastas públicas. Este proyecto cultural permite regresar nuestro patrimonio para su conservación, estudio y difusión. Los estilos artísticos alentados desde Europa encontraron tierra fértil en el Nuevo Mundo. Fuerza, carácter, colorido y sensibilidad de estas tierras reinterpretaron los modelos del Manierismo, del Barroco –sobrio y exuberante–, y la Transición al Neoclasicismo; se marcaron así las directrices de la estética en las posesiones de ultramar del Imperio español.</p>
                                <p>Son de especial interés las obras que narran los encuentros culturales que tuvieron lugar en Nueva España como el biombo <em>Las cuatro partes del mundo</em> de Juan Correa, que muestra un escenario en el que se miran aún con asombro Europa, África, Asia y América, así como el biombo de la Conquista, en cuyo reverso se despliega la <em>Muy Noble y Leal Ciudad de México</em>.</p>
                                <p>El arte virreinal da cuenta de un complejo mosaico cultural integrado por indígenas, mestizos, peninsulares y europeos quienes, junto a criollos, africanos, judíos y mozárabes convivieron en tierras americanas a partir del siglo XVI. Una historia compartida desde la génesis de una identidad nacional, que a 500 años del proceso de Conquista, aún apremia reconciliación.</p>
                                <p>Elocuentes testimonios de una era de altos contenidos simbólicos componen el acervo de los grandes artífices de los virreinatos americanos, sobre todo el del Reino de la Nueva España. La creación artística se desarrollaba entonces al amparo de gremios con una estructura de origen medieval de maestros, oficiales, discípulos y aprendices, que transmitían el conocimiento y la mística de las distintas labores: pintura, talla en madera y marfil, obsidiana, trabajo en oro, plata, cobre, hierro, arte plumario, enconchado, textil, estampa…</p>
                                <p>A partir de artistas europeos que fincaron residencia y escuela en nuestro territorio como Simón de Pereyns, Perines o Pérez, se dan cita Luis y Andrés Lagarto, Juan González y el también flamenco vecino de la Puebla de los Ángeles, Diego de Borgraf, con obras de carácter religioso que afirmaban los postulados del Concilio de Trento, en diálogo con alegorías y retratos del poder civil. De la sobriedad de José Juárez al esplendor Barroco de Juan Correa y Cristóbal de Villalpando, hasta la mesura de trazos y rostros dulces de Miguel Cabrera, Nicolás Enríquez y José de Páez en las postrimerías del siglo XVIII, ya bajo la directriz de la casa de Borbón.</p>
                                <p>Lienzos como el primer paisaje documentado en estas tierras, el <em>Paseo de la Viga</em>, obra de Pedro Villegas; el interior de un obraje de Carlos López y la entrada triunfal a Puebla del virrey Agustín Ahumada de Villalón, segundo marqués de las Amarillas, de José Joaquín Magón, dan cuenta de la vida civil en Nueva España.</p>
                                <p>También se encuentran representados la Capitanía General de Guatemala con sus célebres tallas de figuras religiosas en madera estofada y policromada; los virreinatos del Perú y Nueva Granada (hoy, Colombia) con objetos litúrgicos, ceremoniales y artes aplicadas, y el Distrito del Potosí (actual Bolivia), con las primeras representaciones de tipos populares que incorporaron la moda y los nuevos estilos de vida.</p>
                                <p>Ante la mirada hipercontemporánea, el estudio permanente de la colección permite incidir, debatir y construir procesos de decolonización, en aras de fortalecer discursos identitarios que luego de los movimientos de independencia heredaron el imaginario de tres siglos luminosos en usos y costumbres a la era decimonónica.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden shadow-2xl mx-auto w-full">
                    <img
                        src="Recursos/Colecciones/Coleccion6.png"
                        alt="Descripción de la imagen 6"
                        class="w-full h-auto block cursor-pointer"
                        data-target="contenedorTexto6" />
                    <div id="contenedorTexto6" class="bg-gray-100 text-gray-600 overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                        <div class="p-4">
                            <div class="max-w-3xl mx-auto leading-snug space-y-4">
                                <p>El 27 de septiembre de 1821, hace 200 años, se reconfiguró el orden. Tras la firma del Acta de Independencia y el origen del Primer Imperio Mexicano, el mundo volteó de lleno la mirada hacia nuestro país y su construcción; ya emancipada despertó el interés de artistas y exploradores extranjeros quienes, entre 1823 y 1880, lo reconocieron y manifestaron su grandilocuencia por medio de obras literarias y visuales. La nutrida colección de Paisaje del México Independiente en Museo Soumaya. Fundación Carlos Slim da cuenta de la diversidad de vistas rurales y urbanas, así como de tipos populares que artistas viajeros y pintores representaron en sus lienzos bajo una impronta romántica. Adquiridas una a una y en su mayoría repatriadas con el fin de emprender estudios formales para su exhibición, integraron un compendio de los autores más importantes como Jean-Baptiste-Louis, segundo barón Gros, Daniel Thomas Egerton, Johan Moritz Rugendas, Auguste Löhr y Conrad Wise Chapman… quienes representaron las cumbres del Popocatépetl, el Iztaccíhuatl, el Pico de Orizaba, el Nevado de Toluca y Zacatecas. Asimismo, lugares emblemáticos como el Camino Tierra Adentro o el Valle de México y Chapultepec. Muchos de estos pintores organizaron o integraron expediciones científicas que dan cuenta del pasado mesoamericano; sus imágenes resultan un capítulo fundamental para la arqueología y etnografía nacional.</p>
                                <p>Dentro de este fondo destacan también las escenas militares que artistas como Carl Nebel o Paul-Léon Jazet realizaron de las intervenciones norteamericana (1846-1848) y francesa (1864-1867). Por su parte, Édouard Pingret y Eugenio Landesio tuvieron residencia como catedráticos de la Academia de San Carlos; entre los discípulos de la primera clase de paisaje en el continente americano se encuentran Salvador Murillo, Luis Coto y Maldonado y José María Velasco, quienes desarrollaron gran habilidad para la representación de entornos naturales y costumbristas.</p>
                                <p>A mediados del siglo XIX los valores de los modelos de nación –republicanos y conservadores– se vieron reflejados en los pinceles del catalán Pelegrín Clavé y Felipe Santiago Gutiérrez, quienes con influjo neoclásico cambiaron el rumbo del retrato en la sociedad mexicana. De las escuelas regionales destacan José Agustín Arrieta, José Escudero y Espronceda, Sacramento Espinosa y José María Estrada. Mención especial merece el pintor de pueblo Hermenegildo Bustos, quien de manera realista y con una profunda mirada psicológica, retrató a los vecinos de Purísima del Rincón, Guanajuato. El acervo de Museo Soumaya cuenta con 8 óleos estudiados por la crítica de arte Raquel Tibol. La colección también presenta pinceles anónimos que siguen la línea estilística de Clavé; ejemplo de ello es <em>Rosita Alamán</em>. Copiosos son los retratos de familia entre los que sobresalen los Gutiérrez, los Jáuregui y los Antuñano. Asimismo, destaca un extenso compendio de <em>Muerte Niña</em>.</p>
                                <p>La colección de retrato se complementa con los fondos de miniaturas de Daniel Liebsohn realizadas por María de Jesús Ponce de Ybarrán, Antonio Tomasich y Haro, Francisca Salazar y Francisco Cabrera, entre otros. A decir de Carlos Monsiváis, <em>el universo en una nuez</em>, pintadas al gouache sobre láminas de marfil, retratan a militares, rostros de damas, caballeros, niños y familias; algunas de estas imágenes fueron en ocasiones resguardadas en un estuche finamente decorado, que en un principio fue utilizado para proteger daguerrotipos y ambrotipos, o en medallones que conservaban al ser amado cerca del corazón como uno de los lugares favoritos de lo íntimo.</p>
                                <p>Todas estas expresiones artísticas, en conjunto con los archivos y bibliotecas de Guillermo Tovar de Teresa y del Centro de Estudios de Historia de México, forman parte de la colección de siglo XIX y dan cuenta del contexto que, tras la lucha armada independentista conformaba el proyecto de nación, al tiempo que definieron la identidad de los mexicanos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden shadow-2xl mx-auto w-full">
                    <img
                        src="Recursos/Colecciones/Coleccion7.png"
                        alt="Descripción de la imagen 7"
                        class="w-full h-auto block cursor-pointer"
                        data-target="contenedorTexto7" />
                    <div id="contenedorTexto7" class="bg-gray-100 text-gray-600 overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                        <div class="p-4">
                            <div class="max-w-3xl mx-auto leading-snug space-y-4">
                                <p>Parte nodal de la vocación de Fundación Carlos Slim ha sido repatriar obra mexicana, cuyo retorno permite la investigación y el disfrute por todos los públicos. Periodo de definición nacional, la colección da cuenta de las diversas exploraciones estéticas que se llevaron a cabo en nuestro territorio durante el siglo pasado y las que ocurrieron, allende las fronteras, en América Latina.</p>
                                <p>El paisaje como género desvela las raíces de la tierra mexicana. Campos, ríos, montañas y volcanes en los pinceles de José María Velasco sentaron las bases para una tradición de largo aliento. Le siguen las modernas pinceladas impresionistas de Joaquín Clausell y Francisco Romano Guillemín, para culminar con las vistas aéreas realizadas a bordo de un helicóptero por Gerardo Murillo, Dr. Atl.</p>
                                <p>Desde París y Nueva York los movimientos artísticos de avanzada dieron paso a la Primera Vanguardia latinoamericana: el Muralismo, en la llamada Escuela Mexicana de Pintura. Del proyecto vasconcelista para plasmar la Revolución, Museo Soumaya conserva obras de caballete –algunas de las cuales sirvieron como estudio para proyectos murales– que se abrieron a la denuncia social o a la exaltación de nuestras raíces mesoamericanas. En trazos vigorosos de experimentación plástica se aprecian dibujos, acuarelas y pasteles en pequeño formato del Diego Rivera ilustrador y sus calcas para el mural <em>Pesadilla de Guerra, sueño de paz</em>. De José Clemente Orozco se resguardan óleos tanto mexicanos como de su estancia en los Estados Unidos.</p>
                                <p>Sin duda, de los tres grandes, David Alfaro Siqueiros es el mejor representado dentro del acervo. Destaca la diversidad de técnicas y materiales en sus obras tempranas –ejercicios plásticos del Taller Experimental neoyorquino que sentó las bases del postorialismo abstracto–. En su obra posterior se distingue el carácter incendiario y la sed de justicia social del soldado-artista que lo llevaron al encierro en el Palacio Negro de Lecumberri. Desde la Tallera, la colección resguarda sus piezas para el ambicioso proyecto <em>La marcha de la humanidad en América Latina hacia el Cosmos. Miscelánea y Ciencia</em>. Este fondo dialoga con cuatro murales en generoso comodato: el mosaico de doble vista <em>Río Juchitán</em>, última obra de Diego Rivera, realizada entre 1953 y 1956; de Alfaro Siqueiros, <em>La tierra como el agua, el agua como la tierra nos pertenece</em> (1959) junto con <em>Zapata</em> (1966), y <em>Paisaje</em> (1964) de Dr. Atl, quien lo realizó en Cuernavaca a los 88 años y ya sin la pierna derecha.</p>
                                <p>De la siguiente generación se dan cita Alfredo Ramos Martínez, Roberto Montenegro, Raúl Anguiano y Jorge González Camarena con obras que enaltecen los rasgos de nuestra mexicanidad. Mención especial merece la colección de autorretratos mexicanos del ingeniero y mecenas Marte R. Gómez, obsequio de los artistas en 1946, en ocasión de su quincuagésimo cumpleaños. Adquiridos directamente a su familia en 2003, 38 de los 40 dibujos integran el acervo.</p>
                                <p>Desde su fundación en 1994, Museo Soumaya recibe a sus visitantes con sendos murales de Rufino Tamayo: <em>Naturaleza muerta</em> y <em>El día y la noche</em>, pintados en 1954 para la farmacia y el restaurante de la tienda Sanborns que se encontraba en la esquina que forman José María Lafragua y el Paseo de la Reforma.</p>
                                <p>Del siguiente periodo artístico se conserva obra de Juan Soriano, Pedro Coronel, Francisco Toledo y otros exponentes de la llamada Ruptura, como se conoce al grupo que abandonó los temas nacionalistas y, más allá de la cortina del nopal, trazó una búsqueda hacia la abstracción. Marysole Wörner Baz donó a Fundación Carlos Slim en 2014 su colección de más de 900 piezas, entre las que destacan sus obras pictóricas, gráficas y sus esculturas móviles.</p>
                                <p>En un juego de espejos, también se encuentran representadas las vanguardias latinoamericanas con los coloridos óleos del argentino Benito Quinquela Martín y el brasileño Emiliano di Cavalcanti. Se aprecia además al chileno Matta y no podía faltar el fulgurante ingenio del colombiano Fernando Botero.</p>
                                <p>El fondo se completó con la donación del archivo personal de la crítica de arte Raquel Tibol en 2015. Desde el aspecto teórico, los valiosos documentos de la investigadora enriquecen la lectura de las colecciones y de los procesos histórico-estéticos de México y América Latina.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden shadow-2xl mx-auto w-full">
                    <img
                        src="Recursos/Colecciones/Coleccion8.png"
                        alt="Descripción de la imagen 8"
                        class="w-full h-auto block cursor-pointer"
                        data-target="contenedorTexto8" />
                    <div id="contenedorTexto8" class="bg-gray-100 text-gray-600 overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                        <div class="p-4">
                            <div class="max-w-3xl mx-auto leading-snug space-y-4">
                                <p>Los acervos de Fundación Carlos Slim nacieron en 1976 con la adquisición del 60 % de la Fábrica Galas de México por Grupo Carso. Así comenzó una era en la que se invirtió en equipos de conversión e impresión de rotograbado y acabado. En uno de los almacenes quedaron olvidados desde los años setenta –en que la fotografía sustituyó el uso de pinturas– materiales, maquinaria, óleos y placas fotográficas que daban cuenta de todos los procesos para la elaboración del arte del calendario, y que hoy se estudian como arqueología industrial. Aquellos óleos y cromos marcaron la etapa moderna en la publicidad y la versificación de una propuesta estética quizá incluso más cercana y con mayor penetración que la Escuela Mexicana de Pintura, que también ha sido resignificada por los movimientos de migrantes latinoamericanos, sobre todo chicanos, en los Estados Unidos; fomentaron así la construcción de identidad nacional.</p>
                                <p>El fondo, que pertenecía a la imprenta del empresario santanderino Santiago Galas Arce –originalmente ubicada en la calle 16 de septiembre en el centro de Ciudad de México–, retomó la herencia de la cigarrera mexicana El Buen Tono, desde su emblemático edificio de ladrillos emplazado en el número 121 de la calzada San Antonio Abad. Cada objeto da testimonio del proceso cromolitográfico que utilizó la técnica del fotograbado, que constaba primero de placas de vidrio en positivo y negativo, y después de acetato, con el modelo de color CMYK (cian, magenta, amarillo y negro por sus siglas en inglés) que permitían la transferencia o impresión de imágenes en offset.</p>
                                <p>La nutrida colección abarca de 1930 a 1970 y se integra también por impresos, etiquetas, dibujos, gouaches y óleos; testimonios de negocios, algunos extintos y otros que siguen en el imaginario latinoamericano como Cigarrera La Moderna, las refresqueras Coca-Cola, Pepsico y Bimbo; General Popo, Goodrich-Euzkadi, las cerveceras entonces mexicanas Cuauhtémoc-Moctezuma y Modelo, así como la antigua destilería José Cuervo, entre muchos más. Convertidos en calendarios, plasmaron la diversidad cultural de nuestro país y reinterpretaron el estilo que permeó la publicidad en el mundo y que emulaba el glamour de Hollywood con las pin-up girls o chicas de calendario.</p>
                                <p>Artistas como Jesús de la Helguera, Jorge González Camarena, Eduardo Cataño, Luis Améndolla, Armando Drechsler, Aurora Gil, Antonio Gómez R., Humberto Limón, Angelina de Barthe, Josep Renau, Jaime Sadurní y otros más incursionaron en la publicidad y crearon obras –tanto de línea como exclusivas– para la difusión de productos que también se convertirían en un acompañamiento de la vida cotidiana al ser plasmados en diversos objetos como charolas, portavasos y abanicos. De las mujeres que colaboraron con la empresa, el acervo cuenta con imágenes publicitarias de modelos infantiles capturadas por Elodia Portal Munive, quien fue la primera mujer en estudiar fotografía en el Instituto Cinematográfico, y quien coordinó el Estudio Galas de 1955 hasta 1979.</p>
                                <p>Imágenes religiosas, personajes históricos o leyendas de la Época de Oro del cine nacional convivieron con estampas humorísticas y deportivas, así como con retratos de mujeres y hombres ataviados con los trajes regionales creados por el periodista, pintor, historietista y diseñador de modas Ramón Valdiosera (1918-2017).</p>
                                <p>Los calendarios eran obsequiados a la fiel clientela de las grandes cerveceras, refresqueras o compañías automotrices y llanteras, pero también por los negocios de las entonces recién consolidadas clases medias durante el llamado «Milagro Mexicano»: talleres de todo tipo, mercados, vinaterías, cremerías, tiendas misceláneas, recauderías o farmacias. Colgados en la intimidad del hogar, daban cuenta de las tradiciones, alimentos, vestimenta, leyendas y lugares icónicos del país.</p>
                                <p>Mención aparte merece el archivo Miguel Espinosa. A principios del siglo XX, Zacatecas presumía de una amplia oferta litográfica. Diversos negocios imprimían trabajos académicos y políticos. Las tarjetas postales de fines del siglo XIX son precursoras de la publicidad, el diseño y la gráfica moderna. Sobresalen las primeras tiras cómicas o las diminutas tarjetas eróticas para anunciar cigarros, junto con el primer logotipo para la Cervecería Cuauhtémoc, o la china poblana y el charro que promocionaban la sal de uvas Picot.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden shadow-2xl mx-auto w-full">
                    <img
                        src="Recursos/Colecciones/Coleccion9.png"
                        alt="Descripción de la imagen 9"
                        class="w-full h-auto block cursor-pointer"
                        data-target="contenedorTexto9" />
                    <div id="contenedorTexto9" class="bg-gray-100 text-gray-600 overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                        <div class="p-4">
                            <div class="max-w-3xl mx-auto leading-snug space-y-4">
                                <p>Desde los bosquejos y los trabajos preparatorios hasta las obras terminadas, la amplia colección de dibujos sobre papel de Museo Soumaya. Fundación Carlos Slim abarca del siglo XVI hasta el XX en temas religiosos, mitológicos, históricos, paisajísticos; la exploración de la figura humana o el gesto plástico.</p>
                                <p>La riqueza de las técnicas empleadas como grafito, gouache, acuarela, pluma, punta de plata y sanguina, entre otras, da cuenta de todos los aspectos de la pintura final: el claroscuro, la posición de los personajes y la organización del fondo, así como la presencia de la retícula que evidencia las proporciones con miras a la realización de pinturas en escalas mayores.</p>
                                <p>Adquiridos uno a uno desde 1994 a la fecha, ya sea como paso previo a una obra final o con la autonomía de la disciplina, de la época renacentista la colección exhibe obra de Giulio Pippi, Il Romano; Aurelio Luini; Antonio Allegri, Il Correggio y Giovanni Antonio Bazzi, Il Sodoma, de quien sobresale el carboncillo de 142.9 x 181 cm para la composición <em>La Madonna dei Calzolai</em>.</p>
                                <p>De los siglos XVII y XVIII, en los que hubo una predilección por la búsqueda natural y la detallada representación arquitectónica, destaca la mano del neerlandés Jan Josefsz van Goyen, los franceses François Boucher, Hubert Robert y Jean-Honoré Fragonard, y los italianos Giandomenico Tiepolo, Francesco Guardi y Giovanni Battista Piranesi. La línea rigurosa de Jacques-Louis David deja un testigo de los estudios para el grupo escultórico <em>La coronación de Napoleón</em>.</p>
                                <p>De la era moderna, cuando el dibujo llegó a considerarse una obra por derecho propio, el trazo enérgico de Jean-Baptiste Carpeaux –en el registro de sus segundas nupcias que tuvieron lugar en la iglesia de la Magdalena–; el irónico de Honoré Daumier, los sensuales y modernos de Auguste Rodin y Edgar Degas… De las Vanguardias: Henri Matisse, Amedeo Modigliani, Pablo Picasso, Françoise Gilot, Edvuard Munch y Balthus, entre otros.</p>
                                <p>Debido a su naturaleza frágil y susceptible a la decoloración, los trabajos en papel se suelen exponer por periodos limitados, bajo condiciones de iluminación y temperatura controladas. Al desvelar el trazo, cada uno descubre el carácter y la parte más íntima del proceso creativo de un artista.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden shadow-2xl mx-auto w-full">
                    <img
                        src="Recursos/Colecciones/Coleccion10.jpg"
                        alt="Descripción de la imagen 10"
                        class="w-full h-auto block cursor-pointer"
                        data-target="contenedorTexto10" />
                    <div id="contenedorTexto10" class="bg-gray-100 text-gray-600 overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                        <div class="p-4">
                            <div class="max-w-3xl mx-auto leading-snug space-y-4">
                                <p>Entendida como un documento visual histórico-artístico-antropológico-social- óptico-científico, cuya conservación está ligada al conocimiento de su materialidad y al entendimiento de la complejidad de sus estructuras, la fotografía en Museo Soumaya abarca un marco temporal que va desde las primeras técnicas hasta las imágenes argénticas obtenidas por revelado y su evolución durante el muy visual siglo XX. La colección está integrada por una amplia variedad de materiales y dispositivos para capturar imágenes. Los procesos más representativos de la historia de la fotografía análoga conforman este nutrido acervo: daguerrotipos, papeles a la sal, ambrotipos, ferrotipos, heliografías, impresiones a la albúmina, colodiones, fotomecánicas, platinotipos, plata sobre gelatina, fotolitos, placas secas, películas de acetato de celulosa, transparencias, negativos y microfilmes. Estos conviven con cámaras de pequeño y mediano formato, cámaras de procesos, prensas, maquinaria, visores estereoscópicos y linternas mágicas.</p>
                                <p>La colección está formada por distintos fondos que se complementan con la adquisición una a una de imágenes y artefactos históricos-estéticos. Todos dialogan con los documentos visuales del Centro de Estudios de Historia de México. Fundación Carlos Slim.</p>
                                <p>En el archivo visual de la imprenta Galas de México destacan las imágenes publicitarias y maquinaria que dan cuenta de todo el procedimiento cromolitográfico. Del Estudio Galas a cargo de Elodia Portal Munive, de 1955 hasta 1979, el acervo atestigua el paso del calendario pintado al fotografiado.</p>
                                <p>Del fondo Numismático destacan retratos en papel albuminado como el de Manuela García-Teruel Manso, realizado por Valleto y Cía., que se empleó para el diseño de papel moneda. Por su parte, en la colección Daniel Liebsohn se aprecia obra de la Compañía Industrial Fotográfica (CIF), así como escenas de tauromaquia, retrato de estudio, histórico y funerario, en el que sobresale el género de la Muerte Niña.</p>
                                <p>El fondo Gutierre Tibón contempla retratos, paisajes europeos, imágenes de figurillas mesoamericanas y fotolitos de la edición <em>Aventuras en las cinco partes del mundo</em>. El de Guadalupe Rivera se integra por material que gira en torno a la Escuela Mexicana de Pintura y la vida de su padre: Diego Rivera.</p>
                                <p>En el acervo de Gilbran Khalil Gibran destacan obras en platinotipo y platino-paladio, de superficies mate y ambientes de ensueño, capturadas por fotógrafos pictorialistas como Edward Steichen, George W. Harting, Frederick H. Evans y Fred Holland Day, quien fuera amigo y mentor del pensador de origen libanés.</p>
                                <p>La cuidada fototeca de Guillermo Tovar de Teresa rebasa las 30 mil imágenes con los ejemplos de las primeras técnicas, como los papeles salados del artista francés François Aubert. Destacan los diferentes formatos de vistas urbanas, paisajes, monumentos y registros arqueológicos capturados por la lente de artistas como Désiré Charnay y Alfred Maudslay. Pueden apreciarse escenas de trabajos de instalación del ferrocarril de William H. Jackson, Alfred Briquet y Gove & North, así como retratos de personajes históricos, la aristocracia y los tipos populares mexicanos de François Merille, André Adolphe Eugène Disdéri, Cruces y Campa, Valleto y Cía., entre muchos otros. Sobresalen también las vistas estereoscópicas del Zócalo tomadas durante los festejos de la llegada de los emperadores Maximiliano de Habsburgo y Carlota de Bélgica en 1864, junto con una serie de papeles albuminados de gran calidad producidos entre 1875 y 1880, que dan cuenta de la arquitectura y muestran el arreglo de los escaparates, adornos y anuncios de los comercios. De igual forma, son importantes las ediciones de Julio Michaud y las obras de Edward Weston, Tina Modotti, Guillermo Kahlo y Hugo Brehme. Mención especial merece el extensivo registro del Centro Histórico capitalino, punto de denuncia y conservación de <em>La Ciudad de los Palacios: crónica de un patrimonio perdido</em>.</p>
                                <p>El acervo se completa con los registros visuales del patrimonio cultural de Fundación Carlos Slim. De la placa al formato digital en la mirada de fotógrafos como Michel Zabé y Javier Hinojosa, entre otros. Asimismo, se hacen capturas de las exposiciones, actividades y eventos que desde 1994 constituyen parte de la memoria museológica.</p>
                            </div>
                        </div>
                    </div>
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
        // Obtener todas las imágenes que tienen un data-target
        const imagenes = document.querySelectorAll("img[data-target]");

        imagenes.forEach((imagen) => {
            imagen.addEventListener("click", () => {
                // Obtener el id del contenedor de texto asociado
                const targetId = imagen.getAttribute("data-target");
                const contenedorTexto = document.getElementById(targetId);

                // Cambiar el estado del contenedor de texto (abrir o cerrar)
                const isOpen = contenedorTexto.classList.contains("max-h-[2000px]");
                contenedorTexto.classList.toggle("max-h-0", isOpen);
                contenedorTexto.classList.toggle("max-h-[2000px]", !isOpen);
            });
        });
    </script>
</body>

</html>