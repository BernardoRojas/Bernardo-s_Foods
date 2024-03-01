function Mostrar(){
      $.ajax({  
        type: 'GET',  
        url: '../controller/Listarproducto.php', 
        success: function(response) {
            $('#tr').html(response);
          //alert(response);  
          //content.html(response);
        }
    });
    
  }

  Mostrar();