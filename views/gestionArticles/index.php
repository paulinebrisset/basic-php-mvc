<h2>Gérer mes articles</h2>
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr class="table-active">
                    <th scope="col">Numéro</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Etat de publication</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $articles) {
                    if ($articles['publie'] == 0) { 
                        echo ('<tr class="table-danger">');
                    } else {
                        echo ("<tr>");
                    }?>
                        <th scope="row"><?php echo $articles['id'] ?></th>
                        <td><?php echo $articles['titre'] ?></td>
                        <td><?php echo $articles['categorie'] ?></td>
                        <td><?php echo $articles['publie'] ?></td>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>


    </div>
</div>