function deleteProduct(id){
    swal({
        title: "Eliminar Producto",
        text: "¿Estas seguro de eliminar este producto?",
        icon: "warning",
        buttons: ['Cancelar','Eliminar'],
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url:`/product/${id}`,
                type: 'POST',
                data: {
                    '_token': $('meta[name=csrf-token]').attr("content"),
                    '_method': 'DELETE',

                },
                success: function(result){

                    swal("Producto Eliminado", {
                        icon: "success",
                      });
                      setTimeout(function(){
                          location.reload()
                      }, 1000);
                }

            })
        }
      });

} 
function deleteCategory(id){

  // console.log(id);
   //alert("estoy aqui");
   swal({
       title: "Eliminar Categoria",
       text: "¿Estas seguro de eliminar este producto?",
       icon: "warning",
       buttons: ['Cancelar','Eliminar'],
       dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
           $.ajax({
               url:`/category/${id}`,
               type: 'POST',
               data: {
                   '_token': $('meta[name=csrf-token]').attr("content"),
                   '_method': 'DELETE',

               },
               success: function(result){

                   swal("Categoria Eliminada", {
                       icon: "success",
                     });
                     setTimeout(function(){
                         location.reload()
                     }, 1000);
               }

           })
       }
     });

} 