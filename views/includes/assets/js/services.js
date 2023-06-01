
var Cards_Content = document.getElementById('Cards_Content_S1');

var Card = `<div class="Card">
                <div class="Card_Content">
                <div class="Image_Card">
                    <img src="./views/includes/assets/img/1.webp" alt="" />
                </div>
                <div class="Title_Card">
                    <p>
                        Nettoyage de Bureaux
                        <br />
                        <br />
                        <span>Nettoyage bureaux à Casablanca</span>
                    </p>
                </div>
                <div class="Text_Card">
                    Le sécialiste du <strong>nettoyage de bureau</strong> à <strong>casablanca</strong> depuis plusieurs d'années garde vos bureaux impeccables.Faites le choix du savoir-faire, de l'expérience et de la qualité; pour le nettoyage de vos bureaux à
                    <strong>Casablanca</strong> .
                    Le sécialiste du <strong>nettoyage de bureau</strong> à <strong>casablanca</strong> depuis plusieurs d'années garde vos bureaux impeccables.Faites le choix du savoir-faire, de l'expérience et de la qualité; pour le nettoyage de vos bureaux à
                    <strong>Casablanca</strong> .
                    
                </div>
                <div class="PLus_Infomration">
                    <a href="">Savoir Plus ...</a>
                </div>
                </div>
            </div>`;

            if(Cards_Content){
                for(var i = 1 ; i <= 8; i++){
                    Cards_Content.innerHTML+= Card;
                }
            }
