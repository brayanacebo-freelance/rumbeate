<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Registro
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th>Cédula</th>
                                <th>Sexo</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Ciudad</th>
                                <th>Celular</th>
                                <th>Fecha de nacimiento</th>
                                <th>Archivo</th>
                                <th>Numero de factura</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $registro) : ?>
                            <tr class="">
                                <td><?php echo $registro->cedula ?></td>
                                <td><?php echo $registro->sexo ?></td>
                                <td><?php echo $registro->nombre ?></td>
                                <td><?php echo $registro->apellidos ?></td>
                                <td><?php echo $registro->email ?></td>
                                <td><?php echo $registro->ciudad ?></td>
                                <td><?php echo $registro->celular ?></td>
                                <td><?php echo $registro->fecha_nacimiento ?></td>
                                <?php if($registro->archivo): ?>
                                    <td><a href="<?php echo $registro->archivo ?>" target="_blank">Ver Archivo</a></td>
                                <?php endif; ?>
                                <?php if(!$registro->archivo): ?>
                                    <td><label style="color: red">SIN IMAGEN</label></td>
                                <?php endif; ?>
                                <td><?php echo $registro->numero_factura ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
</div>

<script>
jQuery(document).ready(function() {
    EditableTable.init();
});
</script>

