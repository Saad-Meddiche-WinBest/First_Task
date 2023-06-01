<?php
if (isset($_POST["Envoyer"])) {
   MessageController::AddMessage();
}

?>

<div class="container">
   <div class="child_container">
      <div class="Content_Of_Page_Contact">
         <div class="First_Part">
            <div class="Header">
               <div class="Title">DEVIS GRATUIT</div>
               <div class="Line"></div>
            </div>

            <div class="Description">
               Pour plus d'informations, un devis gratuit, une question sur nos compétences ou sur nos traitements de désinsectisation, dératisation, désinfection, déreptilisation et à casablanca et partout au maroc, n'hésitez pas à nous contacter, notre équipe est à votre
               disposition. Nous prendrons contact avec vous dès réception de votre message
            </div>

            <div class="Formule">

               <div class="Content">
                  <?php
                  if (isset($_SESSION['errors'])) {
                     for ($i = 0; $i < count($_SESSION['errors']); $i++) {
                        echo "<p style='color:red;margin:0'>" . $_SESSION['errors'][$i] . "</p>";
                     }
                     unset($_SESSION['errors']);
                  }
                  ?>
                  <p style='color:green;margin:5px;display:none;' id="successS1">Message Has Been sent Successfuly</p>
                  <form class="contact-form" method="POST" action="">
                     <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" id="nom" name="nom" placeholder="Nom" />
                     </div>
                     <div class="form-group">
                        <label for="ville">Ville:</label>
                        <select id="ville" name="ville" required>
                           <option value="" selected disabled>Sélectionner une ville</option>
                           <option value="Casablanca">Casablanca</option>
                           <option value="Oujda">Oujda</option>
                           <option value="Fes">Fes</option>

                        </select>
                     </div>
                     <div class="form-group">
                        <label for="numero">Numéro:</label>
                        <input type="number" id="numero" name="numero" required placeholder="Numéro" />
                     </div>
                     <div class="form-group">
                        <label for="Email">Email:</label>
                        <input type="email" id="email" name="email" required placeholder="Email" />
                     </div>
                     <div class="form-group">
                        <label for="numero">Type De Local:</label>
                        <select id="local" name="local" required>
                           <option value="" selected disabled>Sélectionner un local</option>
                           <option value="Particulier">Particulier</option>
                           <option value="Marseille">Professionel</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="sujet">Sujet:</label>
                        <select id="sujet" name="sujet" required onchange="check_if_autre_option_is_selected()">
                           <option value="" selected disabled>Sélectionner un Sujet</option>
                           <option value="Studio">Studio</option>
                           <option value="Appartement">Appartement</option>
                           <option value="Maison">Maison</option>
                           <option value="Villa">Villa</option>
                           <option value="">
                              Autre
                           </option>
                        </select>
                     </div>
                     <div class="form-group" style="display:none;" id="AutreS1">

                     </div>
                     <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="content" rows="4" required placeholder="Message"></textarea>
                     </div>
                     <div class="form-group">
                        <button type="submit" name="Envoyer">Envoyer</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>

         <div class="Second_Part">
            <div class="Upper_Part">
               <div class="Header">
                  <div class="Title">Nos coordonnées</div>
                  <div class="Line"></div>
               </div>
               <div class="Content">
                  <div class="Links">
                     <div class="Link">
                        <a href="">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-signpost-fill" viewBox="0 0 16 16">
                              <path d="M7.293.707A1 1 0 0 0 7 1.414V4H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h5v6h2v-6h3.532a1 1 0 0 0 .768-.36l1.933-2.32a.5.5 0 0 0 0-.64L13.3 4.36a1 1 0 0 0-.768-.36H9V1.414A1 1 0 0 0 7.293.707z" />
                           </svg>
                           Address : <span class="style_6">99 Rue Pierre Parent 5eme ETG App 10 BD La Résistance , Casablanca Maroc</span>
                        </a>
                     </div>
                     <div class="Link">
                        <a href="">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                           </svg>
                           Fixe : <span class="style_6">xxxxxxxxxxxxxxxx</span></a>
                     </div>
                     <div class="Link">
                        <a href="">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                           </svg>
                           Telephone : <span class="style_6">xxxxxxxxxxxxxxxx</span></a>
                     </div>
                     <div class="Link">
                        <a href="">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                           </svg>
                           Mail : <span class="style_6">Example@gmail.com</span></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="Middle_Part">
               <div class="Header">
                  <div class="Title">Heures de travail</div>
                  <div class="Line"></div>
               </div>
               <div class="Description">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stopwatch" viewBox="0 0 16 16">
                     <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z" />
                     <path d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64a.715.715 0 0 1 .012-.013l.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354a.512.512 0 0 1-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5zM8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3z" />
                  </svg>
                  24H/24 et 7J/7
               </div>
            </div>
            <div class="Lower_Part">
               <div class="Title">Entreprise de dératisation à casablanca</div>
               <div class="Options">
                  <div class="Option">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                     </svg>
                     Devis de dératisation à Casablanca
                  </div>
                  <div class="Option">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                     </svg>
                     Devis de désinsectisation à Casablanca
                  </div>
                  <div class="Option">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                     </svg>
                     Devis de désinfection à Casablanca
                  </div>
                  <div class="Option">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                     </svg>
                     Devis d'hygiène 3d à Casablanca
                  </div>
                  <div class="Option">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                     </svg>
                     Devis de dératisation à Casablanca
                  </div>
                  <div class="Option">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                     </svg>
                     Devis de désinsectisation à Casablanca
                  </div>
                  <div class="Option">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                     </svg>
                     Devis de désinfection à Casablanca
                  </div>
                  <div class="Option">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                     </svg>
                     Devis d'hygiène 3d à Casablanca
                  </div>
                  <div class="Option">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                     </svg>
                     Devis de dératisation à Casablanca
                  </div>
                  <div class="Option">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                     </svg>
                     Devis de désinsectisation à Casablanca
                  </div>
                  <div class="Option">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                     </svg>
                     Devis de désinfection à Casablanca
                  </div>
                  <div class="Option">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                     </svg>
                     Devis d'hygiène 3d à Casablanca
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script src="./views/includes/assets/js/contact.js"></script>