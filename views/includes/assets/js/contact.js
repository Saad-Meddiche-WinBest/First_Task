// Function to handle the option change event
function check_if_autre_option_is_selected() {
    // Get the selected option element
    var selectElement = document.getElementById("sujet");
    var selectedOption = selectElement.options[selectElement.selectedIndex];

    // Get the value of the selected option
    var selectedValue = selectedOption.value;

    // Perform your desired action based on the selected value
    if (selectedValue === "") {
       // Do something when "Autre" option is selected
       document.getElementById('AutreS1').innerHTML = `<label for="autre">Autre:</label>
       <input type="text" id="autre" name="sujet" placeholder="Autre" />`
       document.getElementById('AutreS1').style.display = "block";
    }
 }