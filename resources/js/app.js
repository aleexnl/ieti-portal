import "./bootstrap";
function cancelEdit(textName, textDesc, value) {
    $(".nameInput").replaceWith(
        "<p id='name' value='" + value + "'>" + textName + "</p>"
    );
    $(".descInput").replaceWith(
        "<p id='description' class='overflow-hidden overflow-ellipsis whitespace-nowrap w-36' value='" +
            value +
            "'>" +
            textDesc +
            "</p>"
    );
    $(".confirm-button").css("display", "none");
    $(".cancel-button").css("display", "none");
    $(".terms > tbody > tr > td .delete-button").css("display", "block ");
    $(".terms > tbody > tr > td .edit-button").css("display", "block");
}
function notification(type, text) {
    if (type == "success") {
        $(".errores")
            .append(`<div class="w-full bg-green-200 p-3 border-2 border-green-400 rounded-lg">
            <p>${text}</p>
         </div>`);
    } else if (type == "error") {
        $(".errores")
            .append(`<div class="w-full bg-red-200 p-3 border-2 border-red-400 rounded-lg">
        <p>${text}</p>
     </div>`);
    }

    setTimeout(function(){
        $(".errores").empty();
    }, 3000)
}
$(function () {
  
    // Redirect to the selected table cell
    $(".terms > tbody > tr[data-href]").on("click", function () {
        window.location = $(this).data("href");
        return false;
    });
    //Open row controls
    $(".terms > tbody > tr > td .toggler").on("click", function (event) {
        event.stopPropagation();
        $(this).toggleClass("rotate-180");
        $(this).closest("tr").find(".controls").toggleClass("hidden");
    });
 
    $(".terms > tbody > tr > td button.edit-button").on(
        "click",
        function (event) {
            
            event.stopPropagation();
            $(this).css("display", "none");
            $(".terms > tbody > tr > td button.delete-button").css(
                "display",
                "none"
            );
            let value = $(this).attr("value");
            let name = $("p[id='name'][value='" + value + "']").text();
            $("tr[value='" + value + "']").removeAttr("data-href");
            let description = $(
                "p[id='description'][value='" + value + "']"
            ).text();
            $("div[value='" + value + "']")
                .find("p")
                .after(
                    "<button class='secondary bg-gray-300 dark:bg-purple-200 dark:text-gray-900 my-1 w-full cancel-button' value='" +
                        value +
                        "'>Cancelar</button>"
                );
            $("div[value='" + value + "']")
                .find("p")
                .after(
                    "<button class='primary bg-gray-300 dark:bg-purple-900 dark:text-white my-1 w-full confirm-button' value='" +
                        value +
                        "'>Confirmar</button>"
                );
            $("p[id='name'][value='" + value + "']").replaceWith(
                "<input class='nameInput' value='" + name + "'></input>"
            );
            $("p[id='description'][value='" + value + "']").replaceWith(
                "<textarea class='descInput'>" + description + "</textarea>"
            );
            $("input, textarea").on("click", function (event) {
                event.stopPropagation();
            });
            $(".confirm-button").on("click", function (event) {
                event.stopPropagation();
                let data = {
                    name: $(".nameInput").val(),
                    description: $(".descInput").val(),
                };
                console.log(data);
                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    data: data,
                    url: `/admin/cursos/${value}`,
                    method: "PUT",
                }).done(() => {
                    notification("success","Curso editado correctamente")
                    console.log($("#errores"))
                    cancelEdit(name, description, value);
                }).fail(() => {

                });
            });
            $(".cancel-button").on("click", function (event) {
                event.stopPropagation();
                notification("error","No se ha podido editar el curso")
                cancelEdit(name, description, value);
            });
        }
    );
    // Show form to create course
    $("#add-new-term").on("click", function (event) {
        event.stopPropagation();
        $("#create-course-form").toggleClass("hidden");
        $(this).toggleClass("hidden");
    });
    // Hide form to cancel course creation
    $("#cancel-course-creation").on("click", function (event) {
        event.stopPropagation();
        $("#create-course-form").toggleClass("hidden");
        $("#add-new-term").toggleClass("hidden");
    });
    // Add course in form
    $("#add-course").on("click", function (event) {
        event.stopPropagation();
        let data = {
            name: $("#course_name").val(),
            description: $("#course_description").val(),
            start_date: $("#course_start").val(),
            end_date: $("#course_end").val(),
        };
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: `/admin/cursos`,
            method: "POST",
            dataType: "json",
            data: data,
        }).done(() => {
            $("#create-course-form").toggleClass("hidden");
            $("#add-new-term").toggleClass("hidden");
            notification("success","Curso añadido correctamente")
        }).fail(()=>{
            notification("error","No se ha podido añadir el curso")
        });
    });
    // Delete button redirect
    $("#delete-button").on("click", function (event) {
        event.stopPropagation();
    });
    // Delete input checker
    $("#delete-checker").on("input", function (event) {
        if ($(this).attr("placeholder") == $(this).val()) {
            $("#delete-form input[type='submit']").attr("disabled", false);
        } else {
            $("#delete-form input[type='submit']").attr("disabled", true);
        }
    });
    // Soft delete form
    $("#delete-form").on("submit", function (event) {
        event.preventDefault();
        let url = $(this).attr("action");
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: url,
            method: "DELETE",
            success: function () {
                notification("success","Elemento borrado perfectamente")
                setTimeout(function(){
                    window.location.href = document.referrer;
                }, 3000)
            },
            error: function () {
                alert(
                    "Hi ha agut un error intentant eliminar el element seleccionat."
                );
            },
        }).done();
    });

});
