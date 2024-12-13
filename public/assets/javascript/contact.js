$(function () {
    "use strict";

    // When the form is submitted
    $('#ajax-contact').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        // Validate the form manually if needed
        var $form = $(this);
        var url = $form.attr('action'); // URL définie dans l'attribut "action" du formulaire
        var data = $form.serialize(); // Serialize form data

        // POST values in the background to the script URL
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            dataType: "json", // Expect JSON response from Symfony
            success: function (response) {
                // Handle success response
                if (response.success) {
                    $("#msgSubmit").removeClass("hidden alert-danger").addClass("alert-success").text(response.message);
                    $form[0].reset(); // Reset the form
                } else {
                    // Handle validation or other logical errors
                    $("#msgSubmit").removeClass("hidden alert-success").addClass("alert-danger").text(response.message || "Une erreur s'est produite.");
                }
            },
            error: function (xhr) {
                // Handle server errors
                let errorMessage = "Une erreur interne s'est produite.";
                if (xhr.responseJSON && xhr.responseJSON.error) {
                    errorMessage = xhr.responseJSON.error;
                }
                $("#msgSubmit").removeClass("hidden alert-success").addClass("alert-danger").text(errorMessage);
            },
        });
    });
});
