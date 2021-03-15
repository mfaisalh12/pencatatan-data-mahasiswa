<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Data Mahasiswa</title>
<body>
    <div class="container">
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
    @endif
        <div class="row">
            <div class="col-6 center">
                <h1>Data mahasiswa</h1>
            </div>
            <div class="col-6">
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Mahasiswa
                </button>
                </div class="table-responsive">
                    <table class="table table-hover">
                        <tr class="bg-info text-white">
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Program Studi</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($data_mhs as $mahasiswa)
                        <tr>
                            <td>{{$mahasiswa -> nim}}</td>
                            <td>{{$mahasiswa -> nama}}</td>
                            <td>{{$mahasiswa -> alamat}}</td>
                            <td>{{$mahasiswa -> prodi}}<td>
                            <td>
                                <a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning">Edit</a>
                                <a href="/mahasiswa/{{$mahasiswa->id}}/delete" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        <!-- Modal Button tambah mhs -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form tambah mhs -->
                    <form action="/mahasiswa/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                        <label for="">NIM</label>
                            <input type="number" name="nim" class="form-control" placeholder="Input Nim Anda Disini!" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Input Nama Anda Disini!" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3" placeholder="Input Alamat Anda"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Program Studi</label>
                            <select name="prodi" id="" class="form-control">
                                <option value=""></option>
                                <option value="S1-Teknik Komputer">S1-Teknik Komputer</option>
                                <option value="S1-Teknik Telekomunikasi">S1-Teknik Telekomunikasi</option>
                                <option value="S1-Teknik Fisika">S1-Teknik Fisika</option>
                                <option value="S1-Teknik Elektro">S1-Teknik Elektro</option>
                            </select>
                        </div>
                
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <p>&copy; 2020 | M Faisal H</p>
    </footer>

        <!-- Jquery and Bootstrap Bundle -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>