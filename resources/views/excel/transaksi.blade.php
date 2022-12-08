<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                <a href="/transaksi/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                <table style="width:100%">
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
    </body>

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
  
</html>
