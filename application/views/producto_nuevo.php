<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="mginc" />
	<title>Nuevoproducto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body class="pt-2">
<section>
    <div class="container">
        <div class="card">
            <div class="card-header">Nuevo Producto</div>
            <div class="card-body">
                <div class="">
                    <form method="post" action="<?php echo base_url('producto/insertar');?>">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Codigo</label>
                            <input type="text" name="codigo" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Precio</label>
                            <input type="text" name="precio" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Cantidad</label>
                            <input type="text" name="cantidad" class="form-control" />
                        </div>
                        <input type="submit" class="btn btn-success btn-sm" value="Crear" />
                        <a href="<?php echo base_url(); ?>" class="btn btn-warning btn-sm">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>