<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="mginc" />
	<title>Listado de producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body class="pt-2">
<section>
    <div class="container">
        <div class="card">
            <div class="card-header">Lista de productos<a href="<?php echo base_url('producto/nuevo'); ?>" class="btn btn-primary btn-sm float-right">Nuevo</a></div>
            <div class="card-body">
                <div class="">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>   
                        <tbody>
                        <?php
                            foreach($lista as $index=>$producto){
                        ?>
                            <tr>
                                <td><?php echo $producto['codigo']; ?></td>
                                <td><?php echo $producto['nombre']; ?></td>
                                <td><?php echo $producto['precio']; ?></td>
                                <td><?php echo $producto['cantidad']; ?></td>
                                <td>
                                <a href="<?php echo base_url('producto/editar/'.$producto['id']); ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="<?php echo base_url('producto/eliminar/'.$producto['id']); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>