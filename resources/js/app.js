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
            .on("click", function () {
                console.log("Eliminar");
            });
        $(term)
            .find(".edit-button")
            .on("click", function () {
                console.log("Editar");
            });
    }
});
