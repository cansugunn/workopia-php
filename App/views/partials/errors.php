   <?php if (isset($errors)) : ?>
       <?php foreach ($errors as $error) : ?>
           <div class="message bg-red-100 text-red-700 p-3 rounded my-3 border border-red-200"><?= $error ?></div>
       <?php endforeach; ?>
   <?php endif; ?>