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
    <!-- Modal create -->
<div class="modal fade" id="Modalcrear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Reserva</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route("Reserva.create")}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">CC cliente</label>
            <input type="text" class="form-control" id="" name="id_cliente">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nombre del cliente</label>
            <input type="text" class="form-control" id="" name="	Nombre_cliente">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Numero de Habitacion</label>
            <input type="text" class="form-control" id="" name="N_habitacion">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fecha de reserva</label>
            <input type="date" class="form-control" id="" name="F_reserva">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Monto</label>
            <input type="text" class="form-control" id="" name="pago">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fecha de ingreso</label>
            <input type="date" class="form-control" id="" name="F_ingreso">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">fecha de salida</label>
            <input type="date" class="form-control" id="" name="F_salida">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark">Guardar</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
        </form>
    </div>
  </div>
</div>
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Modalcrear">Crear Nueva Reserva</button>
    <div class="d-flex justify-content-center gap-3 p-5 table-responsive">
      <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark">
          <tr>
            <th scope="col">id cliente</th>
            <th scope="col">Nombre del cliente</th>
            <th scope="col">Numero de habitacion</th>
            <th scope="col">Fecha de reserva</th>
            <th scope="col">Monto</th>
            <th scope="col">Fecha de ingreso</th>
            <th scope="col">fecha de salida</th>
            <th scope="col"></th>
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
              <a href="" data-bs-toggle="modal" data-bs-target="#Modaledit" class="btn btn-dark btn-sm"><i class="fa-solid fa-user-pen" style="color:green;"></i></a>
            </td>
            <td>
              <a href="" class="btn btn-dark btn-sm"><i class="fa-regular fa-user-xmark" style="color: #ff0000;"></i></a>
            </td>
<!-- Modal edit -->
<div class="modal fade" id="Modaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cambiar Reserva</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @csrf
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">CC cliente</label>
            <input type="text" class="form-control" id="" name="id_cliente">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nombre del cliente</label>
            <input type="text" class="form-control" id="" name="id_cliente">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Numero de Habitacion</label>
            <input type="text" class="form-control" id="" name="N_habitacion">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fecha de reserva</label>
            <input type="date" class="form-control" id="" name="F_reserva">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Monto</label>
            <input type="text" class="form-control" id="" name="pago">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fecha de ingreso</label>
            <input type="date" class="form-control" id="" name="F_ingreso">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">fecha de salida</label>
            <input type="date" class="form-control" id="" name="F_salida">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark">Editar</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
        </form>
    </div>
  </div>
</div>
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