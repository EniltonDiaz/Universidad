$(document).ready(function(){
	$("#libros").on('click', function(){
     $.getJSON("http://enilton9.mipropia.com/Practica6/API/Biblioteca/titulo/lista")
     .done(function(datos){
     	$.each(datos , function(indice, valor){
     		$("#resultadosLibros ul").append("<li>" +valor.titulo+ "</li>");
     	} )
     });
	});
	$("#autores").on('click', function(){
      $.getJSON("http://localhost/SegundoParcial/Practica10/API/Biblioteca/autor/lista")
      .done(function(datos){
        $("#resultadosAutor ul").html("");
        $.each(datos , function(indice , valor){
           $("#resultadosAutor ul").append("<li>" +valor.autor+ "</li>");
        });
      });
	});
});