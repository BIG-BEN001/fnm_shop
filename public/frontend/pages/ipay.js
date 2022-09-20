$('#payment_form').on('submit', function(e) {
    e.preventDefault();

    let name = $('#InputName').val();
    let email = $('#InputEmail').val();
    let mobile = $('#InputMobile').val();
    let message = $('#InputMessage').val();

    $.ajax({
        url: "/ipay",
        type: "POST",
        data: $('#payment_form').serialize(),
        success: function(response) {
            // $('#successMsg').show();
            console.log(response);
        },

    });
});