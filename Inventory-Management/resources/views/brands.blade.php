<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
  <body>
   <div class="container"> 
    <div class="row">
        <div class="col-md-8"> </div>
        <a href=" " class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Product </a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Entry Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($brands as $key => $brand)
    <tr>
        <th scope="row">{{ $key + 1 }}</th>
        <td>{{ $brand->name }}</td>
        <td>{{ $brand->entry_date }}</td>
        <td>
            <a href="#" class="btn btn-success"><i class="las la-edit"></i></a>
            <a href="#" class="btn btn-danger"><i class="las la-times"></i></a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@include('brand_js')
@include('add_modal_brand')
@push('css')
    <link rel="stylesheet" href="">
@endpush
  </body>
</html>