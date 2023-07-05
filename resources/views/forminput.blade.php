<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text" name="text" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="select">Lokasi</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select" required="required">
        <option value="Bogor">Bogor</option>
        <option value="Jakarta">Jakarta</option>
        <option value="Depok">Depok</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Laki-laki"> 
          <label for="radio_0" class="custom-control-label">Laki-laki</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Perempuan"> 
          <label for="radio_1" class="custom-control-label">Perempuan</label>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Skill</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input" value="PHP"> 
          <label for="checkbox_0" class="custom-control-label">PHP</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="MySQL"> 
          <label for="checkbox_1" class="custom-control-label">MySQL</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox" id="checkbox_2" type="checkbox" class="custom-control-input" value="Javascript"> 
          <label for="checkbox_2" class="custom-control-label">Javascript</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox" id="checkbox_3" type="checkbox" class="custom-control-input" value="HTML"> 
          <label for="checkbox_3" class="custom-control-label">HTML</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="checkbox" id="checkbox_4" type="checkbox" class="custom-control-input" value="CSS"> 
          <label for="checkbox_4" class="custom-control-label">CSS</label>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>