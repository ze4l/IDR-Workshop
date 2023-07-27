<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Data Montir</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Edit  Data Montir</h1>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <div class="card-body">
                <form action="/updatedata/{{$data->id}}" method="post">
                    @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="{{$data->nama}}">
              
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Usia</label>

                    <input type="number" name="usia" class="form-control" id="exampleInputPassword1"  value="{{$data->usia}}">
                  </div>
                  <div class="mb-3 ">
                    <label for="exampleInputPassword1" class="form-label">Divisi</label>
                    <input type="text" name="divisi" class="form-control" id="exampleInputPassword1"  value="{{$data->divisi}}">
                  </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>


                


              </div>
            </div>


          </div>
        </div>
    </div>
             
  </body>
</html>