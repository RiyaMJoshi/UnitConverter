<?php
    require('header.php'); 

    $units = array("Celcius", "Fahrenheit", "Kelvin");
?>

<!-- <h1>Temperature...</h1> -->

<div class="container">
    <div class="card my-4">
        <h5 class="card-header">Temperature Conversion</h5>
        <div class="card-body">
    
            <form class="row g-3 justify-content-between"> <!-- method="post" action="temperature.php"-->
                <div class="col-md-12">
                    <label for="value" class="form-label card-text">Value:</label>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="inputFrom" value="0">
                </div>
                <div class="col-md-2 text-center align-self-center fs-4">
                    <label for="equalTo" class="form-label">=</label>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="inputTo" readonly>
                </div>
                <div class="col-md-5">
                    <label for="unitFrom" class="form-label">From:</label>
                    <select id="unitFrom" class="form-select">
                        <?php
                            foreach($units as $key=>$unit){
                                if($key == 0){
                                    echo "<option value='".$unit."' selected>$unit</option>";
                                }
                                else{
                                    echo "<option value='".$unit."'>$unit</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="unitTo" class="form-label">To:</label>
                    <select id="unitTo" class="form-select">
                    <?php
                            foreach($units as $key=>$unit){
                                if($key == 1){
                                    echo "<option value='".$unit."' selected>$unit</option>";
                                }
                                else{
                                    echo "<option value='".$unit."'>$unit</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-warning" onclick="convert()">Convert</button>
                </div>
            </form>           
        </div>
    </div>
</div>

<script>

    function convert(){
        // Form Input TextBoxes
        var inputText = document.getElementById('inputFrom');
        var outputText = document.getElementById('inputTo');

        // Value available in Input TextBox
        var input = inputText.value;
        var output = outputText.value;

        // Form Select Elements i.e. Dropdowns (From & To)
        var unitFrom = document.getElementById("unitFrom");
        var unitTo = document.getElementById("unitTo");

        // Currently Selected Option Value in Both Dropdowns
        var from = unitFrom.value;
        var to = unitTo.value;

        // if (from == 'Celcius' && to == 'Fahrenheit') {
        //     output = celToFahren(input);
        // } else if (from == 'Celcius' && to == 'Kelvin') {
        //     output = celToKelvin(input);            
        // } else if (condition) {
            
        // } else {
            
        // }

       
            switch (from) {
                case 'Celcius':
                        switch (to) {
                            case 'Celcius':
                                output = input;
                                break;                            
                            case 'Fahrenheit':
                                output = celcToFahren(input);
                                break;
                            case 'Kelvin':
                                output = celcToKelvin(input);  
                                break;   
                        }
                    break;
            
                case 'Fahrenheit':
                        switch (to) {
                            case 'Celcius':
                                output = fahrenToCelc(input);
                                break;                            
                            case 'Fahrenheit':                                
                                output = input;
                                console.log(output);
                                break;
                            case 'Kelvin':
                                output = fahrenToKelvin(input);  
                                break;   
                        }
                    break;

                case 'Kelvin':
                        switch (to) {
                            case 'Celcius':
                                output = kelvinToCelc(input);
                                break;                            
                            case 'Fahrenheit':
                                output = kelvinToFahren(input);
                                break;
                            case 'Kelvin':
                                output = input;  
                                break;   
                        }
                    break;
            }
            output = Math.round((output + Number.EPSILON) * 10000) / 10000
            outputText.value = output;
       
    }

    // Celcius to Fahrenheit and Kelvin
    function celcToFahren(celcius){
        return 1.8 * celcius + 32;
    }
    function celcToKelvin(celcius){
        return celcius + 273.15;
    }

    // Fahrenheit to Celcius and Kelvin
    function fahrenToCelc(fahren){
        return 5 / 9 * (fahren - 32);
    }
    function fahrenToKelvin(fahren){
        return 5 / 9 * (fahren - 32) + 273.15;
    }

    // Kelvin to Celcius and Fajhrenheit
    function kelvinToCelc(kelvin){
        return kelvin - 273.15;
    }
    function kelvinToFahren(kelvin){
        return (kelvin - 273.15) * 9/5 + 32;
    }
</script>
<?php
    require('footer.php');
?>
