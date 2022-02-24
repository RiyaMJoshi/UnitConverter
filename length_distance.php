<?php
    require('header.php');

    $units = array("Kilometer", "Metre", "Centimetre", "Millimetre", "Micrometre", 
               "Nanometre", "Mile", "Yard", "Foot", "Inch", "Nautical Mile", "Light Year");
?>

<!-- <h1>Length & Distance...</h1> -->

<div class="container">
    <div class="card my-4">
        <h5 class="card-header">Length & Distance Conversion</h5>
        <div class="card-body">
    
            <form class="row g-3 justify-content-between" method="post" action="length_distance.php">
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