import "./bootstrap";

$(function () {
    let terms = $(".terms");
    for (const term of terms) {
        $(term)
            .find(".toggler")
            .on("click", function () {
                $(this).toggleClass("rotate-180");
                $(this).closest("tr").find(".controls").toggleClass("hidden");
            });
        $(term)
            .find(".delete-button")
            .on("click", function (event) {
                let id = event.target.attributes.value.value;
                let name = $(event.target)
                    .closest("tr")
                    .find("td > div > span")
                    .text();
                let parent = $(event.target).closest("tr");
                deleteTerm(id, name, parent);
            });
        $(term)
            .find(".edit-button")
            .on("click", function () {
                console.log("Editar");
            });
    }
    $("#confirm-delete button.delete-modal-close").on("click", function () {
        $("#confirm-delete").toggleClass("hidden");
        $("#confirm-delete button.delete-button").off("click");
        $("#confirm-delete input").off("input");
    });
    $("#add-new-term").on("click", function () {
        $("#create-course-form").toggleClass("hidden");
        $(this).toggleClass("hidden");
    });
    $("#cancel-course-creation").on("click", function () {
        $("#create-course-form").toggleClass("hidden");
        $("#add-new-term").toggleClass("hidden");
    });
    $("#add-course").on("click", function () {
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
});

function deleteTerm(id, name, parent) {
    // Reset Modal
    $("#confirm-delete button.delete-button").attr("disabled", true);
    $("#confirm-delete input").val("");
    $("#confirm-delete p  b").text(name);
    $("#confirm-delete").toggleClass("hidden"); // Activate modal
    // Compare when changing input
    $("#confirm-delete input").on("input", function () {
        $(this).val() == name
            ? $("#confirm-delete button.delete-button").attr("disabled", false)
            : $("#confirm-delete button.delete-button").attr("disabled", true);
    });
    $("#confirm-delete button.delete-button").one("click", function () {
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: `/cursos/${id}`,
            method: "DELETE",
        }).done(() => {
            $(parent).fadeOut();
            $("#confirm-delete").toggleClass("hidden");
        });
    });
}
