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
    <h1>Edit Data Mahasiswa</h1>
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
    @endif
        <div class="row">
            <div class="col-lg-12">
                        <!-- Form tambah mhs -->
                <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                    <label for="">NIM</label>
                        <input type="number" name="nim" class="form-control" placeholder="Input Nim Anda Disini!" value="{{$mahasiswa->nim}}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Input Nama Anda Disini!" value="{{$mahasiswa->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Input Alamat Anda" value="{{$mahasiswa->alamat}}">{{$mahasiswa->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Program Studi</label>
                        <select name="prodi" id="" class="form-control">
                            <option value="" @if($mahasiswa->prodi == '') selected @endif></option>
                            <option value="S1-Teknik Komputer" @if($mahasiswa->prodi == 'S1-Teknik Komputer') selected @endif>S1-Teknik Komputer</option>
                            <option value="S1-Teknik Telekomunikasi" @if($mahasiswa->prodi == 'S1-Teknik Telekomunikasi') selected @endif>S1-Teknik Telekomunikasi</option>
                            <option value="S1-Teknik Fisika" @if($mahasiswa->prodi == 'S1-Teknik Fisika') selected @endif>S1-Teknik Fisika</option>
                            <option value="S1-Teknik Elektro" @if($mahasiswa->prodi == 'S1-Teknik Elektro') selected @endif>S1-Teknik Elektro</option>
                        </select>
                    </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
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