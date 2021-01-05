
<div class="col-md-12">
   <div class="row">
   <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Positif</div>
                     <h4> <strong><?= $positif['value'] ?></strong></h4>
                    </div>
                    <div class="col-auto">
                       <img src="<?php echo base_url() ?>/assets/img/sad.png"class="img-circle" width="75" height="75">
                    </div>
                  </div>
                </div>
              </div>
</div>
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Sembuh</div>
                     <h4> <strong><?= $sembuh['value'] ?></strong></h4>
                    </div>
                    <div class="col-auto">
                       <img src="<?php echo base_url() ?>/assets/img/smile.png"class="img-circle" width="75" height="75">
                    </div>
                  </div>
                </div>
              </div>
</div>
     <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Meninggal</div>
                     <h4> <strong><?= $meninggal['value'] ?></strong></h4>
                    </div>
                    <div class="col-auto">
                       <img src="<?php echo base_url() ?>/assets/img/cry.png"class="img-circle" width="75" height="75">
                    </div>
                  </div>
                </div>
              </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-success" role="alert">Data Kasus Coronavirus di Indonesia Berdasarkan Negara</div>
       <table id="table" class="table table-bordered table-striped" width="100%">
               <thead>
                   <tr>
                         <th class="text-center">No</th>
                         <th class="text-center">Negara</th>
                         <th class="text-center">Positif</th>
                         <th class="text-center">Sembuh</th>
                         <th class="text-center">Meninggal</th>
                   </tr>
               </thead>
               <tbody>
                <?php $no=0; foreach ($global as $key => $data) {$no++ ;?>
                   <tr>
                       <td class="text-center"><?= $no?></td>
                       <td><?= $data['attributes']['Country_Region'];?></td>
                       <td class="text-center"><?= $data['attributes']['Confirmed'];?></td>
                       <td class="text-center"><?= $data['attributes']['Recovered'];?></td>
                       <td class="text-center"><?= $data['attributes']['Deaths'];?></td>
                   </tr>
               <?php } ?> 
               </tbody>
           </table>
    </div>
  </div>
</div>
</div>