<!doctype html>
<html lang="en">
  <head>
  	<title>Smart Associtation Transformation - SAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" type="text/css" href="{{ asset('/homepage/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />

	</head>
	<body>
    <div class="container">
        <div class="row justify-content-center">
            <div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>
            <h3 style="text-align: center">Data ke {{$awal+1}} sampai dengan {{$akhir}}</h3>
            <div class="row">
                <div class="col-6">
                    <form method="POST" enctype="multipart/form-data" action="/transaksi/export_excel">
                        @csrf
                        <input type="hidden" class="form-control" name="awal" value="{{$awal}}" required>
                        <input type="hidden" class="form-control" name="akhir" value="{{$akhir}}" required>
                        <button type="submit" class="btn btn-success" value="Create">EXPORT EXCEL</button>
                    </form>
                </div>
                <div class="col-6" style="text-align: right">
                    <a class="btn btn-info" href="/"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
            <br/>

            <div class="container" style="width: 100%; height: 350px; overflow-y: scroll;">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width:40%">Item</th>
                            @foreach ($dataProduct as $dtProduct)
                                <th>{{$dtProduct->nama}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;    
                        @endphp
                        @foreach ($data as $key => $dt)
                            <tr>
                                <td>{{$no++}}</td>
                                <td style="width:100px">
                                    @php
                                        $exItem= explode('#',$dt->item);
                                    @endphp
                                    {{-- Tampilkan Item --}}
                                    @foreach ($exItem as $item)
                                        {{$item}},
                                    @endforeach
                                </td>
                                @foreach ($dataProduct as $dtProduct)
                                    <td>
                                        {{-- Tampilkan Item --}}
                                        @php
                                            $showStatus = 0;
                                        @endphp
                                        @foreach ($exItem as $itemBeli)
                                            @php
                                                if ($dtProduct->nama == $itemBeli){
                                                    $showStatus = 1;
                                                }
                                            @endphp
                                        @endforeach
                                        {{$showStatus}}

                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('/homepage/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/homepage/js/popper.js') }}"></script>
    <script src="{{ asset('/homepage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/homepage/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/homepage/js/main.js') }}"></script>
    <script src="{{ asset('/homepage/js/main.js')}}"></script>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        $('#example').DataTable();
      });
    </script>
  

	</body>
</html>

