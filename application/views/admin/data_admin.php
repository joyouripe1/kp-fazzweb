<div class="container">
       
        <h1 class="text-center">Data Admin</h1>
        <a href="#form" data-toggle="modal" class="btn btn-primary" onclick="submit('tambah')">Tambah Data</a>
        <table class="table">
            <thead class="bg-dark text-white">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody id="targetData">
                
            </tbody>
        </table>

        <div class="modal fade" id="form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1>Data Admin</h1>
                    </div>    
                    <p id="pesan" class="text-danger text-center"></p>
                    <table class="table">
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" placeholder="Isikan Username" class="form-control">
                                <input type="hidden" name="id" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" name="password" placeholder="Isikan Password" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="button" id="btn-tambah" onclick="tambahData()" class="btn btn-primary">Tambah</button>
                                <button type="button" id="btn-ubah" onclick="ubahData()" class="btn btn-primary">Ubah</button>
                                <button type="button" data-dismiss="modal" class="btn btn-primary">Batal</button>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>


    </div>

    <script>
        ambilData();
        function ambilData(){
            $.ajax({
                type: 'POST',
                url: '<?= base_url()."admin/data_admin/ambildata"?>',
                dataType: 'json',
                success: function(data){
                    var baris='';
                    for(var i=0; i < data.length; i++){
                        baris += '<tr>'+
                                    '<td>'+(i+1)+'</td>' +
                                    '<td>'+data[i].username+' </td>' +
                                    '<td>'+data[i].password+'</td>' +
                                    '<td><a href="#form" data-toggle="modal" class="btn btn-primary" onclick="submit('+data[i].id+')">Ubah</a> <a onclick="hapusdata('+data[i].id+')" class="btn btn-danger">Hapus</a></td>' +
                                '</tr>';
                    }
                    $('#targetData').html(baris);
                }
            });    
        }

        function tambahData(){
            var username=$("[name='username']").val();
            var password=$("[name='password']").val();

            $.ajax({
                type: 'POST',
                data: 'username='+username+'&password='+password,
                url: '<?= base_url()."admin/data_admin/tambahdata"?>',
                dataType: 'json',
                success: function(hasil){
                    $("#pesan").html(hasil.pesan);

                    if(hasil.pesan==''){
                        $("#form").modal('hide');
                        ambilData();
                        $("[name='username']").val('');
                        $("[name='password']").val('');
                    }
                }
            });
        }

        function submit(x){
            if(x=='tambah'){
                $('#btn-tambah').show();
                $('#btn-ubah').hide();
            }else{
                $('#btn-tambah').hide();
                $('#btn-ubah').show();
                
                $.ajax({
                    type: 'POST',
                    data: 'id='+x,
                    url: '<?= base_url()."admin/data_admin/ambilId"?>',
                    dataType: 'json',
                    success: function(hasil){
                        $("[name='id']").val(hasil[0].id);
                        $("[name='username']").val(hasil[0].username);
                        $("[name='password']").val(hasil[0].password);
                    }
                })
            }
        }

        function ubahData(){
            var id=$("[name='id']").val();
            var username=$("[name='username']").val();
            var password=$("[name='password']").val();
            $.ajax({
                type: 'POST',
                data: 'id='+id+'&username='+username+'&password='+password,
                url: '<?= base_url()."admin/data_admin//ubahdata"?>',
                dataType: 'json',
                success: function(hasil){
                    $("#pesan").html(hasil.pesan);

                    if(hasil.pesan==''){
                        $("#form").modal('hide');
                        ambilData();
                        // $("[name='nim']").val('');
                        // $("[name='nama']").val('');
                    }
                }
            });
        }

        function hapusdata(id){
            var tanya = confirm('Apakah Anda yakin akan menghapus data?');
            
            if(tanya){
                $.ajax({
                    type: 'POST',
                    data: 'id='+id,
                    url: '<?= base_url()."admin/data_admin/hapusdata"?>',
                    success: function(){
                        ambilData();
                    }
                });
            }
        }
    </script>