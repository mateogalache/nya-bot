@extends('base')

@section('content')
    <div style="height: 100vh;">
        <canvas id="canvas"></canvas>
    </div>
@endsection

@section('js')
    <script src="three.min.js"></script>

    <script>
        // Función para cargar scripts de manera asincrónica
        function loadScripts(urls, callback) {
            let loadedCount = 0;
            urls.forEach(url => {
                const script = document.createElement('script');
                script.src = url;
                script.async = true;
                script.onload = () => {
                    loadedCount++;
                    if (loadedCount === urls.length) {
                        callback();
                    }
                };
                script.onerror = (err) => {
                    console.error('Error loading script:', err);
                };
                document.head.appendChild(script);
            });
        }

        // Verificar si THREE está definido y luego cargar dependencias
        if (typeof THREE === 'undefined') {
            console.error('THREE is not defined');
        } else {
            // Ahora es seguro cargar GLTFLoader y OrbitControls
            loadScripts([
                'https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js',
                'https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js'
            ], function() {
                // Iniciar tu código 3D aquí
                initThreeJS();
            });
        }

        function initThreeJS() {
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('canvas') });
            renderer.setSize(window.innerWidth, window.innerHeight);

            // Cargar el modelo 3D
            const loader = new THREE.GLTFLoader();
            loader.load('/models/my_model.gltf', function (gltf) {
                scene.add(gltf.scene);
            }, undefined, function (error) {
                console.error(error);
            });

            // Configurar la iluminación
            const light = new THREE.AmbientLight(0x404040); // Luz blanca suave
            scene.add(light);
            const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
            scene.add(directionalLight);

            // Configurar la posición de la cámara
            camera.position.z = 5;

            // Añadir controles orbitales
            const controls = new THREE.OrbitControls(camera, renderer.domElement);

            // Actualizar los controles en cada cuadro
            function animate() {
                requestAnimationFrame(animate);
                controls.update();
                renderer.render(scene, camera);
            }
            animate();

            // Ajustar el tamaño del renderizador al cambiar el tamaño de la ventana
            window.addEventListener('resize', () => {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            });
        }
    </script>
@endsection
