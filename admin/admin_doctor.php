<h2 class="sub-header">Administración doctores</h2>
          <center> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Agregar doctor</button> </center>
          <div class="space20"></div>
          <div class="row">
            <div class="col-sm-9"></div>
            <div class="col-sm-3">
           <input type="text" class="form-control" placeholder="Search">
           </div>
          </div>
           <div class="space20"></div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Categoría</th>
                  <th>Seleccionar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="../index.php?opcion=perfil" target="_blank">Dra. Eira Rangel</a></td>
                  <td>Bariatría</td>
                  <td><input type="checkbox"></td>
                </tr>
                <tr>
                  <td><a href="../index.php?opcion=perfil" target="_blank">Dr. Orlando Macías</a></td>
                  <td>Dentista</td>
                  <td><input type="checkbox"></td>
                </tr>
                <tr>
                  <td><a href="../index.php?opcion=perfil" target="_blank">Dr. Hamlet</a></td>
                  <td>Pediatría</td>
                  <td><input type="checkbox"></td>
                </tr>
                <tr>
                  <td><a href="../index.php?opcion=perfil" target="_blank">Dr. Max Valenzuela</a></td>
                  <td>Ginecología</td>
                  <td><input type="checkbox"></td>
                </tr>
              </tbody>
            </table>
            <div class="row">
            <div class="col-sm-8">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#edit_doc">Editar</button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#del_doctor">Eliminar</button></div>
            <div class="col-sm-4">
             <ul class="pagination">
              <li><a href="#">&laquo;</a></li>
              <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
             </div>
            </div>
            
          </div>
        </div>
      </div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Registrar doctor o negocio</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control focus" id="inputEmail3">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Dirección</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
    <div class="fileinput fileinput-new" data-provides="fileinput">
    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
      <img src="../images/img_default.PNG">
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
    <div>
      <span class="btn btn-default btn-file"><span class="fileinput-new">Selecciona imagen principal</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
      <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
  </div>
</div>
  </div>
  <div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
        Especialidades clínicas
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidad clínicas</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidades Quirúrgicas</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidades Médico-Quirúrgicas</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidades de Laboratorio o Diagnósticas</a></li>
      </ul>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
      Especialidades
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidad 1</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidad 2</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidad 3</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidad 4</a></li>
    </ul>
  </div>
</div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Prioridad
        </label>
      </div>
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="del_doctor">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span></button>
        <h4 class="modal-title">Eliminar doctor</h4>
      </div>
      <div class="modal-body">
        ¿Esta seguro de realizar la siguiente acción?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="edit_doc">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span></button>
        <h4 class="modal-title">Modificar doctor o negocio</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control focus" id="inputEmail3" value="Nombre doctor dummy">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Dirección</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" value="Vis ad timeam vivendo necessitatibus, viris nonumy abhorreant id vel #34566">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
  <iframe width="350" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?client=safari&q=phoenix+az&oe=UTF-8&ie=UTF8&hq=&hnear=Phoenix,+Maricopa,+Arizona&gl=us&ll=33.448377,-112.074037&spn=0.040679,0.07699&z=14&output=embed"></iframe><br><small><a href="http://maps.google.com/maps?client=safari&q=phoenix+az&oe=UTF-8&ie=UTF8&hq=&hnear=Phoenix,+Maricopa,+Arizona&gl=us&ll=33.448377,-112.074037&spn=0.040679,0.07699&z=14&source=embed" style="color:#0000FF;text-align:left">Alargar Mapa</a></small>
  </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3">Ut simul appellantur cum, ut reque legimus ocurreret ius. Nec ne aliquam scriptorem, mundi primis recteque id sed, pri laudem meliore te. Eam nihil officiis conceptam ei, pro ex eros velit invenire. Zril petentium an est, amet putant eum eu, usu iudico possim voluptatum ad. An sea vidisse alienum. Nam modo agam eius ea, duo paulo propriae ei. Te case illud his, duo invenire vituperata liberavisse ex. Vix vero persius ut. Te invenire instructior mea, vis inani primis facilisis at, minimum molestie complectitur sit ea. Idque corpora pertinacia usu cu, vel eu possim detraxit gloriatur.</textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
    <div class="fileinput fileinput-exists" data-provides="fileinput">
    <div class="fileinput-exists thumbnail" style="width: 200px; height: 150px;">
      <img src="../images/macias.jpeg">
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
    <div>
      <span class="btn btn-default btn-file"><span class="fileinput-new">Selecciona imagen principal</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
      <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
  </div>
</div>
  </div>
  <div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
        Especialidades clínicas
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidad clínicas</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidades Quirúrgicas</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidades Médico-Quirúrgicas</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidades de Laboratorio o Diagnósticas</a></li>
      </ul>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
      Especialidad 2
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidad 1</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidad 2</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidad 3</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Especialidad 4</a></li>
    </ul>
  </div>
</div>
  </div>
  <div class="form-group" id="scroll_horizontal">
    <div class="item-box" style="width: 100px; height: 100px; float:left; margin:15px;">
    <div class="media-container">
      <img src="../images/macias.jpeg" >
      <a href="#" class="icon-left"><i class="fa fa-search-plus"></i></a>
      <a href="#" class="icon-right"><i class="fa fa-times"></i></a>
    </div>
  </div>
  <div class="item-box" style="width: 100px; height: 100px; float:left; margin:15px;">
    <div class="media-container">
      <img src="../images/imss.jpg">
      <a href="#" class="icon-left"><i class="fa fa-search-plus"></i></a>
      <a href="#" class="icon-right"><i class="fa fa-times"></i></a>
    </div>
  </div>
  <div class="item-box" style="width: 100px; height: 100px; float:left; margin:15px;">
    <div class="media-container">
      <img src="../images/imss2.jpg">
      <a href="#" class="icon-left"><i class="fa fa-search-plus"></i></a>
      <a href="#" class="icon-right"><i class="fa fa-times"></i></a>
    </div>
  </div>
  <div class="item-box" style="width: 100px; height: 100px; float:left; margin:15px;">
    <div class="media-container">
      <img src="../images/max.jpg">
      <a href="#" class="icon-left"><i class="fa fa-search-plus"></i></a>
      <a href="#" class="icon-right"><i class="fa fa-times"></i></a>
    </div>
  </div>
  <div class="item-box" style="width: 100px; height: 100px; float:left; margin:15px;">
    <div class="media-container">
      <img src="../images/melissa.jpg">
      <a href="#" class="icon-left"><i class="fa fa-search-plus"></i></a>
      <a href="#" class="icon-right"><i class="fa fa-times"></i></a>
    </div>
  </div>
  <div class="item-box" style="width: 100px; height: 100px; float:left; margin:15px;">
    <div class="media-container">
      <img src="../images/hector.jpg">
      <a href="#" class="icon-left"><i class="fa fa-search-plus"></i></a>
      <a href="#" class="icon-right"><i class="fa fa-times"></i></a>
    </div>
  </div>
  </div>
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" checked> Prioridad
        </label>
      </div>
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
