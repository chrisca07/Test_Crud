<link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<table id="users-table" class="table">
  <thead>

    <tr>

      <td>Nama Barang</td>
      <td>Harga Barang</td>
      <td>Stock</td>
      <td>Action</td>
    </tr>

  </thead>
</table>
<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
<script type="text/javascript">
$(function() {
       $('#users-table').DataTable({
           processing: true,
           serverSide: true,
           ajax: 'http://localhost:8000/test/get',
           columns: [
            //{data: 'id', name:'id'},
            {data: 'nama_barang', name: 'nama_barang'},
            {data: 'harga_barang', name:'harga_barang'},
            {data: 'stock', name:'stock'},
            {data: 'action', name: 'action', orderable: false, searchable: false}

        ]
       });
   });
</script>
