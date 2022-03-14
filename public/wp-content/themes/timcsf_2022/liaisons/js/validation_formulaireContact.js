        const form = document.getElementById("form");
        const inputDestinataire = document.getElementById("responsablesSelect");
        const inputSujet = document.getElementById("sujet");
        const inputNom = document.getElementById("nom");
        const inputCourriel = document.getElementById("courriel");
        const inputMessage = document.getElementById("message");


        const preventDefault = (e) => {
            e.preventDefault();
        }

        const validation = (event) => {
            //patterns de chaque input du formulaire
            const pattern = new RegExp("[a-zA-ZÀ-ÿ -]+");
            const patternDestinataire = new RegExp("\b(sylvain|michel|pascal|benoît)\b");
            const patternCourriel = new RegExp("^[a-zA-Z0-9][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[@][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[.][a-zA-Z]{2,}$");
            const patternMessage = new RegExp("^[a-zA-Z0-9_.!@#$%^&*()?-]+$");

            //On trim les données entrées par l'utilisateur pour pouvoir les valider
            const userNomInput = inputNom.value.trim();
            const userCourrielInput = inputCourriel.value.trim();
            const userSujetInput = inputSujet.value.trim();
            const userMessageInput = inputMessage.value.trim();

            //On envoit les infos de l'input présentement modifié
            switch(event.target.id) {
                case "destinataire":
                    validerInput("destinataire",userDestinataireInput, inputDestinataire, objJSONMessagesErreur, patternDestinataire);
                    break;
                case "sujet":
                    validerInput("sujet",userSujetInput ,inputSujet, objJSONMessagesErreur, patternMessage);
                    break;
                case "nom":
                    validerInput("nom",userNomInput ,inputNom, objJSONMessagesErreur, pattern);
                    break;
                case "courriel":
                    validerInput("courriel",userCourrielInput ,inputCourriel, objJSONMessagesErreur, patternCourriel);
                    break;
                case "message":
                    validerInput("message",userMessageInput ,inputMessage, objJSONMessagesErreur, patternMessage);
                    break;
                default:
                // code block
            }
        };

        const validerInput = (nomChamps, userInput, inputChamps, objJSONMessagesErreur, pattern) => {
            //Constantes des champs de l'input
            const inputDiv = inputChamps.parentElement;
            const erreurDiv = (inputChamps === document.getElementById("message")) ? inputDiv.querySelector("textarea") : inputDiv.querySelector("input");
            const erreurP = inputDiv.querySelector("p");

            if(userInput !== ""){
                if(!pattern.test(userInput)) {
                    erreurDiv.classList.add("erreur");
                    erreurP.innerHTML = objJSONMessagesErreur[nomChamps].erreurs.motif;
                }else{
                    erreurDiv.classList.remove("erreur");
                    erreurP.innerHTML = "";
                }
            } else{
                erreurDiv.classList.add("erreur");
                erreurP.innerHTML = objJSONMessagesErreur[nomChamps].erreurs.vide;
            }
        }

        inputNom.addEventListener("blur", validation);
        inputCourriel.addEventListener("blur", validation);
        inputDestinataire.addEventListener("blur", validation);
        inputSujet.addEventListener("blur", validation);
        inputMessage.addEventListener("blur", validation);
        form.addEventListener("submit", preventDefault);

