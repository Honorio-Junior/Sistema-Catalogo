<?php include('templates/header.php'); ?>


<section style="margin-bottom: 5rem; padding-top: 1rem;">
  <!-- produtos -->
  <div class="container py-3">

    <div class="row gap-3 justify-content-center">

      <?php if ($products) : ?>
        <?php foreach ($products as $item) : ?>
          <div class="card col-1" style="width: 18rem;">
            <img src='/src/img/bag.svg' class="card-img-top" alt="produto" style="height: 100px; padding-top: 10px;">
            <div class="card-body d-flex flex-column h-100">
              <h5 class="card-title"> <?php echo $item['name']  ?> </h5>
              <p class="card-text h-100"> <?php echo $item['desc']  ?> </p>
              <p class="card-text text-success">R$ <?php echo $item['value'] ?> </p>
              <a href="#" class="btn btn-primary mt-auto">Adicionar ao carrinho</a>
            </div>
          </div>
        <?php endforeach; ?>
        <?php else : ?>
          <p class="text-center">Nenhum produto encontrado!</p>
          <p class="text-center">Tente novamente...</p>
      <?php endif; ?>

    </div>

  </div>
  </div>

</section>


<?php include('templates/footer.php'); ?>
