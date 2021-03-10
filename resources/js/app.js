import "./bootstrap";

$(function () {
    console.log("App loaded!");
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
                deleteTerm(event.target);
            });
        $(term)
            .find(".edit-button")
            .on("click", function () {
                console.log("Editar");
            });
    }
});

function deleteTerm(target) {
    const id = target.attributes.value.value;
    const termName = $(target).closest("tr").find("td > div > span").text();
    resetDeleteModal(termName);
    $("#confirm-delete input").on("input", function () {
        $(this).val() == termName
            ? $("#confirm-delete button").attr("disabled", false)
            : $("#confirm-delete button").attr("disabled", true);
    });
    $("#confirm-delete .delete-modal-close").one("click", function () {
        $("#confirm-delete").toggleClass("hidden");
    });
    $("#confirm-delete button").on("click", function () {
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: `/cursos/${id}`,
            method: "DELETE",
        }).done(() => {
            $(target).closest("tr").fadeOut();
            $("#confirm-delete").toggleClass("hidden");
        });
    });
}
/**
 * Resets modal status to its original state
 * @param {*} termName String
 */
function resetDeleteModal(termName) {
    $("#confirm-delete button").attr("disabled", true);
    $("#confirm-delete input").val("");
    $("#confirm-delete p  b").text(termName);
    $("#confirm-delete").toggleClass("hidden");
}
