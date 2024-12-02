$(document).ready(function () {

    // Date picker
    $('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        //startDate: new Date()
    });

    // Set the placeholder to the current date 
    // var today = new Date();
    // var day = String(today.getDate()).padStart(2, '0');
    // var month = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-indexed 
    // var year = today.getFullYear();
    // var formattedDate = day + '-' + month + '-' + year;
    // $('.datepicker').attr('placeholder', formattedDate);

    // Attach submit event handler to all forms with the class 'booking'
    $(".booking").on("submit", function (e) {
        e.preventDefault(); // Prevent default form submission

        // Capture form data
        const formData = $(this).serializeArray();
        let message = "New Booking Request:\n"; // Initialize the message
        let whatsappNumber = "";

        // Format form data for WhatsApp
        formData.forEach((field) => {
            if (field.name === "sendTo") {
                // Extract the WhatsApp number from the hidden field
                whatsappNumber = field.value;
            } else {
                // Add other fields to the message, with bold field names
                message += `*${field.name}*: ${field.value}\n`;
            }
        });

        if (!whatsappNumber) {
            alert("WhatsApp number is missing!");
            return;
        }

        // Redirect to WhatsApp API
        //const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;
        const whatsappURL = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(message)}`;

        window.open(whatsappURL, "_blank");
    });

});