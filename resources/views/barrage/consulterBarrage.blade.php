@extends('layouts.menu')

@section('content')

 <script type="text/javascript">
        function printContent(e1){
            var restorepage=document.body.innerHTML;
            var printcontent=document.getElementById(e1).innerHTML;
            document.body.innerHTML=printcontent;


            window.print();
            document.body.innerHTML=restorepage;

        }


      function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
    </script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion des barrages
                <small>Gestion des barrages</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li class="active"><a href="#">Barrages</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Liste des barrages</h3>

               <div id="div1" class="col-xs-12">
          <button type="button" class="btn btn-primary pull-right" onclick="printContent('div1')" style="margin-left: 900px;margin-top: -10px"> <i class="fa fa-print"></i> imprimer</button>
          
        </div>
        <div style="" >
                <div class="input-group-btn" >
                  <button type="button"   style="margin-left: 960px;margin-top: 5px;width: 95px;" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Exporter
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu" style="margin-left: 960px;">
                    <li><a href="#" onclick="HTMLtoPDF()">PDF</a></li>
                    <li><a href="#" onclick="exportTableToExcel('example1', 'barrage')">Excel</a></li>

                    
                  </ul>
                </div>
                <!-- /btn-group -->
            
              </div>
            </div>
           <div class="row no-print">
        
      </div>
            
            <div class="box-body" id="HTMLtoPDF">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                   <tr>
                        <th>Nom Francais</th>
                        <th>Stock</th>
                        <th>Apports</th>
                        <th>Date </th>
                        <th>Bassin_versant</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Cap_tot_act</th>
                    </tr>
                <tbody>
              
                    @foreach($tab as $value)
                        <tr>
                            <td>{{ $value->Nom_Fr}}</td>
                            <td>{{$value->stock}}</td>
                            <td>{{$value->apports }}</td>
                            <td>{{$value->Date }}</td>
                            <td>{{$value->Bassin_versant }}</td>
                            <td>{{$value->Latitude}}</td>
                            <td>{{$value->Longitude }}</td>
                            <td>{{$value->Cap_tot_act}}</td>

                                
                        </tr>
                        @endforeach
               </tbody>
                <tfoot>
                   <tr>
                        <th>Nom Francais</th>
                        <th>Stock</th>
                        <th>Apports</th>
                        <th>Date </th>
                        <th>Bassin_versant</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Cap_tot_act</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>


    
<script src="js/jspdf.js"></script>
    <script src="js/jquery-2.1.3.js"></script>
    <script src="js/pdfFromHTML.js"></script>
<script src="js/jspdf.js"></script>
    <script src="js/jquery-2.1.3.js"></script>
    <script src="js/pdfFromHTML.js"></script>
    <!-- /.content-wrapper -->

@endsection