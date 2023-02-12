<?php $this->load->view('backend/atas');?>

<!-- Main Content -->
 <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- add content here -->
            <div class="row">
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-info text-light">
                        Form Jenis Kegiatan
                    </div>
                    <div class="card-body table-responsive">
                        <div id="formjeniskegiatan"></div>
                    </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-info text-light">
                        Data Jenis Kegiatan
                    </div>
                    <div class="card-body table-responsive">
                     <div id="jeniskegiatan"></div>
                    </div>
                    </div>
                </div>

            </div>



          </div>
        </section>
     
      </div>
    <script>
        $("#formjeniskegiatan").load("main/loadformjeniskegiatan");
        $("#jeniskegiatan").load("main/loadjeniskegiatan");
    </script>
     <?php $this->load->view('backend/bawah');?>