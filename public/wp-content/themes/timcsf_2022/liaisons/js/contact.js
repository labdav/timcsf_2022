var contact =
    {

        choisirResponsable:
            function(nom) {
                // let responsableContacte =
                console.log(nom)
                document.getElementById("responsablesSelect").value = nom;
            },

        test:
            function() {
                console.log("chargé");
            }
    }

window.addEventListener("load", function(){ contact.test(); });
document.getElementById("contact__boutonSylvain").addEventListener("click", function(sylvain){ contact.choisirResponsable(); });
document.getElementById("contact__boutonMichel").addEventListener("click", function(michel){ contact.choisirResponsable(); });
document.getElementById("contact__boutonPascal").addEventListener("click", function(pascal){ contact.choisirResponsable(); });
document.getElementById("contact__boutonBenoît").addEventListener("click", function(benoit){ contact.choisirResponsable(); });