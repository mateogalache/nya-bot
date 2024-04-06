@extends('base')

@section('content')

<div class="box-principal">
    <h1>TIENDA</h1>
    <div class="products">
        <div class="product-shop">
            <img src="{{asset('images/pink.png')}}" alt="" class="product-img" data-title="ROSA">
            <h3>ROSA</h3>
        </div>
        <div class="product-shop">
            <img src="{{asset('images/tiger.png')}}" alt="" class="product-img" data-title="TIGRE">
            <h3>TIGRE</h3>
        </div>
        <div class="product-shop">
            <img src="{{asset('images/pikachu.png')}}" alt="" class="product-img" data-title="PIKACHU">
            <h3>PIKACHU</h3>
        </div>
        <div class="product-shop">
            <img src="{{asset('images/salle.png')}}" alt="" class="product-img" data-title="LA SALLE">
            <h3>LA SALLE</h3>
        </div>
        <div class="product-shop">
            <img src="{{asset('images/salle.png')}}" alt="" class="product-img" data-title="LA SALLE">
            <h3>LA SALLE</h3>
        </div>
        <div class="product-shop">
            <img src="{{asset('images/salle.png')}}" alt="" class="product-img" data-title="LA SALLE">
            <h3>LA SALLE</h3>
        </div>
        <div class="product-shop">
            <img src="{{asset('images/salle.png')}}" alt="" class="product-img" data-title="LA SALLE">
            <h3>LA SALLE</h3>
        </div>
        <div class="product-shop">
            <img src="{{asset('images/salle.png')}}" alt="" class="product-img" data-title="LA SALLE">
            <h3>LA SALLE</h3>
        </div>
        <div class="product-shop">
            <img src="{{asset('images/salle.png')}}" alt="" class="product-img" data-title="LA SALLE">
            <h3>LA SALLE</h3>
        </div>
        <div class="product-shop">
            <img src="{{asset('images/salle.png')}}" alt="" class="product-img" data-title="LA SALLE">
            <h3>LA SALLE</h3>
        </div>
        <div class="product-shop">
            <img src="{{asset('images/salle.png')}}" alt="" class="product-img" data-title="LA SALLE">
            <h3>LA SALLE</h3>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <div class="modal-content">
        <img id="modal-img" src="" alt="">
        <h3 id="modal-title"></h3> <!-- Aquí se mostrará el título -->
    </div>
</div>

@endsection

@section('js')
<script>
    // Obtener el modal
    var modal = document.getElementById("myModal");

    // Obtener la imagen, su contenedor y el título
    var imgs = document.getElementsByClassName("product-img");
    var modalImg = document.getElementById("modal-img");
    var modalTitle = document.getElementById("modal-title");

    // Recorrer todas las imágenes y agregar el evento clic
    for (var i = 0; i < imgs.length; i++) {
        imgs[i].addEventListener("click", function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            modalTitle.innerText = this.dataset.title; // Obtener el título desde el atributo data-title

            // Aplicar estilos al título
            modalTitle.style.fontSize = "24px"; // Tamaño de fuente más grande
            modalTitle.style.marginTop = "20px"; // Margen superior
            modalTitle.style.color = "#ffffff"; // Color de texto blanco
            modalTitle.style.textAlign = "center"; // Centrar el texto
        });
    }

    // Obtener el elemento de cierre y agregar el evento clic para cerrar el modal
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none";
    };
</script>
@endsection
