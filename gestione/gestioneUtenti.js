$(document).ready(()=>{
    $(":radio").click(()=>{
      
    $.ajax({
        url:"../connect.php",
        method:"POST",
        data:{commentiUtente:document.getElementById('inv').value},

        success: (output)=> {
                $("#commenti").html(output);
                $("button").click(()=>{
                    $.ajax({
                          url:"../connect.php",
                          method:"POST",
                          data:{eliminaCommento:document.getElementById('com').value}
                    });
                });
            }
        });
    });
});
/*
document.querySelectorAll("input[type=\"radio\"]").forEach( el => {
    el.addEventListener("click", () => {
        fetch("../connect.php", {method: "POST", body: {commentiUtente: document.getElementById("inv").value}})
            .then( res => {console.log({res}); return res} )
            .then( res => res.text() )
            .then( text => {
                console.log({text})
                document.getElementById("commenti").innerHTML = text
            } )
            .finally( () => {
                Array.from(
                    document.getElementById("commenti")
                        .getElementsByTagName("button")
                ).forEach( el => el.addEventListener( () => fetch(
                    "../connect.php",
                    {
                        method: "POST",
                        body: {eliminaCommento: document.getElementById("com").value}
                    }
                )))

            })
    })
})

console.log({
    el: document.querySelectorAll("input[type=\"radio\"]")
})
*/