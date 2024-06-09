@extends('base')

@section('content')
    <div class="docprincipal">
        <h2 style="position:absolute; top:2rem;">DOCUMENTACIÓN</h2>
        <div class="explorerDoc">
            @foreach ($index as $n => $in)
                <a href="{{route('doc',['num' =>$n])}}" style="color:black;"><p>{{$n+1 . "." . $in}}</p></a>
            @endforeach
        </div>
        <div class = "contentDoc">
            @if($num==0)
                <h3>BIENVENIDO/A A NYA-BOT</h3>
                <img class="imgportada" src="images/doc/portada-nya.png">
                <h4>Hecho por Adrià Andrade, Sira Gabari, Sergi Navarro y Mateo Galache</h4>
            @endif
            @if($num == 1)
                <h3>{{$index[$num]}}</h3>
                <p>
                    En la era digital, los asistentes virtuales se han convertido en aliados indispensables para gestionar tareas cotidianas. Estos dispositivos no solo facilitan el acceso a información, sino que también optimizan la gestión del tiempo y los recursos, integrándose de manera intuitiva en nuestras vidas diarias.
                    <br>Nya-bot es un innovador proyecto que surge de la pasión y el interés de un grupo de estudiantes por la programación y la electrónica. Para combinar estos campos de conocimiento en una solución práctica y útil, decidimos desarrollar un asistente virtual que fuese funcional y versátil y respetase la privacidad del usuario, ya que en un mundo donde la protección de los datos personales es crucial, puede ser de gran ayuda.
                </p>
            @endif
            @if($num==2)
                <h3>{{$index[$num]}}</h3>
                <p>
                    Nya-bot es un innovador asistente virtual desarrollado con una Raspberry Pi Zero y el motor de reconocimiento de voz Vosk. Nya-bot procesa comandos de voz y responde con información, como, por ejemplo, reproducir canciones, informar sobre el tiempo, configurar alarmas, entre otras tareas multimedia.
                    <br>Además de las capacidades del robot, hemos desarrollado una plataforma web donde los usuarios pueden crear y compartir códigos para personalizar las funciones de Nya-bot. La web incluye un apartado de comunidad para ver y utilizar los códigos desarrollados por otros usuarios, fomentando la colaboración y el intercambio de ideas.
                    <br>Durante el desarrollo de Nya-bot nos ha permitido desarrollar nuestros conocimientos adquiridos durante la asignatura y ganar experiencia práctica en el desarrollo de hardware y software. Este proyecto demuestra que, con una simple Raspberry Pi Zero, se pueden crear soluciones tecnológicas avanzadas y personalizadas bastante divertidas y útiles.
                </p>
            @endif
            @if ($num==3)
                <h3>{{$index[$num]}}</h3>
                <p>
                    Para las funciones más importantes del robot, hablar y escuchar al usuario, usamos herramientas de código abierto.
                    <br>Para el habla fue fácil encontrar un Text-to-speech ya que existen muchos de código abierto y que son fáciles de instalar, al final nos decantamos por usar Pico.
                    <br>El speech-to-text fue mucho más difícil, estuvimos probando muchas opciones que o eran muy complejas o no funcionaban correctamente en nuestra placa, nos dimos cuenta que al usar la Raspberry Zero muchas de las opciones no eran posibles ya que no es un ordenador lo suficientemente potente, un ejemplo de esto fue con Whisper de OpenAI, este fue el primer programa que conseguimos que funcionase pero los problemas que hubo es que tardaba demasiado en dar una respuesta y entender que se había dicho y al usar el modelo de lenguaje más pequeño entendía las palabras mal.
                    <br>Para resolver este problema decidimos investigar más otros STT, encontramos Kaldi pero nos pareció muy complejo así que decimos usar Vosk que usa la tecnología de Kaldi y se nos hizo más fácil de entender.
                    <br>El siguiente problema que nos encontramos fue que parecía que no todos los streams de audio se estaban interpretando por que la tasa de acierto en las palabras era muy bajo, encontramos algo que usaba Vosk también llamado “nerd-dictation” que lo usaba para escribir por ti sin tener que usar el teclado así que decidimos instalarlo en la raspberry y modificar su código para hacer que se comporte de la manera que queremos y hacer esto fue un éxito, conseguimos hacer un Speech-to-text que interpretaba la mayoría de palabras bien y las enseñaba en pantalla una a una, con esto ya todas las funciones del robot necesarias funcionaban correctamente solo faltaría añadir códigos de acciones que se ejecuten al decir ciertas palabras.
                </p>
            @endif
            @if($num==4)
                <h3>{{$index[$num]}}</h3>
                <p>
                    Los principales componentes que forman el robot son los siguientes:
                </p>
                <p><strong>RaspBerry Pi Zero: </strong>microordenador utilizado como la base del sistema para el control y la ejecución de funciones. Este modelo de Raspberry Pi fue elegido tras valorar su coste, su capacidad de procesamiento y su tamaño. </p>
                <div class="dDoc">
                    <img src="images/doc/rasp.png" width="450" height="300" alt="">
                </div>
                <p><strong>OLED SSD1306:  </strong>pantalla a través de la que se muestra el feedback visual del robot. De nuevo, se eligió este modelo debido a su coste y tamaño, y a su compatibilidad con la Raspberry. </p>
                <div class="dDoc">
                    <img src="images/doc/pantalla.png" width="200" height="200" alt="">
                </div>
                <p>
                    También se valoró incluir chips de input y output de audio, ya que la idea inicial era la de crear un aparato compacto que incluyera todos los componentes necesarios para interactuar con el asistente virtual de la manera más sencilla y natural posible. Sin embargo, tras evaluarlo, se decidió finalmente no añadir estos componentes dentro del prototipo, debido a la complejidad añadida de integración y el aumento del costo. En su lugar, se dejó una salida de audio estándar para permitir al usuario conectar micrófonos y altavoces externos.
                    <br>La idea para el prototipo era la de crear una caja que contuviera todos los componentes electrónicos de manera segura y accesible. Se quería obtener un diseño funcional y estético, con forma de gato para darle al robot una apariencia amigable y creativa.
                    <br>También se buscaba ofrecer al usuario la posibilidad de personalizar su robot, tanto a través de los elementos decorativos como prácticos. Como uno de los propósitos del proyecto es el de animar a los usuarios a desarrollar su asistente y añadir nuevas funcionalidades, una de las ideas a futuro es la de ofrecer distintos modelos y tamaños que permitan incluir nuevos componentes según las necesidades de los usuarios.
                    <br>Para comenzar, se hizo un diseño experimental del prototipo utilizando 3d Max. Como referencia, se usaron imágenes generadas por IA y se estudiaron otros aparatos similares que existen en el mercado, como Alexa de Amazon o Rabit R1 de Teenage Engineering.
                </p>
                <div class="dDoc">
                    <img src="images/doc/nya_1.png" width="500" height="300" alt="">
                </div>
                <p>
                    A partir de este modelo inicial, se hicieron pruebas físicas con un modelo construido en cartón, para comprobar la colocación de los componentes electrónicos y ajustar las medidas.
                </p>
                <div class="dDoc">
                    <img src="images/doc/nya_2.png" width="450" height="300" alt="">
                </div>
                <p>
                    Tras comentarlo en clase y recibir feedback del diseño, se retocó el modelo en 3ds Max para ajustar la estructura del robot, con la intención de imprimir el resultado en 3D. Finalmente esto no fue posible debido a la falta de tiempo, por lo que se creó un modelo físico utilizando cartón y goma Eva para poder presentar el producto final.
                </p>
                <div class="dDoc">
                    <iframe allowfullscreen width="500" height="375" loading="lazy" frameborder="0" src="https://p3d.in/e/K16EH+spin+load"></iframe>
                    <iframe allowfullscreen width="500" height="375" loading="lazy" frameborder="0" src="https://p3d.in/e/NFAdy+spin+load"></iframe>
                </div>
                <div class="dDoc">
                </div>
            @endif
            @if($num==5)
                <h3>{{$index[$num]}}</h3>
                <p>
                    Con Nya-bot vienen integrados unas funcionalidades que son las siguientes:
                        <br> &nbsp; &nbsp;&nbsp;&nbsp; <strong>a. Tirar Moneda</strong> <br>
                    Se escoge un numero aleatorio entre 0 y 1, si sale 0 Nya-Bot mostrará y dirá cara y si sale uno hará lo mismo, pero con cruz. Mientras se escoge si es cara o cruz, por la pantalla se muestra una moneda que da vueltas, este es el script completo en Python:
                </p>
                <!-- AÑADIR TIRAR MONEDA  -->
                @php
                    $code = App\Models\Codes::where('title','doc1')->first();
                @endphp
                <pre class="codeDoc">
                    <code >
                        {{$code->code}}
                    </code>
                </pre>
                <p>
                    &nbsp; &nbsp;&nbsp;&nbsp; <strong>b. Hora</strong> <br>
                    Nya-Bot dirá en voz alta la hora actual que tiene la Raspberry gracias al componente Date, este es el script completo:
                </p>
                <!-- AÑADIR HORA  -->
                @php
                    $code = App\Models\Codes::where('title','doc2')->first();
                @endphp
                <pre class="codeDoc">
                    <code >
                        {{$code->code}}
                    </code>
                </pre>
                <p>
                    &nbsp; &nbsp;&nbsp;&nbsp; <strong>c. Despertador/Alarma</strong> <br>
                    Nya-Bot estará constantemente comprobando en un json donde se guardan fechas si concuerda con la actual, si concuerda con la actual sonará una alarma predefinida, este es el script que se encuentra en el script de ejecución ya que debe estar constantemente comprobando:
                </p>
                <!-- AÑADIR DESPERTADOR  -->
                @php
                    $code = App\Models\Codes::where('title','doc3')->first();
                @endphp
                <pre class="codeDoc">
                    <code >
                        {{$code->code}}
                    </code>
                </pre>
                <p>
                    &nbsp; &nbsp;&nbsp;&nbsp; <strong>d. Recordatorio</strong> <br>
                    El recordatorio funciona de la misma manera que la alarma, pero en vez de solo sonar la alarma también sonará el mensaje, en este caso un recordatorio que el usuario haya guardado.
                </p>
                <!-- AÑADIR RECORDATORIO  -->
                <p>
                    &nbsp; &nbsp;&nbsp;&nbsp; <strong>e. Chistes </strong> <br>
                    Hay 10 chistes guardados en un Json, Nya-Bot escoge uno aleatoriamente y lo dice en voz alta, este es el script completo:
                </p>
                <!-- AÑADIR CHISTES  -->
                @php
                    $code = App\Models\Codes::where('title','doc5')->first();
                @endphp
                <pre class="codeDoc">
                    <code >
                        {{$code->code}}
                    </code>
                </pre>
                <p>
                    &nbsp; &nbsp;&nbsp;&nbsp; <strong>f. Música </strong> <br>
                    Hay 10 canciones guardadas en una carpeta, Nya-Bot escoge una al azar y la hace sonar, este es el script completo:
                </p>
                <!-- AÑADIR MUSICA  -->
                @php
                    $code = App\Models\Codes::where('title','doc6')->first();
                @endphp
                <pre class="codeDoc">
                    <code >
                        {{$code->code}}
                    </code>
                </pre>
                <p>
                    &nbsp; &nbsp;&nbsp;&nbsp; <strong>g. Palabras y respuestas predeterminadas   </strong> <br>
                    Hemos añadido diferentes palabras que al detectarlas tenga una respuesta para estas. Estas son las palabras y sus correspondientes respuestas:
                </p>
                <!-- AÑADIR RESPUESTAS  -->
                @php
                    $code = App\Models\Codes::where('title','doc7')->first();
                @endphp
                <pre class="codeDoc">
                    <code >
                        {{$code->code}}
                    </code>
                </pre>
                <p>
                    &nbsp; &nbsp;&nbsp;&nbsp; <strong>h. Tiempo   </strong> <br>
                    Nya-Bot te dice el tiempo que hace en tu localización a través de la Api de Open Weather Map con el siguiente script:
                </p>
                <!-- AÑADIR TIEMPO  -->
                @php
                    $code = App\Models\Codes::where('title','doc8')->first();
                @endphp
                <pre class="codeDoc">
                    <code >
                        {{$code->code}}
                    </code>
                </pre>
            @endif
            @if($num==6)
                <h3>{{$index[$num]}}</h3>
                <p>
                    Como hemos dicho con este proyecto buscamos crear una comunidad y que la gente pueda compartir y utilizar funcionalidades de su Nya-bot con otros usuarios.

                    <br>Para conseguir esto hemos creado una página web que tiene 5 secciones principales: la compra del Nya-bot, crear tu código, mostrar el código, la comunidad y tu perfil.

                    <br>En la parte de la compra hemos puesto un valor de 50€ ya que es un poco más de lo que hemos gastado en hacer todo el prototipo de esta manera tendríamos un poco de beneficio, aunque no está enfocado en eso este proyecto.

                    <br>En la parte de <a href="/create">crear código</a>, el usuario puede escribir su código en un editor de texto tanto en C como en Python. Una vez ha escrito el código tiene que poner un título, la descripción para que otros usuarios sepan que hace ese código, la palabra clave que será la palabra que el robot detecte para activar esta funcionalidad y si quieres que el código sea público o privado. Una vez todo listo puedes escoger si publicarlo en la web, que en ese caso se pondría en la comunidad si lo has puesto público o sólo se vería en tu perfil si lo has puesto privado, o también puedes escoger enviar el código directamente a la placa, de esta manera tu código no se guardará en ningún momento en nuestro servidor y podrás mantener una privacidad completa.

                    <br>En la parte de <a href="/codeshow/15">mostrar un código</a> , se mostrará toda la información del código que estés leyendo, además podrás copiar el código con un botón o editarlo. Una vez creas que el código y su configuración es correcta desde esta página puedes enviar el código al Nya-bot.

                    <br>En la parte de <a href="/community">comunidad</a> se pueden ver todos los códigos creados por los usuarios que son públicos. Podrás buscar por palabras claves si estás buscando un código en específico.

                    <br>Por último, el usuario tendrá un <a href="/profile">perfil</a> donde podrá ver tanto su nombre de usuario como su email. También puede ver todos sus códigos creados, los cuales puede filtrar por públicos o privados.
                </p>
            @endif
            @if($num==7)
                <h3>{{$index[$num]}}</h3>
                <p>
                    Una vez claros los componentes del proyecto estos interactúan entre ellos para que todo funcione correctamente.
                    <br>El robot principalmente detectará las palabras del usuario y las comparará con las palabras claves guardadas en la raspeverry. Si detecta una de estas ejecutará el código correspondiente. Para enviar estos códigos a la Raspberry se hará a través de la página web como se ha explicado en su apartado. El servidor se concentrará a través de SSH a la placa y le enviará el código y la palabra clave correspondiente.
                    <br>Este es un esquema de cómo funciona:
                </p>
                <div class="esquemaDoc">
                    <img src="images/doc/esquema.png" alt="">
                </div>

            @endif
            @if($num==8)
                <h3>{{$index[$num]}}</h3>
            @endif
            @if($num==9)
                <h3>{{$index[$num]}}</h3>
                <p>
                    a. Mejorar página web para hacerla más entretenida y atractiva para los usuarios. Implementar sistema de votaciones o de estrellas para valorar los códigos y así filtrar los mejores códigos. Si tus códigos son muy votados y utilizados que puedas conseguir puntos que puedes canjear en skins de esta manera fomentamos que la gente se centre en programar y divertirse con su Nya-bot más que en pagar por una skin.

                    Este sería un ejemplo de una tienda de skins y su precio en puntos en vez de por precio real:
                </p>
                <div style="display:flex;justify-content:center;"><img src="/images/doc/implementacion_1.png" style="aspect-ratio:13/9;height:15rem;"></div>
                <p>
                    b. Desde la página web que se pueda también añadir música nueva, ya que puede que la que viene por defecto no le guste al usuario, también poder cambiar las palabras y respuestas predefinidas y poder añadir nuevos chistes. En vez de sólo poder subir códigos a Nya-Bot que también se puedan subir archivos.
                </p>
                <p>
                    c. Por la parte más del prototipo nos gustaría que en el futuro el robot pudiera moverse ya que ahora mismo es un bot estático. Podríamos añadir motores e ruedas en un futuro para que el robot pudiera desplazarse .
                </p>
                <p>
                    d. Una futura implementación bastante ambiciosa pero bastante realista seria añadir la capacidad de reconocimiento facial. Gracias a la integración de cámaras como la esp32 cam podríamos añadirlas al bot y hacer una interacción más segura y personalizable. Que pudiera generar respuestas dependiendo de la persona que tenga delante.  También nos ayudaria a augmentar la seguridad y la privacidad de bot ya que sería una buena medida de seguridad para iniciar el robot.
                </p>
            @endif
            @if($num==10)
                <h3>{{$index[$num]}}</h3>
                <p>
                    En estos meses hemos obtenido conclusiones que creemos que en el futuro nos pueden ayudar tanto en el mundo laboral como en el ámbito personal.
                    <br>Una de las conclusiones más valiosas fue saber trabajar en equipo, ya que tenía una fecha límite y cada integrante del grupo debía organizarse para hacer las cosas a tiempo.
                    <br>Otra conclusión que sacamos con este proyecto es la importancia que tiene el prototipo, en nuestro caso el prototipo lo diséñanos en los últimos dias y esto nos perjudico un poco. Gracias a este proyecto nos hemos dado cuenta que deberíamos hacer más diseños y prototipos durante los meses del proyecto, aunque sean muy básicos.
                    <br>Además, aprendimos la importancia de la planificación. Una planificación adecuada desde el inicio del proyecto es crucial para evitar contratiempos y asegurar que todas las fases del desarrollo se completen a tiempo. Esto incluye no solo el diseño sino también la prueba del prototipo.
                    <br>Otro aprendizaje clave fue la gestión del tiempo. Aprendimos a manejar nuestro tiempo de manera eficiente, estableciendo prioridades y plazos para cada tarea.
                    <br>La adaptabilidad y la resolución de problemas también fueron habilidades esenciales que desarrollamos. A lo largo del proyecto, nos enfrentamos a diversos desafíos técnicos. Gracias a la capacidad de adaptarnos y encontrar soluciones creativas nos ayudó a solucionar los problemas a tiempo.
                    <br>Finalmente, entendimos la importancia del feedback. Recibir y analizar el feedback de nuestros compañeros y profesores fue vital para mejorar el diseño y la funcionalidad de Nya-bot. Este feedback nos permitió identificar áreas de mejora y ajustar nuestras estrategias.
                    <br>En conclusión, el desarrollo de Nya-bot ha sido una experiencia enriquecedora que nos ha proporcionado valiosas lecciones y habilidades que podremos aplicar en futuros proyectos tanto académicos como profesionales.
                </p>
            @endif

            @php
                $next = $num + 1;
                $previous = $num - 1;
            @endphp
            @if($num < count($index) - 1)
                <a href="{{ route('doc',['num' => $next]) }}" class="nextDoc">{{$index[$next]}}<span class="material-symbols-outlined">chevron_right</span></a>
            @endif
            @if ($num > 0)
                <a href="{{ route('doc',['num' => $previous]) }}" class="previousDoc"><span class="material-symbols-outlined">chevron_left</span>{{$index[$previous]}}</a>
            @endif
        </div>
    </div>

