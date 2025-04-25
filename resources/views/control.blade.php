<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d73986632c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/tablas.css')}}">
    <title>Gestor de Reservas</title>
</head>
<body>
    <h1 class="text-center p-3">Gestor de Reservas</h1>
    <div class="d-flex justify-content-center gap-3 p-5 table-responsive">
      <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark">
          <tr>
            <th scope="col">id cliente</th>
            <th scope="col">Nombre del cliente</th>
            <th scope="col">codigo de de habitacion</th>
            <th scope="col">Fecha de reserva</th>
            <th scope="col">Monto</th>
            <th scope="col">Fecha de ingreso</th>
            <th scope="col">fecha de salida</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="table-success">
          @foreach ($datos as $item)
          <tr>
            <td>{{$item->id_cliente}}</td>
            <td>{{$item->Nombre_cliente}}</td>
            <td>{{$item->N_habitacion}}</td>
            <td>{{$item->F_reserva}}</td>
            <td>${{$item->pago}}COP</td>
            <td>{{$item->F_ingreso}}</td>
            <td>{{$item->F_salida}}</td>
            <td>
              <a href="" class="btn btn-dark btn-sm"><i class="fa-solid fa-user-pen" style="color:green;"></i></a>
              <br>
              <a href="" class="btn btn-dark btn-sm"><i class="fa-regular fa-user-xmark" style="color: #ff0000;"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>   
      <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark">
          <tr>
            <th scope="col">Numero de habitacion</th>
            <th scope="col">Tipo de habitacion</th>
            <th scope="col">Disponibilidad</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="table-success">
          @foreach ($datosH as $Item )
          <tr>
            <td>{{$Item->N_habitacion}}</td>
            <td>{{$Item->tipo_habitacion}}</td>
            <td>{{$Item->disponibilidad}}</td>
            <td>
              <a href="" class="btn btn-dark btn-sm"><i class="fa-solid fa-user-pen" style="color:green;"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>