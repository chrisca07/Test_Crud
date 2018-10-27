<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>hello</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Form Input</h3>
          <form class="form-horizontal" action="/barang/save" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label" for="NamaBarang">Nama Barang :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="NamaBarang" placeholder="" name="NamaBarang">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label" for="Harga">Harga Barang :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="Harga" placeholder="" name="Harga">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label" for="Stock">Stock :</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="Stock" placeholder="" name="Stock">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Save</button>
              </div>
            </div>

            <div class="col-md-6">
              <h3>Tabel Barang</h3>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stock</th>
                  </tr>
                </thead>
                  @foreach ($barang as $brg)
                    <tr>
                        <td>{{$brg->id}}</td>
                        <td>{{$brg->nama_barang}}</td>
                        <td>{{$brg->harga_barang}}</td>
                        <td>{{$brg->stock}}</td>
                        <td>
                        <a href="/barang/edit/{{ $brg->id }}" class="btn btn-info" role="button">Edit</a>
                        <a href="/barang/delete/{{ $brg->id }}" class="btn btn-danger" role="button">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </form>
        </div>
  </body>
</html>