@endsection




@section('js')
    <script type="module">
    /*    //Import the THREE.js library
    import * as THREE from "https://cdn.skypack.dev/three@0.129.0/build/three.module.js";
    // To allow for the camera to move around the scene
    import { OrbitControls } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/controls/OrbitControls.js";
    // To allow for importing the .gltf file
    import { GLTFLoader } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/loaders/GLTFLoader.js";

    //Create a Three.JS Scene
    const scene = new THREE.Scene();
    //create a new camera with positions and angles
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

    //Keep track of the mouse position, so we can make the eye move
    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;

    //Keep the 3D object on a global variable so we can access it later
    let object;

    //OrbitControls allow the camera to move around the scene
    let controls;

    //Set which object to render
    let objToRender = 'eye';

    //Instantiate a loader for the .gltf file
    const loader = new GLTFLoader();

    //Load the file
    loader.load(
    `/models/prototipo_modelo.gltf`,
    function (gltf) {
        //If the file is loaded, add it to the scene
        object = gltf.scene;
        scene.add(object);
    },
    function (xhr) {
        //While it is loading, log the progress
        console.log((xhr.loaded / xhr.total * 100) + '% loaded');
    },
    function (error) {
        //If there is an error, log it
        console.error(error);
    }
    );

    //Instantiate a new renderer and set its size
    const renderer = new THREE.WebGLRenderer({ alpha: true }); //Alpha: true allows for the transparent background
    renderer.setSize(window.innerWidth, window.innerHeight);

    //Add the renderer to the DOM
    document.getElementById("container3D").appendChild(renderer.domElement);

    //Set how far the camera will be from the 3D model
    camera.position.z = objToRender === "dino" ? 25 : 500;

    //Add lights to the scene, so we can actually see the 3D model
    const topLight = new THREE.DirectionalLight(0xffffff, 1); // (color, intensity)
    topLight.position.set(500, 500, 500) //top-left-ish
    topLight.castShadow = true;
    scene.add(topLight);

    const ambientLight = new THREE.AmbientLight(0x333333, objToRender === "dino" ? 5 : 1);
    scene.add(ambientLight);

    //This adds controls to the camera, so we can rotate / zoom it with the mouse
    if (objToRender === "dino") {
    controls = new OrbitControls(camera, renderer.domElement);
    }

    //Render the scene
    function animate() {
    requestAnimationFrame(animate);
    //Here we could add some code to update the scene, adding some automatic movement

    //Make the eye move
    if (object && objToRender === "eye") {
        //I've played with the constants here until it looked good
        object.rotation.y = -3 + mouseX / window.innerWidth * 3;
        object.rotation.x = -1.2 + mouseY * 2.5 / window.innerHeight;
    }
    renderer.render(scene, camera);
    }

    //Add a listener to the window, so we can resize the window and the camera
    window.addEventListener("resize", function () {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
    });

    //add mouse position listener, so we can make the eye move
    document.onmousemove = (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    }

    //Start the 3D rendering
    animate();*/

    </script>
@endsection
