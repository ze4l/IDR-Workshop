<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Montir</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Data Montir</h1>

        <div class="container">
            <a href=" /tambahmontir" class="btn btn-success">Tambah +</a>
            <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-succes" role="alert">  
                    {{$message}}
                </div>
        </div>
            @endif
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Montir</th>
                        <th scope="col">Usia Montir</th>
                        <th scope="col">Divisi</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <th scope="row">{{$row->id}}</th>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->usia}}</td>
                                <td>{{$row->divisi}}</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-info">Edit</button></td>
                                <td>
                                    <a href = "/tampilkandata/{{ $row->id}}" class="btn btn-danger">Edit</a>
                                    <a href = "/delete/{{ $row->id}}" class="btn btn-info">Delete</a>
                                </td>
                            </tr>

                        @endforeach
                        
                     
                    </tbody>
                    </table>

             
            
            </div>       
        </div>     

   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>