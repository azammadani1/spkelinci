<style>
    .penyakit{
        color:red;
        font-weight:bold;
    }
    a{
        font-family: 'Quicksand', 'sans-serif';	
    }
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Quicksand', 'sans-serif';
        font-weight: 700;
        margin-top: 0px;
        color: #10161A;
    }
    p{
        font-family:'Quicksand', 'sans-serif';
    }
    span{
        font-family: 'Quicksand', 'sans-serif';
    }
    .table-bordered th, .table-bordered td {
        border: 1px solid #e9ecef;
        font-family: 'Quicksand', 'sans-serif';
        font-weight: 550;
    }
    p{
        font-weight:550;
    }
    .kesimpulan{
        color:#67CDFF;
    }
    .footer-area{
	background-image:
		-webkit-linear-gradient(0deg, #2c3e50 0%, #3498db 100%);
	;
    }
    b, i, sup, sub, u, del {
    color: #2c3e50;
}
</style>
<section class="call-to-action-area section-gap " style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important; padding:100px 120px;" id="printTable" >
<!-- <div class="content" style="padding:10px 40px;"> -->
    <h2>Hasil Analisis</h2>
    <div class="box box-warning">
        <div class="box-header with-border">
            <h6 class="box-title">Gejala yang dipilih</h6>
        </div><!-- /.box-header -->
            <div class="box-body table-responsive">
            <table id="tbl-list" class="table table-bordered">
                <tr>
                    <th width="50px" style="background: #2c3e50; color: white">No</th>
                    <th style="background: #2c3e50; color: white">Gejala</th>
                </tr>
                <tr>
                    <?php $i = 1; foreach($listGejala->result() as $value){?>
                        <tr>
                            <td width="30px"><?php echo $i++?></td>
                            <td><?php echo $value->kode." - ".$value->nama_gejala?></td>
                        </tr>
                    <?php }?>
                </tr>
            </table>
        </div><!--box body-->
    </div><!--box-->
    <div class="box box-success">
        <div class="box-header with-border">
            <h6 class="box-title">Hasil Diagnosa</h6>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="tbl-list-diagnosa" class="table table-bordered">
                <tr>
                    <th width="50px" style="background: #2c3e50; color: white">No</th>
                    <th style="background: #2c3e50; color: white">Diagnosa</th>
                    <th style="background: #2c3e50; color: white">Tingkat Kepercayaan</th>
                </tr>
                <tr>
                    <?php $i = 1; foreach($listPenyakit as $value){?>
                        <tr>
                            <td width="30px"><?php echo $i++?></td>
                            <td><?php echo $value['kode']." - ".$value['nama']?></td>
                            <td><?php echo $value['kepercayaan']?> %</td>
                        </tr>
                    <?php }?>
                </tr>
            </table>
        </div><!--box body-->
    </div><!--box-->

    <div class="box box-success">
        <div class="box-header with-border">
            <h6 class="box-title">Kesimpulan</h6>
        </div>

        <div class="box-body">

            <?php if(sizeof($listPenyakit)>0) { ?>
                <!-- <p>
                    Berdasarkan gejala yang dipilih, Kelinci Anda di prediksi mengidap penyakit <b><?php echo $listPenyakit[0]['nama'];?></b> dengan tingkat kepercayaan <b><?php echo $listPenyakit[0]['kepercayaan'];?> %</b><br/>
                    <?php echo $listPenyakit[0]['keterangan'];?>. <p style="font-style: bold; color: red; font-size: 13px;">*Hasil diagnosa ini masih membutuhkan pemeriksaan lebih lanjut yaitu dengan pemeriksaan ke <b>Dokter Hewan</b> untuk mendapatkan hasil yang lebih akurat.</p>
                </p> -->
                <table id="tbl-list-kesimpulan" class="table table-bordered">
                <tr>
                    <th width="500px" style="background: #2c3e50; color: white">Diagnosa</th>
                    <th style="background: #2c3e50; color: white">Solusi</th>
                </tr>
                <tr>
                    <td><?php echo $listPenyakit[0]['nama'] ?></td>
                    <td><?php echo $listPenyakit[0]['keterangan'] ?></td>
                </tr>
            </table>
            <p style="font-style: bold; font-size: 13px;">*Hasil diagnosa ini masih membutuhkan pemeriksaan lebih lanjut yaitu dengan pemeriksaan ke <b>Dokter Hewan</b> untuk mendapatkan hasil yang lebih akurat.</p>
            
            <?php }else{?>
                <p>
                    Penyakit tidak dapat diprediksi karena <b>tingkat kepercayaan gejala terlalu rendah</b>
                </p>
            <?php }?>
        </div>

        <div class="box-footer clearfix">
            <a class="btn btn-sm btn-flat pull-right" style="background: #2c3e50; color: white;" href="<?php echo site_url()?>/welcome/diagnosa">Deteksi Ulang</a>
            <button class="btn btn-sm btn-flat pull-right" style="background: #2c3e50; color: white; margin-right:10px;" onclick>Cetak</button> 
           
        </div>
    </div><!--box-->
</div>
</section>
 
<script type="text/javascript">
    function printData()
    {
        var
        divToPrint=document.getElementById('printTable');
        newWin= window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }

    $('button').on('click',function(){
        printData();
    });

    $('#tbl-list-diagnosa tr:nth-child(3)').addClass("penyakit");

    $('#tbl-list-kesimpulan tr:nth-child(3)').addClass("kesimpulan");


</script>