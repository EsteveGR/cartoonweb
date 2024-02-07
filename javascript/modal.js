
                    // Obtener el modal y la imagen
                    var modal = document.getElementById("myModal");
                    var modalImg = document.getElementById("img01");

                    // Obtener todas las imágenes con la clase "modal-trigger" y asignarles un evento onclick
                    var images = document.querySelectorAll(".modal-trigger");
                    images.forEach(function(image) {
                        image.onclick = function(){
                            modal.style.display = "block";
                            document.body.style.overflow = 'hidden';
                            modalImg.src = this.getAttribute('data-img');
                        }
                    });

                    // Obtener el elemento <span> que cierra el modal
                    var span = document.getElementsByClassName("close")[0];

                    // Cuando se hace clic en el <span> (x), se cierra el modal
                    span.onclick = function() {
                        modal.style.display = "none";
                        document.body.style.overflow = 'auto';
                    }
