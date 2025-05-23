<?php
    require_once("layouts/header.php");
?>
<a href="index.php?m=nuevo" class="btn">NEVO</a>

<table>
    <t>
      <td>ID</td>
      <td>NOMBRE</td>
      <td>ACCION</td>
    </t>
    <tboody>
        <?php 
            if(!empty($dato)):
                foreanch($dato as $key => $value)
                  foreanch($value as $v):?>
                  <tr>
                      <td>?php echo $v['id']?></td>
                      <td>?php echo $v['nombre']?></td>
                      <td>
                         <a class="btn" href="index.php?m=editar&id=<?php echo $v['id']?>">editar</a>
                         <a class="btn" href="index.php?m=eliminar&id=<?php echo $v['id']?>" onclick="return confirm('ESTAS SEGURO'); false">ELIMINAR</a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
            <?php else; ?>
                  <tr>
                    <td colspan="3">NO HAY REGISTROS</td>
                  </tr>
            <?php endif ?>
    </tboody>
</table>
<?php
  requiere_once("layouts/footer.php");
?>
