<div id="targetName">
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <div class="row">
      <div class="col-sm-12"> 
        <div class="formulaire">
          <form method="POST" class="form" action="#targetName">
        <div class="form-group">
          <label for="name">Votre pseudo</label>
            <input type="text" name="pseudo" required placeholder="Entrer votre pseudo" class="form-control">
        </div>
        <div class="form-group">
          <label for="commentaire">Votre message</label>
            <textarea class="form-control" name="commentaire" required></textarea>
        </div>
            <input name="code_produit" type="hidden" value="<?php echo $info ?>">  
              <button type="submit" class="btn-primary btn" name="envoyer" value="envoyer">Envoyer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>