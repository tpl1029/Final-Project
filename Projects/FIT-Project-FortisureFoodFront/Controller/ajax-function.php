<script>

function ajaxSubmit(firstname, lastname, address, city, state, zip, phone, email, level) {
    //ajax function
    $.ajax({

        type: "POST",
        url: "./Controller/ajax_person.php",
        data: "firstName=" + firstname + "&lastName=" + lastname + "&address=" + address + "&city=" + city + "&state=" + state + "&zip=" + zip + "&phone=" + phone + "&email=" + email + "&level=" + level,
        success: function(data){
            $("#success").html(data);
            document.getElementById("firstName").value = "";
            document.getElementById("lastName").value = "";
            document.getElementById("address").value = "";
            document.getElementById("city").value = "";
            document.getElementById("state").value = "";
            document.getElementById("zip").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("email").value = "";
            document.getElementById("level").value = "";
        },

        error: function(data){
            alert('An error occured. Please try again.');
        },

    });
}

</script>