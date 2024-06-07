@extends('base')

@section('content')
    <div class="docprincipal">
        <div class="explorerDoc">
            @foreach ($index as $n => $in)
                <a href="{{route('doc',['num' =>$n])}}" style="color:black;"><p>{{$n+1 . "." . $in}}</p></a>
            @endforeach
        </div>
        <div class = "contentDoc">
            @if($num == 0)
                <h3>{{$index[$num]}}</h3>
                <p>
                    En la era digital, los asistentes virtuales se han convertido en aliados indispensables para gestionar tareas cotidianas. Estos dispositivos no solo facilitan el acceso a información, sino que también optimizan la gestión del tiempo y los recursos, integrándose de manera intuitiva en nuestras vidas diarias.
                    Nya-bot es un innovador proyecto que surge de la pasión y el interés de un grupo de estudiantes por la programación y la electrónica. Para combinar estos campos de conocimiento en una solución práctica y útil, decidimos desarrollar un asistente virtual que fuese funcional y versátil y respetase la privacidad del usuario, ya que en un mundo donde la protección de los datos personales es crucial, puede ser de gran ayuda.
                </p>
            @endif
            @if($num==1)
                <h3>{{$index[$num]}}</h3>
                <p>
                    Nya-bot es un innovador asistente virtual desarrollado con una Raspberry Pi Zero y el motor de reconocimiento de voz Vosk. Nya-bot procesa comandos de voz y responde con información, como, por ejemplo, reproducir canciones, informar sobre el tiempo, configurar alarmas, entre otras tareas multimedia.
                    Además de las capacidades del robot, hemos desarrollado una plataforma web donde los usuarios pueden crear y compartir códigos para personalizar las funciones de Nya-bot. La web incluye un apartado de comunidad para ver y utilizar los códigos desarrollados por otros usuarios, fomentando la colaboración y el intercambio de ideas.
                    Durante el desarrollo de Nya-bot nos ha permitido desarrollar nuestros conocimientos adquiridos durante la asignatura y ganar experiencia práctica en el desarrollo de hardware y software. Este proyecto demuestra que, con una simple Raspberry Pi Zero, se pueden crear soluciones tecnológicas avanzadas y personalizadas bastante divertidas y útiles.
                </p>
            @endif
            @if ($num==2)
                <h3>{{$index[$num]}}</h3>
                <p>

                </p>
            @endif
            @if($num==3)
                <h3>{{$index[$num]}}</h3>
                <p>

                </p>
                <div class="dDoc">
                    <iframe allowfullscreen width="500" height="375" loading="lazy" frameborder="0" src="https://p3d.in/e/K16EH+spin+load"></iframe>
                </div>
                <div class="dDoc">
                    <iframe allowfullscreen width="500" height="375" loading="lazy" frameborder="0" src="https://p3d.in/e/NFAdy+spin+load"></iframe>
                </div>
            @endif
            @if($num==4)
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
            @if($num==5)
                <h3>{{$index[$num]}}</h3>
                <p>
                    Como hemos dicho con este proyecto buscamos crear una comunidad y que la gente pueda compartir y utilizar funcionalidades de su Nya-bot con otros usuarios.

                    <br>Para conseguir esto hemos creado una página web que tiene 5 secciones principales: la compra del Nya-bot, crear tu código, mostrar el código, la comunidad y tu perfil.

                    <br>En la parte de la compra hemos puesto un valor de 50€ ya que es un poco más de lo que hemos gastado en hacer todo el prototipo de esta manera tendríamos un poco de beneficio, aunque no está enfocado en eso este proyecto.

                    <br>En la parte de crear código, el usuario puede escribir su código en un editor de texto tanto en C como en Python. Una vez ha escrito el código tiene que poner un título, la descripción para que otros usuarios sepan que hace ese código, la palabra clave que será la palabra que el robot detecte para activar esta funcionalidad y si quieres que el código sea público o privado. Una vez todo listo puedes escoger si publicarlo en la web, que en ese caso se pondría en la comunidad si lo has puesto público o sólo se vería en tu perfil si lo has puesto privado, o también puedes escoger enviar el código directamente a la placa, de esta manera tu código no se guardará en ningún momento en nuestro servidor y podrás mantener una privacidad completa.

                    <br>En la parte de mostrar un código, se mostrará toda la información del código que estés leyendo, además podrás copiar el código con un botón o editarlo. Una vez creas que el código y su configuración es correcta desde esta página puedes enviar el código al Nya-bot.

                    <br>En la parte de comunidad se pueden ver todos los códigos creados por los usuarios que son públicos. Podrás buscar por palabras claves si estás buscando un código en específico.

                    <br>Por último, el usuario tendrá un perfil donde podrá ver tanto su nombre de usuario como su email. También puede ver todos sus códigos creados, los cuales puede filtrar por públicos o privados.
                </p>
            @endif
            @if($num==6)
                <h3>{{$index[$num]}}</h3>
            @endif
            @if($num==7)
                <h3>{{$index[$num]}}</h3>
                <p>
                    a. Mejorar página web para hacerla más entretenida y atractiva para los usuarios. Implementar sistema de votaciones o de estrellas para valorar los códigos y así filtrar los mejores códigos. Si tus códigos son muy votados y utilizados que puedas conseguir puntos que puedes canjear en skins de esta manera fomentamos que la gente se centre en programar y divertirse con su Nya-bot más que en pagar por una skin.

                    Este sería un ejemplo de una tienda de skins y su precio en puntos en vez de por precio real:
                </p>
                <div style="display:flex;justify-content:center;"><img src="/images/doc/implementacion_1.png" style="aspect-ratio:15/9;height:15rem;"></div>
                <p>
                    b. Desde la página web que se pueda también añadir música nueva, ya que puede que la que viene por defecto no le guste al usuario, también poder cambiar las palabras y respuestas predefinidas y poder añadir nuevos chistes. En vez de sólo poder subir códigos a Nya-Bot que también se puedan subir archivos.
                </p>

            @endif
            @if($num==8)
                <h3>{{$index[$num]}}</h3>
            @endif
            @if($num==9)
                <h3>{{$index[$num]}}</h3>
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
