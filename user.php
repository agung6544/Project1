<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="user.css">
  <title>Document</title>
</head>
<body>
  <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Ambil Antrian</h2>

<!-- Portfolio Grid Items -->
<div class="row">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-12" style="margin-top: 20px">
        <!-- <h1 align="center">Login </h1> -->
        <form method="post">
          <div class ="row">
            <div class ="col-md-2">
              <h6><label>Pilih Poli</label></h6>   
            </div>

            <div class="col-md-5">
              <select name="id_poli" id="id_poli" class="form-control" onchange="noAntrian(this.value)">
                <option value=""> pilih </option>
                  <option></option>
              </select>
            </div>
          </div>

          <div class ="row">
            <div class ="col-md-2">
              <h6><label>No Antrian Poli</label></h6>    
            </div>

            <div class="col-md-5">
              <input type="text" name="no_antrian_poli2" id="no_antrian_poli2" value="" disabled="" class="form-control">
              <input type="hidden" name="no_antrian_poli" id="no_antrian_poli" value="" class="form-control">
              <input type="hidden" name="no_antrian">
            </div>
          </div>

         
          <div class="row text-right">
            <div class="col-md-7">
              <input type="submit" name="simpan" id="simpan" value="Ambil Antrian" class="btn btn-primary">
            </div>
          </div>
        </form>

         <div class="row text-justify" >
         <h6>Keterangan :</h6>
          <ol>
            <li>Poli Umum (PLUM)</li>
            <li>Poli Gigi (PLGG) </li>
            <li>Poli Imunisasi (PLIM)</li>
            <li>Poli Tuberculosis (PLTB)</li>
          </ol>
      </div>
      </div>


    </div>
  </div>

</div>
<!-- /.row -->
</div>
</section>
</body>
</html>