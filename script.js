
let MenuState=true;

function doClickMenu(){
    document.getElementById("iconMenu").style.position = "relative";

    let box = document.getElementById('iconMenu');
    let height = $( box ).height();
    height-=20;

    document.getElementById("Menu").style.paddingTop = `${height}px`;
    document.getElementById("iconMenu").style.position = "fixed";

    if(MenuState==true){
        document.getElementById("Menu").style.display = "flex";
        MenuState=false;
    }else{
        document.getElementById("Menu").style.display = "none";
        MenuState=true;
    }
}


function hideMenu(){
    document.getElementById("Menu").style.display = "none";
    MenuState=true;
}

function write(){
    document.getElementById("formulaire").style.marginBottom = "200px";
}