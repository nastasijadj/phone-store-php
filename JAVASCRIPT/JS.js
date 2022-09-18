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
                        $(".telefoni-prikaz").empty();
                        $(".telefoni-prikaz").html(DATA);
                    }
                }
            }
        )


    })





    $(document).on('click', '#sortiraj-btn', function () {

        var sortKolona = $('#sort_sel').val();
        var ascDesc = $(this).val();

        $.ajax(
            {
                url: 'DB/sortTelefon.php',
                method: 'post',
                data: {
                    sortiranjeKolona: sortKolona,
                    ascendingDescending: ascDesc
                },

                success: function (DATA) {
                    {
                        $(".telefoni-prikaz").empty();
                        $(".telefoni-prikaz").html(DATA);

                        ascDesc == 'asc' ? $('#sortiraj-btn').attr('value', 'desc') : $('#sortiraj-btn').attr('value', 'asc');
                    }
                }
            }
        )
    })







});
