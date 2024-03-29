<?php

session_start();
include_once 'components/component.php';
include_once 'dataBase/funciones.php';

$checkboxValue = $_GET['catg'];
$checkboxValue2 = $_GET['tipo'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Línea de ropa moderna con una excelente calidad" />
  <title>Catálogo</title>

  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/header.css" />
  <link rel="stylesheet" href="assets/css/cards.css" />
  <link rel="stylesheet" href="assets/css/footer.css" />
  <link rel="stylesheet" href="assets/css/login.css" />
  <link rel="stylesheet" href="assets/css/catalogo.css" />
</head>

<body>

  <!-- HEADER -->
  <?php echo navbar(); ?>

  <!-- Formulario del Login -->
  <?php echo formLogin(); ?>

  <div class="container-catg">
    <!-- Filtro -->
    <form id="form-check-filters">
      <aside class="container-filtro">
        <div class="show-filter" id="bg-filter"></div>
        <p id="show-filter">Filtro</p>
        <ul class="container-items-filtro" id="container-filtro">
          <li class="items-filtro">
            <span>Categoría</span>
            <ul class="select-items ks-cboxtags">
              <li>
                <input type="checkbox" class="check-filter" id="1" name="id_categoria[]" value="1" /><label for="1">Camisas</label>
              </li>
              <li>
                <input type="checkbox" class="check-filter" id="2" name="id_categoria[]" value="2" /><label for="2">Camisetas</label>
              </li>
              <li>
                <input type="checkbox" class="check-filter" id="3" name="id_categoria[]" value="3" /><label for="3">Buzos</label>
              </li>
              <li>
                <input type="checkbox" class="check-filter" id="4" name="id_categoria[]" value="4" /><label for="4">Jean</label>
              </li>
            </ul>
          </li>
          <li class="items-filtro">
            <span>Género</span>
            <ul class="select-items ks-cboxtags">
              <li>
                <input type="checkbox" class="check-filter" id="13" name="id_seccion_para[]" value="1" /><label for="13">Mujer</label>
              </li>
              <li>
                <input type="checkbox" class="check-filter" id="14" name="id_seccion_para[]" value="2" /><label for="14">Hombre</label>
              </li>
            </ul>
          </li>
          <li class="items-filtro">
            <span>Precio</span>
            <ul class="select-items ks-cboxtags">
              <li>
                <input type="checkbox" class="check-filter" id="5" name="precio[]" value="#" /><label for="5">Mayor precio</label>
              </li>
              <li>
                <input type="checkbox" class="check-filter" id="6" name="precio[]" value="#" /><label for="6">Menor precio</label>
              </li>
            </ul>
          </li>
          <li class="items-filtro">
            <span>Tallas</span>
            <ul class="select-items ks-cboxtags filtro-tallas">
              <li>
                <input type="checkbox" class="check-filter" id="7" name="talla[]" value="S" /><label for="7">S</label>
              </li>
              <li>
                <input type="checkbox" class="check-filter" id="8" name="talla[]" value="L" /><label for="8">L</label>
              </li>
              <li>
                <input type="checkbox" class="check-filter" id="9" name="talla[]" value="M" /><label for="9">M</label>
              </li>
              <li>
                <input type="checkbox" class="check-filter" id="10" name="talla[]" value="XL" /><label for="10">XL</label>
              </li>
            </ul>
          </li>
          <li class="items-filtro">
            <span>Manga</span>
            <ul class="select-items ks-cboxtags">
              <li>
                <input type="checkbox" class="check-filter" id="11" name="" value="#" /><label for="11">Manga corta</label>
              </li>
              <li>
                <input type="checkbox" class="check-filter" id="12" name="" value="#" /><label for="12">Manga larga</label>
              </li>
            </ul>
          </li>
        </ul>
      </aside>
    </form>

    <!-- Productos -->
    <ul class="container-productos" id="products">
      <!-- Items de los productos -->

    </ul>
  </div>

  <!-- Barra de Navegación-->
  <div class="barra_navegacion">
    <nav aria-label="Page navigation example">
      <ul class="pagination">

        <a class="page-link" href="">
          <li class="page-item"><i class="fas fa-angle-left"></i> Anterior</li>
        </a>
        <a id="pags" class="page-link" href="">
          <li class="page-item">1</li>
        </a>
        <a class="page-link" href="">
          <li class="page-item">Siguiente <i class="fas fa-angle-right"></i></li>
        </a>

      </ul>
    </nav>
  </div>

  <!-- Footer -->
  <?php echo footer(); ?>

  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="assets/js/menu-header.js"></script>
  <script src="assets/js/form-login.js"></script>
  <script src="assets/js/item-favorites.js"></script>
  <script src="assets/js/show-filter.js"></script>
  <script src="assets/js/filtro.js"></script>
  <script src="assets/js/add-favorites.js"></script>
  <script src="assets/js/add-carrito.js"></script>


  <script>
    let genero = <?php echo json_encode($checkboxValue); ?>;
    let categoria = <?php echo json_encode($checkboxValue2); ?>

    if (genero) {
      document.getElementById(`${genero}`).checked = true;
    }

    if (categoria) {
      document.getElementById(`${categoria}`).checked = true;
    }
  </script>
</body>

</html>