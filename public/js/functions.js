function deleteProduct(id){

   // console.log(id);
    //alert("estoy aqui");
    swal({
        title: "borrar",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: ['cn','el'],
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

                    swal("que se borreeeeeeeee", {
                        icon: "success",
                      });
                      setTimeout(function(){
                          location.reload()
                      }, 1000);
                }

            })


          swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
          });
        } else {
          swal("Your imaginary file is safe!");
        }
      });

} 
