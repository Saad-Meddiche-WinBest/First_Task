
// =======================Declaration of varibales=======================
var current_index = 1;

var slide = document.getElementById("ContentS1");
var title = document.getElementById("TitleS1");
var content_of_title = document.getElementById("TitleS1_content");
var button = document.getElementById("ButtoS1");

var images = {
    1:{Link :'./views/includes/assets/img/ant.webp' , title :'Lutte contre les insectes à Casablanca'},
    2:{Link :'./views/includes/assets/img/rats.webp' , title :'Les professionnels de la Dératisation à Casablanca'},
    3:{Link :'./views/includes/assets/img/Human.webp' , title :'Les specialites de la desinfection au Maroc'}
}


// =======================Start Up Functions=======================
change_image_automaticly()

// =======================Main Funtcion=======================
function Slide(increment){
    change_image(increment)

    change_title()
    animate_title()

    animate_button()
}

// =======================Functions=======================
function change_title(){
    content_of_title.innerHTML = images[current_index].title
}

function change_image(increment){
    current_index += increment;

    if(current_index > 3 ){
        current_index = 1
    }

    if(current_index <= 0 ){
        current_index = 3
    }
   
    slide.style.backgroundImage= "url('" +images[current_index].Link + "')";
}

function animate_title(){
    title.animate(
        {
            transform: ["translateY(-50%)", "translateY(0%)"],

        },
        {
            duration: 400,
        }
    );
}

function animate_button(){
    button.animate(
        {
            transform: ["translateX(-200%)", "translateX(0%)"],

        },
        {
            duration: 800,
        }
    );
}

function change_image_automaticly(){

    setInterval(function(){
        Slide(1)
    },4000)

}

  

