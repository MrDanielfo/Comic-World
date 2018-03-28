
function initMap() {
        // formas de hacer más corto el código con las coordenadas
        var latLng = {
            lat: parseFloat(opciones.latitud),
            lng: parseFloat(opciones.longitud)
        };

        // Create a map object and specify the DOM element for display.
        map = new google.maps.Map(document.getElementById('mapa'), {
        center: latLng,
        zoom: parseInt(opciones.zoom),
        styles: [
            {elementType: 'geometry', stylers: [{color: '#F2F2F2'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#525252'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#ffffff'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#ffffff'}]
            },
            {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#ffffff'}]
            },
            {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#3DC490'}]
            },
            {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#ffffff'}]
            },
            {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#efbf19'}]
            },
            {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{color: '#f2f2f2'}]
            },
            {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{color: '#ffffff'}]
            },
            {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#CCB90E'}]
            },
            {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#ffffff'}]
            },
            {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#ffffff'}]
            },
            {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{color: '#2f3948'}]
            },
            {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{color: '#ffffff'}]
            },
            {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#14D4F2'}]
            },
            {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#000000'}]
            },
            {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#ffffff'}]
            }
        ]
        });

        var marker = new google.maps.Marker({
            position: latLng,
            map: map,
            title: 'Comic World'
        });
  }


$ = jQuery.noConflict();

$(document).ready(function(){

    var contador = 0;
    $('.hamburger-menu a').on('click', function(){
        contador++;
        if(contador == 1) {     
            $('.hamburger-menu a i').removeClass("icono-barra").addClass("tache");
            $('div.contenedor-wide').animate({
                top: "+=500px"
            });
            
        }else{ 
            $('.hamburger-menu a i').removeClass("tache").addClass("icono-barra");
            $('div.contenedor-wide').animate({
                top: "-=500px"
            },800);
            contador = 0;
        }
        console.log(contador);
        
        $('div.mobile-header').slideToggle(800);
  
    });
    // cambio de colores 

    // etiqueta origen

        var origen_importado = $('span.origen:contains("Importado")');
        var origen_nacional = $('span.origen:contains("Nacional")');
        if(origen_importado) {
            origen_importado.addClass("importado");
        }

        if(origen_nacional) {
            origen_nacional.addClass("nacional");
        }

    //  etiqueta estado 

        var estado_coleccion = $('span.estado:contains("Colección")');
        if(estado_coleccion) {
            estado_coleccion.addClass('coleccion');
        }

        var estado_descuentos = $('span.estado:contains("Descuentos")');
        if(estado_descuentos){
            estado_descuentos.addClass('descuentos');
        }

        var estado_oferta = $('span.estado:contains("En Oferta")');
        if(estado_oferta){
            estado_oferta.addClass('oferta');
        }

        var estado_ultimos = $('span.estado:contains("Últimos Ejemplares")');
        if(estado_ultimos){
            estado_ultimos.addClass('ultimos');
        }

        var estado_edicion = $('span.estado:contains("Edición Limitada")');
        if(estado_edicion){
            estado_edicion.addClass('edicion');
        }

}); 