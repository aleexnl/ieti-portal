import "./bootstrap";

$(function () {
    let terms = $(".terms");
    for (const term of terms) {
        $(term)
            .find(".accordion")
            .on("click", function () {
                $(this).find(".controls").toggleClass("hidden");
            });
    }
});
