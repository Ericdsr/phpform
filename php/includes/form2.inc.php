<form action="index.php" method="POST" class="col-md-9" enctype="multipart/form-data">
    <div class="mb-3" >
      <label for="exampleInputEmail1" class="form-label">Prénom</label>
      <input type="text" class="form-control" name="first_name">
    </div>
    <div class="mb-3" >
        <label for="exampleInputEmail1" class="form-label">Nom</label>
        <input type="text" class="form-control" name="last_name">
      </div>
      <div class="mb-3" >
        <label for="exampleInputEmail1" class="form-label">Age (18ans à 70)</label>
        <input type="number" class="form-control" min="18" max="70" name="age">
      </div>
      <div class="input-group" >
          <span class="input-group-text">Taille(1,26m à 3m)</span>
          <input type="number" class="form-control" step="0.01" min="1.26" max="3" name="taille">
        <span class="input-group-text">m</span>
      </div>
    <div class="mb-3 form-check" >
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="civility" value="Mr">
      <label class="form-check-label" for="exampleCheck1">homme</label>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="civility" value="Madame">
        <label class="form-check-label" for="exampleCheck1">femme</label>
      </div>
    <div>
        <h6> Connaisances</h6>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="html" value="html">
        <label class="form-check-label" for="exampleCheck1">HTML</label>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="css" value="css">
        <label class="form-check-label" for="exampleCheck1">CSS</label>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="javascript" value="javascript">
        <label class="form-check-label" for="exampleCheck1">JavaScript</label>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="php" value="php">
        <label class="form-check-label" for="exampleCheck1">PHP</label>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="mysql" value="mysql">
        <label class="form-check-label" for="exampleCheck1">MySQL</label>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="bootstrap" value="bootstrap">
        <label class="form-check-label" for="exampleCheck1">Bootstrap</label>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="symfony" value="sympfony">
        <label class="form-check-label" for="exampleCheck1">Sympfony</label>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="react" value="react">
        <label class="form-check-label" for="exampleCheck1">React</label>
      </div>
      <div class="mb-3 form-check">
        <input type="color" name="color" value="color">
        <label for="color"> Couleur preferer </label>
      </div>
      <div class="mb-3 form-check">
        <input type="date" name="date" value="date">
        <label for="date"> Date de naissance </label>
      </div>
      <div>
        <h6> joindre une image</h6>
    </div>
    <div class="mb-3 form-check">
        <input type="file" name="file" value="file">
        <label for="file"> Choisir un fichier </label>
      </div>
    <button type="submit" class="btn btn-primary" name="submit_more" value="Submit">Enregistrer les données</button>
  </form>
