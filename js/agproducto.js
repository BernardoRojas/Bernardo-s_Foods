function Guardar(){
  let nombre = document.getElementById("nombreproductoid").value;
    let precio = document.getElementById("precioid").value;
    //alert('Hola bienvenido : '+ nombre +" "+ precio);
    
    $.ajax({  
      type: 'POST',  
      url: '../controller/Guardarproducto.php', 
      data: { 
        nombrep: nombre,
        preciop: precio,
      },
      success: function(response) {
        alert(response);  
        //content.html(response);
      }
  });
  
}