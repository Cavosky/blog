$(document).ready(() => {
    $("#segui").click(() => {
        if (!$("#segui").is(':checked')) {
            $.ajax({
                url: "connect.php",
                method: "POST",
                data: { smettiSegui: document.getElementById('id').value }
            });
        };
        if ($("#segui").is(':checked')) {
            $.ajax({
                url: "connect.php",
                method: "POST",
                data: { segui: document.getElementById('id').value }
            });
        }
    });   

    $("#edizione").change(() => {        
        $.ajax({
            type: "post",
            url: "connect.php",
            data: { stampavolumi: $('#edizione').find(":selected").val(), id: window.location.search.split("=")[1]},
            success: (response) => {
                $("#volumi").html(response)
            }
        });
    })
    $("#edizione").trigger("change")
});

