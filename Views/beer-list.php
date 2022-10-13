<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de cervezas</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>#</th>
                         <th>Tipo</th>
                         <th>Nombre</th>
                         <th>IBU</th>
                         <th>Precio</th>
                    </thead>
                    <tbody>                         
                         <?php
                                foreach($beerList as $beer)
                                {
                                    echo "<tr>";
                                    echo "<td>".$beer->GetBeerId()."</td>";
                                    echo "<td>".$beerTypesList[$beer->GetBeerTypeId()]."</td>";
                                    echo "<td>".$beer->GetName()."</td>";
                                    echo "<td>".$beer->GetIbu()."</td>";
                                    echo "<td>".$beer->GetPrice()."</td>";
                                    echo "</tr>";
                                }
                         ?>
                    </tbody>
               </table>
          </div>
     </section>
</main>