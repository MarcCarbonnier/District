document.addEventListener("DOMContentLoaded", function () {
  const formulaire = document.getElementById("formulaire");

  formulaire.addEventListener("submit", function (e) {
    e.preventDefault(); //évite l'envoi du fomulaire sans la verif

    //validation du formulaire
    let verif = true;
    verif += validerChamp(
      /^[a-zA-ZÀ-ÿ-\s]+$/,
      document.getElementById("nom"),
      "Veuillez saisir des caractère valide"
    );
    verif += validerChamp(
      /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/,
      document.getElementById("email"),
      "Veuillez saisir des caractères valide"
    );
    verif += validerChamp(
      /^0[1-9]([-.]?[0-9]{2}){4}$/,
      document.getElementById("tel"),
      "Veuillez saisir un numéro de téléphone valide"
    );
  });
});

function validerChamp(regex, champ, messageErreur) {
  if (!regex.test(champ.value)) {
    alert(messageErreur);
    champ.focus();
    return false;
  }
  return true;
}

