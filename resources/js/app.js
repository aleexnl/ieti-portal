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
            let description = $(
                "p[id='description'][value='" + value + "']"
            ).text();
            $("div[value='" + value + "']")
                .find("p")
                .after(
                    "<button class='secondary my-1 w-full cancel-button' value='" +
                        value +
                        "'>Cancelar</button>"
                );
            $("div[value='" + value + "']")
                .find("p")
                .after(
                    "<button class='primary my-1 w-full confirm-button' value='" +
                        value +
                        "'>Confirmar</button>"
                );
            $("p[id='name'][value='" + value + "']").replaceWith(
                "<input class='nameInput' value='" + name + "'></input>"
            );
            $("p[id='description'][value='" + value + "']").replaceWith(
                "<textarea class='descInput'>" + description + "</textarea>"
            );
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
                    url: `/cursos/${value}`,
                    method: "PUT",
                }).done(() => {
                    cancelEdit(name, description, value, term);
                });
            });
            $(".cancel-button").on("click", function (event) {
                event.stopPropagation();
                cancelEdit(name, description, value);
            });
        }
    );
    $("#add-new-term").on("click", function (event) {
        event.stopPropagation();
        $("#create-course-form").toggleClass("hidden");
        $(this).toggleClass("hidden");
    });
    $("#cancel-course-creation").on("click", function (event) {
        event.stopPropagation();
        $("#create-course-form").toggleClass("hidden");
        $("#add-new-term").toggleClass("hidden");
    });
    $("#add-element").on("click", function (event) {
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
            url: `/cursos`,
            method: "POST",
            dataType: "json",
            data: data,
        }); /*.done(() => {
        });*/
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
                window.location.href = document.referrer;
            },
            error: function () {
                alert(
                    "Hi ha agut un error intentant eliminar el element seleccionat."
                );
            },
        }).done();
    });
});
