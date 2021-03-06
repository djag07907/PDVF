<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Clientes</title>
    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875rem;
            font-weight: normal;
            line-height: 1.5;
            color: #151b1e;           
        }
        .table {
            display: table;
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-collapse: collapse;
        }
        .table-bordered {
            border: 1px solid #c2cfd6;
        }
        thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }
        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
        .table th, .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #c2cfd6;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #c2cfd6;
        }
        .table-bordered thead th, .table-bordered thead td {
            border-bottom-width: 2px;
        }
        .table-bordered th, .table-bordered td {
            border: 1px solid #c2cfd6;
        }
        th, td {
            display: table-cell;
            vertical-align: inherit;
        }
        th {
            font-weight: bold;
            text-align: -internal-center;
            text-align: left;
        }
        tbody {
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }
        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
        .izquierda{
            float:left;
        }
        .derecha{
            float:right;
        }
        #footer {
            bottom: 0;
            border-top: 0.1pt solid #aaa;
            }
            .page-number:before {
            content: "Pagina: " counter(page);
            }
    </style>
</head>
<body>
<div id="logo">
                <img src="../resources/img/cerbeus_com.png" alt="" id="imagen" width="100" height="100">
            </div> 
    <div>
        <h3>Listado de Clientes <span class="derecha">{{date('d/m/Y H:i:s')}}</span></h3>
    </div>
    <div id="footer">
            <div class="page-number"></div>
        </div>
    <div>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr> 
                    <th>Nombre del Cliente</th>
                    <th>Tipo de Documento</th>
                    <th>Numero de Documento</th>
                    <th>Direcci??n</th>
                    <th>Numero de Telefono</th>
                    <th>Correo Electronico</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $a)
                <tr>
                    <td>{{$a->nombre}}</td>
                    <td>{{$a->tipo_documento}}</td>
                    <td>{{$a->num_documento}}</td>
                    <td>{{$a->direccion}}</td>
                    <td>{{$a->telefono}}</td>
                    <td>{{$a->email}}</td>
                    
                </tr>
                @endforeach                               
            </tbody>
        </table>
    </div>
    <div class="izquierda">
        <p><strong>Total de registros: </strong>{{$cont}}</p>
        <p><strong>Usuario: </strong>{{Auth::user()->usuario}}</p>
    </div>    
</body>
</html>