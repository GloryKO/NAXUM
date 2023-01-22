<?php use \App\Http\Controllers\salesReportController;?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script>

        </script>
    </head>
    <body class="antialiased">
<div class="container">
<div class="row justify-content-center">
 <div class="col-md-12">
  <h3 align="center">Transaction Report</h3>
  <br />
 @if(session()->has('message'))
  <div class="alert alert-success" role="alert">
    <strong>Success: </strong>{{session()->get('message')}}
  </div>
  @elseif(session()->has('error'))
  <div class="alert alert-danger" role="alert">
    <strong>Error: </strong>{{session()->get('error')}}
  </div>
  @endif
  <div align="center">
 <!-- <a href="{{route('country.create')}}" class="btn btn-primary">Add</a> -->
 <div align="right">
 <ul class="pagination justify-content-end" >
  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100
           navbar-search" action="{{url('/search1')}}" method="post" role="search">
              {{csrf_field()}}
            <div class="input-group">
              <input type="text" name="search"class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
               <span class="input-group-prepend">
                 <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
               </span>
              </div>
              </div>
          </form>
    </ul>
  </div>
  </div>
  <table id ="datatable" class="table table-bordered table-striped">
     <thead class="thead-dark">
  <tr>
      <th>Invoice</th>
      <th>Purchaser</th>
      <th>Distributor</th>
      <th>Reffered Distributor</th>
      <th>Order Date</th>
      <th>Order Total</th>
      <th>Percentage</th>
      <th>Commission</th>
      <th></th>
   </tr>
   <tr>
   </tr>
 </thead>
 <!-- @inject('provider','App\Http\Controllers\salesReportController') -->
 @foreach($countries as $order)

   <tr>
    <td>{{$order->invoice_number}}</td>
    <?php $p = salesReportController::getPurchaser($order->purchaser_id);?>
    <td><?php echo $p->first_name." ".$p->last_name;?></td>
    <td>{{salesReportController::getDistributor($p->referred_by)}}</td>
    <td>{{salesReportController::getTotalRefer($p->referred_by)}}</td>
    <td>{{$order->order_date}}</td>
    <td>{{salesReportController::getOrderTotal($order->id)}}</td>
    <?php 
    $n = salesReportController::getTotalRefer($p->referred_by);
    $tol = salesReportController::getOrderTotal($order->id);
    if ($n >=5 && $n<=10) {
      # code...
      $per =10;
    }elseif ($n >10 && $n<=20) {
      # code...
      $per = 15;
    }elseif ($n >20 && $n<=30) {
      # code...
      $per = 20;
    }elseif ($n >30) {
      # code...
      $per = 30;
    }
     else {
      # code...
      $per = 5;
    }
     ?>
     <td><?php echo $per."%"; ?></td>
     <td><?php echo ($per/100)*$tol?></td>
     <td>
     <form method="get">
      <button type="submit" name="view_btn" class="btn btn-primary" value="<?php echo $order->id?>" data-bs-toggle="modal" data-bs-target="yModal">
  View Item
</button></form>
</td>

   </tr>
   @endforeach
  </table>
 </div>
</div>
</div>


<?php
$items=[];
 if (isset($_GET['view_btn'])) {
  # code...
  
  $items = salesReportController::getItem($_GET['view_btn']);
  echo "<script> $(document).ready(function(){
      $('#myModal').modal('show');
  });</script>";
 }
?>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Invoice: </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <table id ="datatable" class="table table-bordered table-striped">
     <thead class="thead-dark">
  <tr>
      <th>SKU</th>
      <th>Product Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
   </tr>
   <tr>
   </tr>
 </thead>
 <!-- @inject('provider','App\Http\Controllers\salesReportController') -->
 
 @foreach($items as $item)
   <tr>
  <?php $product = salesReportController::getItemDetail($item->product_id);?>
    <td><?php echo $product->sku?></td>
    <td><?php echo $product->name;?></td>
    <td><?php echo $product->price;?></td>
    <td>{{$item->qantity}}</td>
    
    <td><?php echo ($item->qantity * $product->price); ?></td>
    <!-- <td>{{salesReportController::getDistributor($p->referred_by)}}</td>
    <td>{{salesReportController::getTotalRefer($p->referred_by)}}</td> -->
    

   </tr>
   @endforeach
  </table>
      </div>

    </div>
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
</body>
</html>