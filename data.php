<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input count from the form data
    $inputCount = isset($_POST['inputCount']) ? intval($_POST['inputCount']) : 0;

    // Prepare formatted text
    $formattedText = '';
    // Loop through each input field
    for ($i = 1; $i <= $inputCount; $i++) {
        // Get the input value by using its name
        $inputName = "input$i";
        $inputValue = $_POST[$inputName] ?? ''; // Use null coalescing operator to handle non-existent values
        
        // Prepend each input value with its position and append it to the formatted text
        $formattedText .= "$i. $inputValue\n";
    }

    // Print out the formatted text
    echo $formattedText;
}
?>
