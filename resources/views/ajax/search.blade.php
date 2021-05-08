<script type=text/javascript>

$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("form").submit(function (event) {
        event.preventDefault();
    });

    $("#search").on("input", validarNombre);
    $(".btnEnviar").on("click", resetearPassword);

    function validarNombre(event) {
        nombre = event.target.value;

        $.ajax({
            type: "POST",
            url: "{{ route('administrador.ajaxRequest') }}",
            data: { name: nombre },
            success: function (data) {
                let nombres = JSON.parse(data);
                registros = document.querySelectorAll("tbody tr");
                registros.forEach((registro) => {
                    registro.style.display = "none";
                    $.each(nombres, function (i, item) {
                        if (
                            registro.childNodes[2].textContent ==
                            nombres[i].name
                        ) {
                            registro.style.display = "table-row";
                        }
                    });
                });
            },
        });
    }

    function resetearPassword(event) {
        alumno = event.target.id;

       console.log(alumno);
        $.ajax({
            type: "PUT",
            url: "{{ route('administrador.ajaxRequestUpdate') }}",
            data: { id: alumno },
            success: function (data) {
                alert(data);
            },
        });
    }
});
</script>



