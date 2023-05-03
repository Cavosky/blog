$(document).ready(()=>{
    $(":radio").click((event)=>{
    $.ajax({
        url:"../connect.php",
        method:"POST",
        data:{commentiUtente:document.getElementById('inv').value},

        success: (output)=> {
                $("#commenti").html(output);
                $(".btn").click(()=>{
                    $.ajax({
                          url:"../connect.php",
                          method:"POST",
                          data:{eliminaCommento:document.getElementById('com').value},

                            success: ()=> {     
                                $.ajax({
                                    url: "../connect.php",
                                    method: "POST",
                                    data: { commentiUtenteReload: document.getElementById('inv').value },

                                        success:(res)=>{
                                            $("#commenti").html(res);
                                        }
                                    
                                })                      
                            }
                          
                    });
                });
            }
        });
    });
});


function passaggioNome(email) {
    document.getElementById('mod').value = document.getElementById(email).innerHTML;
    document.getElementById('inv').value = email;
}
function commento(id) {
    document.getElementById('com').value = document.getElementById(id).value;
}