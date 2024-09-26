 // Disable form submission if there are invalid fields
 (function () {
    'use strict'

    var form = document.getElementById('tourForm');
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add('was-validated');
    }, false);
  })();
