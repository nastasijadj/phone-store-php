$(document).ready(function () {


    $(document).on('keyup', '#pretraga-txt', function () {

        var txt_pretraga = $(this).val();

        $.ajax(
            {
                url: 'DB/searchTelefon.php',
                method: 'post',
                data: { input: txt_pretraga },

                success: function (DATA) {
                    {
                        console.log(DATA)
                        $(".telefoni-prikaz").empty();
                        $(".telefoni-prikaz").html(DATA);
                    }
                }
            }
        )


    })








});
