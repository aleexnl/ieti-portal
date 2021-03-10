import "./bootstrap";
function cancelEdit (textName,textDesc, value,term){
    $(".nameInput").replaceWith("<p id='name' value='"+value+"'>"+textName+"</p>");
    $(".descInput").replaceWith("<p id='description' class='overflow-hidden overflow-ellipsis whitespace-nowrap w-36' value='"+value+"'>"+textDesc+"</p>");
    $(".confirm-button").css('display', 'none');
    $(".cancel-button").css('display', 'none');
    $(term).find(".delete-button").css('display','block ')
    $(term).find(".edit-button").css('display','block')
    
}
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
                $($(this)).css('display','none');
                $(term).find(".delete-button").css('display','none')
                let value=$(this).attr("value");
                let name = $("p[id='name'][value='"+value+"']").text();
                let description = $("p[id='description'][value='"+value+"']").text();
                $("div[value='"+value+"']").find("p").after("<button class='secondary my-1 w-full cancel-button' value='"+value+"'>Cancelar</button>")
                $("div[value='"+value+"']").find("p").after("<button class='primary my-1 w-full confirm-button' value='"+value+"'>Confirmar</button>")
                $("p[id='name'][value='"+value+"']").replaceWith("<input class='nameInput' value='"+ name+"'></input>")
                $("p[id='description'][value='"+value+"']").replaceWith("<textarea class='descInput'>"+description+"</textarea>")
                //$($(this)).replaceWith("<button class='primary my-1 w-full confirm-button' value='"+value+"'>Confirmar</button>")
                //$(term).find(".delete-button").replaceWith("<button class='secondary my-1 w-full cancel-button' value='"+value+"'>Cancelar</button>")

                $(".confirm-button").on("click",function(){
                    console.log("Borrando")
                })
                $(".cancel-button").on("click",function(){
                    cancelEdit(name,description,value,term)
                })
            });
    }
});
