<?php
require_once('layouts/head.php')
?>
<?php
require_once('class/p3classoopcal.php')
?>


<div class="container mt-3 mb-3">
    <!-- Content here -->


    <div class="card text-center">
        <div class="card-header">
            Calculator
        </div>
        <div class="card-body">
            <form action="routing/p3prosesoopcal.php" method="POST">
                <div class="form-row">
                    <div class="col">
                        <input type="number" name="variable1" class="form-control" placeholder="Bilangan Pertama"
                            required>
                    </div>
                    <div class="col">
                        <input type="number" name="variable2" class="form-control" placeholder="Bilangan Kedua"
                            required>
                    </div>
                </div>
                <div class="inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Operator</label>
                    <select class="custom-select my-1 mr-sm-2" name="operator" id="operator" required="required">
                        <option selected disabled value="">Choose...</option>
                        <option value="1">Tambah</option>
                        <option value="2">Kurang</option>
                        <option value="3">Kali</option>
                        <option value="4">Bagi</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>

    </div>
</div>


<?php
require_once('layouts/footer.php')
?>