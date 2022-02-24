<?php
    require('header.php');
?>

<!-- <h1>Volume & Capacity...</h1> -->

<div class="container">
    <div class="card my-4">
        <h5 class="card-header">Volume & Capacity Conversion</h5>
        <div class="card-body">
    
            <form class="row g-3 justify-content-between" method="post" action="volume_capacity.php">
                <div class="col-md-12">
                    <label for="value" class="form-label card-text">Value:</label>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="inputFrom">
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
                        <option value="Cubic Kilometer" selected>Cubic Kilometer</option>
                        <option value="Cubic Metre">Cubic Metre</option>
                        <option value="Cubic Mile">Cubic Mile</option>
                        <option value="Cubic Yard">Cubic Yard</option>
                        <option value="Cubic Foot">Cubic Foot</option>
                        <option value="Cubic Inch">Cubic Inch</option>
                        <option value="Litre">Litre</option>
                        <option value="Milliletre">Milliletre</option>
                        <option value="Liquid Gallon (US)">Liquid Gallon (US)</option>
                        <option value="Liquid Quart (US)">Liquid Quart (US)</option>
                        <option value="Liquid Pint (US)">Liquid Pint (US)</option>
                        <option value="Legal Cup (US)">Legal Cup (US)</option>
                        <option value="Fluid Ounce (US)">Fluid Ounce (US)</option>
                        <option value="Liquid Gallon (UK)">Liquid Gallon (UK)</option>
                        <option value="Liquid Quart (UK)">Liquid Quart (UK)</option>
                        <option value="Liquid Pint (UK)">Liquid Pint (UK)</option>
                        <option value="Legal Cup (UK)">Legal Cup (UK)</option>
                        <option value="Fluid Ounce (UK)">Fluid Ounce (UK)</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="unitTo" class="form-label">To:</label>
                    <select id="unitTo" class="form-select">
                        <option value="Cubic Kilometer">Cubic Kilometer</option>
                        <option value="Cubic Metre" selected>Cubic Metre</option>
                        <option value="Cubic Mile">Cubic Mile</option>
                        <option value="Cubic Yard">Cubic Yard</option>
                        <option value="Cubic Foot">Cubic Foot</option>
                        <option value="Cubic Inch">Cubic Inch</option>
                        <option value="Litre">Litre</option>
                        <option value="Milliletre">Milliletre</option>
                        <option value="Liquid Gallon (US)">Liquid Gallon (US)</option>
                        <option value="Liquid Quart (US)">Liquid Quart (US)</option>
                        <option value="Liquid Pint (US)">Liquid Pint (US)</option>
                        <option value="Legal Cup (US)">Legal Cup (US)</option>
                        <option value="Fluid Ounce (US)">Fluid Ounce (US)</option>
                        <option value="Liquid Gallon (UK)">Liquid Gallon (UK)</option>
                        <option value="Liquid Quart (UK)">Liquid Quart (UK)</option>
                        <option value="Liquid Pint (UK)">Liquid Pint (UK)</option>
                        <option value="Legal Cup (UK)">Legal Cup (UK)</option>
                        <option value="Fluid Ounce (UK)">Fluid Ounce (UK)</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-warning">Convert</button>
                </div>
            </form>           
        </div>
    </div>
</div>


<?php
    require('footer.php');
?>
<?php
    if(isset($_POST['submit'])){
        $valFrom = $_POST['inputFrom'];
    }
?>