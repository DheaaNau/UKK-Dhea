<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>

<link rel="stylesheet" href="bs/css/bootstrap.min.css">
<body>
<style>
    p{
        text-align: center;
        font-size: 40px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
    
    }
    body{
        background-color: rgb(68, 93, 121)
    }
    .btn{
      text-align: right;
    }
</style>
<nav class="navbar" style=" background-color: rgb(56, 182, 182);">
<nav class="navbar navbar-expand-lg ">
  <img src={{asset('logoo.jpg')}} alt=""width="70" height="60">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{url('home')}}">Product</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('tambah_produk')}}">Add Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('tambah_pelanggan')}}">Add Customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('penjualan')}}">Sale</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('pelanggan')}}">Customer</a>
      </li>
    </ul>
  </div>
</nav>
</div>

</nav>
<br>

<p>Data Produk</p>
<div class="container">
<table class="table table-danger">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Opsi</th>
    </tr>
    
  </thead>
  <tbody>
  @foreach ($produk as $produk)
    <tr>
      <td>{{$produk->ProdukID}}</td>
      <td>{{$produk->NamaProduk}}</td>
      <td>{{$produk->Harga}}</td>
      <td>{{$produk->Stok}}</td>

      
      <td><a href="update_produk/{{$produk->ProdukID}}"><button type="button" class="btn btn-success"><img src="update.png" alt=""width="40" height="30"></button></a>
      <a href="hapus_produk/{{$produk->ProdukID}}"><button type="button" class="btn btn-danger"><img src="delete.png" alt=""width="40" height="30"></button></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>