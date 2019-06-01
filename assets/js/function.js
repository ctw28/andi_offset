$(document).ready(function() {   	

    $('#submit').on('click', function(){
        var suratKeterangan = $('#inputSuratKeteranganKerja').prop('files')[0];
        var ijazah = $('#inputIjazah').prop('files')[0];
        var transkrip = $('#inputTranskrip').prop('files')[0];
        var sim = $('#inputUploadSim').prop('files')[0];
        var skck = $('#inputUploadSKCK').prop('files')[0];
        var form = new FormData(document.getElementById("form-pendaftaran"));
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
              $('#info-form').text('PENDAFTARAN BERHASIL');
              if(data.response[0] == 'failed'){
                  $('#end-button').text('Isi ulang form');
                  $('#info-form').text('PENDAFTARAN GAGAL');
              }
              else{              
                $('#end-button').text('OK');
                $('#end-button').attr('href', 'http://localhost/andi/index2.php');
              }
              console.log(data);
          },
          error: function(data){
              $('#info-form').text(data.response);
              $('#end-button').text('<- Isi ulang form');
              console.log(data);
          }
        });
    });
  
    $('#inputButaWarna').change(function(){
        if($(this).val() == "Ya" || $(this).val() == ""){
            $('#buta_warna').hide();
        }
        else if($(this).val() == "Tidak")
        {
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

    $('#inputStatus').change(function(){
      if($(this).val() == "Belum Menikah" || $(this).val() == ""){
        $('#status').hide();
      }
      else if($(this).val() == "Menikah"){
        $('#status').show();
    }
    });

    $('#inputStatusAyah').change(function(){
      if($(this).val() == "Hidup" || $(this).val() == ""){
        $('#ayah_tiri').hide();
      }
      else if($(this).val() == "Meninggal"){
        $('#ayah_tiri').show();
    }
    });
    
    $('#inputStatusIbu').change(function(){
      if($(this).val() == "Hidup" || $(this).val() == ""){
        $('#ibu_tiri').hide();
      }
      else if($(this).val() == "Meninggal"){
        $('#ibu_tiri').show();
    }
    });
    
    $('#inputPengalaman').change(function(){
      if($(this).val() == "Tidak Ada" || $(this).val() == ""){
        $('#pengalaman').hide();
      }
      else if($(this).val() == "Ya"){
        $('#pengalaman').show();
    }

    });
    $('#inputPekerjaanSampingan').change(function(){
      if($(this).val() == "Tidak" || $(this).val() == ""){
        $('#sampingan').hide();
      }
      else if($(this).val() == "Ya"){
        $('#sampingan').show();
    }
    });
    $('#inputPunyaSim').change(function(){
      if($(this).val() == "Tidak" || $(this).val() == ""){
        $('#sim_upload').hide();
      }
      else if($(this).val() == "Ya"){
        $('#sim_upload').show();
    }
    });
    $('#inputBisaKendaraan').change(function(){
      if($(this).val() == "Tidak" || $(this).val() == ""){
        $('#sim').hide();
      }
      else if($(this).val() == "Ya"){
        $('#sim').show();
    }
    });



});
