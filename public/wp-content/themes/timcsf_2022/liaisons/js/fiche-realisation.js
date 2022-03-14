var ficheRealisation =
    {

        changerImage:
            function(numImage) {
                // let responsableContacte =
                let nbImages = document.getElementsByClassName("ficheProj__petiteImage").length;
                for(let cpt=1; cpt<=nbImages; cpt++) {
                    document.getElementById("petiteImage"+cpt).classList.remove("image-active");
                }
                document.getElementById("petiteImage"+numImage).classList.add("image-active");
                let srcActuel = document.getElementById("grosseImage").src;
                let srcFinal = srcActuel.substr(0, srcActuel.lastIndexOf("_")) + "_0" + numImage + ".png";
                document.getElementById("grosseImage").src = srcFinal;
            },

        calculerNbImages:
            function() {
                let nbImages = document.getElementsByClassName("ficheProj__petiteImage").length;
                for(let cpt=1; cpt<=nbImages; cpt++) {
                    document.getElementById("petiteImage"+cpt).addEventListener("click", function(){ ficheRealisation.changerImage(cpt); });
                }
            }
    }

window.addEventListener("load", function(){ ficheRealisation.calculerNbImages(); });
