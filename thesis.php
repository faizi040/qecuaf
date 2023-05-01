<?php include("inc/header.php"); ?>

    <div class="container-fluid bg-dark text-white text-center  py-5">
        <h3>THESIS RESULT</h3>
        <div class="pt-3 block_text">
            <a href="index.php">Home</a> &nbsp;/&nbsp; <span>Thesis Result</span>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <center><h4 style="color: #df5227; font-family: 'Vendra'; font-size: 25px;">Enter Registration Number to Get your Result</h4></center>
        <br><br>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 p-0">
                        <input type="int" name="year" id="year" maxlength="4" class="form-control" style="text-align: center;" placeholder="e.g 2022">
                    </div>
                    <div class="col-md-2">
                        <center>
                            <span class="text-secondary">-ag-</span>
                        </center>
                    </div>
                    <div class="col-md-5 p-0">
                        <input type="int" minlength="1" maxlength="5" name="reg" id="reg" class="form-control" style="text-align: center;" placeholder="e.g 12345">
                    </div>
                </div>
                <center>
                    <b id="dd" style="color: red;"></b>
                </center>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary" id="get_result" name="get_result">Get Result</button>
                <button class="btn btn-primary" id="download">PDF Download</button>
            </div>
        </div>  
        <br>
        <div id="shh"></div>
    </div>

<?php include("inc/footer.php"); ?>
