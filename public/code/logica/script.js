let menuSelecionado;
window.onload=function(){
    let btnsmenu=Array.from(document.querySelectorAll("ul li"));
    let artigos=Array.from(document.querySelectorAll("section article"));
    btnsmenu.forEach((btn)=>{
        btn.addEventListener("click", (e)=>{
            if(menuSelecionado!=undefined){
                menuSelecionado.removeAttribute("class");
            }
            menuSelecionado=e.target;
            menuSelecionado.setAttribute("class", "liselecionado");
            var ind=btnsmenu.indexOf(e.target);
            scrollParaElemento(artigos[ind]);
        });
    });


}

function scrollParaElemento(elemento) {
    const elementoTopo = elemento.offsetTop-(window.innerHeight*0.15); // Posição do elemento em relação ao topo da página
    document.querySelector("section").scrollTo({ top: elementoTopo, behavior: "smooth" }); // Faz o scroll até a posição do elemento
}