 // Fetch the form element
 var form = document.getElementById('myForm');

 // Listen for the submit event
 form.addEventListener('submit', function (event) {
     // If the form is not valid, prevent submission
     if (!form.checkValidity()) {
         event.preventDefault(); // Prevent form submission
         event.stopPropagation(); // Stop event bubbling

         // Add Bootstrap validation classes to trigger error messages
         form.classList.add('was-validated');
     }
 });