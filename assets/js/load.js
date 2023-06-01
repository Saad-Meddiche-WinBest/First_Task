var Runed_Before = false
async function load_file(name){

    await fetch("./includes/"+name+".html")
        .then((responce) => responce.text()
        .then((data) => document.getElementById(name).innerHTML = data))

    if(Runed_Before == false){
        test()
        Runed_Before = true
    }
    
    
}

function test(){
    for (var i = 1; i <= 6; i++) {
        document.getElementById("DropS1").innerHTML += `<div class="Link">
                                                        <a>Page${i}</a>
                                                        </div>`;
    }
}


            
