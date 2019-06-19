$(document).ready(function() {

    hideRules('status');
    hideRules('pengalaman');
    hideRules('ayah_tiri');
    hideRules('ibu_tiri');
    hideRules('sampingan');
    hideRules('sim');
    hideRules('sim_upload');
    hideRules('buta_warna');
    

    $('#inputStatus').change(function(){
        showHideElement('inputStatus','status','Menikah','Belum Menikah');
    });

    $('#inputPengalaman').change(function(){
        showHideElement('inputPengalaman','pengalaman','Ya','Tidak Ada');
    });

    $('#inputStatusAyah').change(function(){
        showHideElement('inputStatusAyah','ayah_tiri','Meninggal','Hidup');
    });

    $('#inputStatusIbu').change(function(){
        showHideElement('inputStatusIbu','ibu_tiri','Meninggal','Hidup');
    });

    $('#inputPekerjaanSampingan').change(function(){
        showHideElement('inputPekerjaanSampingan','sampingan','Ya','Tidak');
    });

    $('#inputBisaKendaraan').change(function(){
        showHideElement('inputBisaKendaraan','sim','Ya','Tidak');
    });

    $('#inputPunyaSim').change(function(){
        showHideElement('inputPunyaSim','sim_upload','Ya','Tidak');
    });

    $('#inputButaWarna').change(function(){
        if($(this).val() == "Ya" || $(this).val() == ""){
            $('#buta_warna').hide();
            hideRules('buta_warna');
        }
        else if($(this).val() == "Tidak"){
          showRules('buta_warna');
        $.ajax({
            url : 'buta-warna-load-gambar.php',
            type: "GET",
            dataType: 'json',
            success : function(data){
                $('#tampil_gambar_test_buta_warna').attr('src','assets/images/buta-warna/'+data.src);
                $('#InputIdGambar').attr('value',data.id_gambar);
                $('#buta_warna').show();
            }
        });
        }
    });

    $('#submit').on('click', function(){
        var form            = new FormData(document.getElementById("form-pendaftaran"));
        var suratKeterangan = $('#inputSuratKeteranganKerja').prop('files')[0];
        var ijazah          = $('#inputIjazah').prop('files')[0];
        var transkrip       = $('#inputTranskrip').prop('files')[0];
        var sim             = $('#inputUploadSim').prop('files')[0];
        var skck            = $('#inputUploadSKCK').prop('files')[0];
        form.append("inputSuratKeteranganKerja", suratKeterangan);
        form.append("inputIjazah", ijazah);
        form.append("inputTranskrip", transkrip);
        form.append("inputUploadSim", sim);
        form.append("inputUploadSKCK", skck);
        $.ajax({
            url: "proses-pendaftaran.php",
            type: "POST",
            data: form,
            dataType: 'json',
            contentType: false,
            processData: false,            
            success: function(data){
                var message = '';
                for (var i = 1; i < data.response.length; i++) {
                    message += data.response[i]+'/n';
                }
                if(data.response[0] == 'failed'){
                    $('#info-form').text('PENDAFTARAN GAGAL');
                    $('#end-button').text('Kembali Mengisi');
                    $('#message').text(message);
                }
                else if(data.response[0] == 'success'){              
                    $('#info-form').text('PENDAFTARAN BERHASIL');
                    $('#message').text('Terima Kasih. Mohon menunggu untuk informasi selanjutnya');
                    $('#end-button').text('OK');
                    $('#end-button').attr('href', 'http://localhost/andi/index2.php');
                }
            },
            error: function(data){
                $('#info-form').text(data.response);
                $('#end-button').text('Isi ulang form');
                console.log(data);
            }
        });
    });


    function hideRules(id){
        $( "#"+id ).find("input").attr("disabled", "disabled");
        $( "#"+id ).find("input").attr("value", "");    
        $( "#"+id ).find("textarea").attr("disabled", "disabled");
    }

    function showRules(id){
        $( "#"+id ).find("input").removeAttr("disabled");    
        $( "#"+id ).find("textarea").removeAttr("disabled");
    }

    function showHideElement(input, id, val_show, val_hide){
        if($('#'+input).val() == val_hide || $('#'+input).val() == ""){
            $('#'+id).hide();
            hideRules(id);
        }
        else if($('#'+input).val() == val_show){
            $('#'+id).show();
            showRules(id);
        } 
    }

});