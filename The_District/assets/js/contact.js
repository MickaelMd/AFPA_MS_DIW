document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");
  const fields = ["nom", "prenom", "email", "telephone", "demande"];

  function validateField(fieldId, errorId, validationFn, errorMessage) {
    const field = document.getElementById(fieldId);
    const errorField = document.getElementById(errorId);

    if (validationFn(field.value.trim())) {
      errorField.textContent = "";
      return true;
    } else {
      errorField.textContent = errorMessage;
      return false;
    }
  }

  const validations = {
    nom: {
      validate: (value) => value !== "",
      errorMessage: "Le nom est obligatoire.",
    },
    prenom: {
      validate: (value) => value !== "",
      errorMessage: "Le prénom est obligatoire.",
    },
    email: {
      validate: (value) =>
        /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value),
      errorMessage: "Veuillez entrer un email valide.",
    },
    telephone: {
      validate: (value) =>
        /^(\+?\d{1,3}\s?)?([1-9](\s?\d\s?){8}|\d{10,14})$/.test(value),
      errorMessage: "Le téléphone doit comporter uniquement des chiffres.",
    },
    demande: {
      validate: (value) => /^.{1,1000}$/.test(value),
      errorMessage:
        "La demande est obligatoire et est limitée à 1000 caractères.",
    },
  };

  fields.forEach((fieldId) => {
    const field = document.getElementById(fieldId);
    field.addEventListener("blur", () =>
      validateField(
        fieldId,
        `error-${fieldId}`,
        validations[fieldId].validate,
        validations[fieldId].errorMessage
      )
    );
  });

  form.addEventListener("submit", function (event) {
    let isValid = true;

    fields.forEach((fieldId) => {
      const validationPassed = validateField(
        fieldId,
        `error-${fieldId}`,
        validations[fieldId].validate,
        validations[fieldId].errorMessage
      );
      if (!validationPassed) isValid = false;
    });

    if (!isValid) {
      event.preventDefault();
    }
  });
});
