
<main class='col-md-9 ms-sm-auto col-lg-10 px-md-4'>  
    <h2>Section title</h2>
        <div class='btn-toolbar mb-2 mb-md-0'>
            <table class='table table-striped table-sm'>
                <thead class= thead-dark>
                    <tr>
                    <th scope=col>#</th>
                    <th scope=col>Nombre</th>
                    <th scope=col>Apellidos</th>
                    <th scope=col>Nombre de usuario</th>
                    <th scope=col>Tipo</th>
                    <th scope=col>Contraseña</th>
                    <th scope=col>Estado</th>
                    <th scope=col>Imagen del Usuario</th>
                    <th scope=col>Editar</th>
                    <th scope=col>Borrar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                $registros=$usuario->read_all();
                foreach ($registros as $usu) {
                ?>
                    <tr>
                    <th scope=row><?php echo $usu->Id;?></th>
                    <td><?php echo $usu->Nombre;?></td>
                    <td><?php echo $usu->Apellido;?></td>
                    <td><?php echo $usu->Username;?></td>
                    <td><?php echo $usu->Tipo;?></td>
                    <td><?php echo $usu->Pass;?></td>
                    <td><?php echo $usu->Estado;?></td>
                    <td><img src="../../../back-end/imagenes/<?php echo $usu->Imagen?>" alt="<?php echo $usu->Imagen?>" width="100px"></td>
                    <td><a href="index.php?edit&Id=<?php echo $usu->Id?>">Editar</a></td>
                    <td><a href="index.php?delete&Id=<?php echo $usu->Id?>">Borrar</a></td>
                    </tr>
                <?php
                };
                ?>
                </tbody>
            </table>
        </div>      
    </main>
</div>
</div>"
        
