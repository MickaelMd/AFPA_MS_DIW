document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("sign_up_form");
  const fields = [
    "reset_email",
    "reset_code",
    "reset_pass",
    "reset_pass_confirm",
  ];

  function validateField(fieldId, errorId, validationFn, values, errorMessage) {
    const field = document.getElementById(fieldId);
    const errorField = document.getElementById(errorId);

    if (validationFn(field.value.trim(), values)) {
      errorField.textContent = "";
      return true;
    } else {
      errorField.textContent = errorMessage;
      return false;
    }
  }

  const validations = {
    reset_email: {
      validate: (value) =>
        /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value),
      errorMessage: "Veuillez entrer un email valide.",
    },

    reset_code: {
      validate: (value) => /^^/.test(value),
      errorMessage: "Le code est non valide.",
    },

    reset_pass: {
      validate: (value) => /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(value),
      errorMessage:
        "Le mot de passe doit contenir au moins une lettre, un chiffre, et avoir au moins 8 caractères.",
    },
    reset_pass_confirm: {
      validate: (value, values) => value === values.sign_pwd,
      errorMessage: "Les mots de passe doivent être identiques.",
    },
  };

  form.addEventListener("submit", function (event) {
    let isValid = true;
    const values = {};

    fields.forEach((fieldId) => {
      values[fieldId] = document.getElementById(fieldId).value.trim();
    });

    fields.forEach((fieldId) => {
      const validationFn = validations[fieldId].validate;
      const errorMessage = validations[fieldId].errorMessage;
      const validationPassed = validateField(
        fieldId,
        `error-${fieldId}`,
        validationFn,
        values,
        errorMessage
      );
      if (!validationPassed) isValid = false;
    });

    if (!isValid) {
      event.preventDefault();
    }
  });

  fields.forEach((fieldId) => {
    const field = document.getElementById(fieldId);
    field.addEventListener("blur", () => {
      const values = {};
      fields.forEach((id) => {
        values[id] = document.getElementById(id).value.trim();
      });
      validateField(
        fieldId,
        `error-${fieldId}`,
        validations[fieldId].validate,
        values,
        validations[fieldId].errorMessage
      );
    });
  });
});
