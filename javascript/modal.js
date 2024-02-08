
                    // obtenir el modal i la imatge
                    var modal = document.getElementById("myModal");
                    var modalImg = document.getElementById("img01");

                    // obtenir totes les imatges amb la clase "modal-trigger" i assignarles al event on click
                    var images = document.querySelectorAll(".modal-trigger");
                    images.forEach(function(image) {
                        image.onclick = function(){
                            modal.style.display = "block";
                            document.body.style.overflow = 'hidden';
                            modalImg.src = this.getAttribute('data-img');
                        }
                    });

                    //obtenir l'element <span> que tanca el modal
                    var span = document.getElementsByClassName("close")[0];

                    // Obtener el elemento modal-content
                    var modalContent = document.querySelector(".modal-content");

                    // quan es fa click al <span> (x), es tanca el modal
            
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // quan es fa click a qualsevol lloc del modal es tanda.
                    modal.onclick = function(event) {
                        if (event.target === modal || event.target === modalContent) {
                            modal.style.display = "none";
                             }
                    }
