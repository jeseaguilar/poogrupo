<?php 


 if(isset($_POST['add_teacher_info']))
 {
	 //$add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender
	  $add_t_fullname = $_POST['add_t_fullname'];
	 $add_t_address = $_POST['add_t_address'];
	 $add_t_email = $_POST['add_t_email'];
	 $add_t_username = $_POST['add_t_username'];
	 $add_t_pass = $_POST['add_t_pass'];
	 $add_t_father = $_POST['add_t_father'];
	 $add_t_mother = $_POST['add_t_mother'];
	 $add_t_dob = $_POST['add_t_dob'];
	 $add_t_qualification = $_POST['add_t_qualification'];
	 $add_t_contact = $_POST['add_t_contact'];
	 $add_t_staff = $_POST['add_t_staff'];
	 $add_t_gender = $_POST['add_t_gender'];
	 if($add_t_fullname=="" OR $add_t_address=="" OR $add_t_email=="" OR $add_t_username=="" OR $add_t_pass=="" OR $add_t_father=="" OR $add_t_mother=="" OR $add_t_dob=="" OR $add_t_qualification=="" OR $add_t_contact=="" OR $add_t_staff=="" OR $add_t_gender=="")
	 {
		 echo "<script>alert('Some Field are missing....');</script>";
	 }
	 else
	 {
	
	 
	 $add_done = $ravi->add_teacher($add_t_fullname,$add_t_address,$add_t_email,$add_t_username,$add_t_pass,$add_t_father,$add_t_mother,$add_t_dob,$add_t_qualification,$add_t_contact,$add_t_staff,$add_t_gender);
	 if($add_done==true)
	 {
		 echo "<script>window.location='home.php?teacher=teacher-information';</script>";
	 }
	 else
	 {
		 echo "<script>alert('unsuccess add teacher information');</script>";
	 }
 }
 }

?>
<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">principio</a></li>
			<li class="active">
				<?php if(isset($_GET['ravi'])){ echo strtoupper($page=$_GET['ravi']); } ?>
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">
			<?php echo strtoupper($_GET['ravi']); ?>
		</h2>

		<div class="grid-1">
			<div class="form-body">
				<form class="form-horizontal" method="post">
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">nombre completa</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="add_t_fullname" placeholder="nombre"> </div>
					</div>
					<div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">dirreccion</label>
						<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="add_t_address" placeholder="direccion del maestro"> </div>
					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_email" placeholder="Email"> </div>

					</div>
				<div class="form-group"> <label for="address" class="col-sm-2 control-label">Usuario</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_username" placeholder="Usuario"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-9"> <input type="password" class="form-control" name="add_t_pass" placeholder="Password"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">1apellido</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_father" placeholder="apellido 1"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">2apellido</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_mother" placeholder="apellido 2"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">DOB</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_dob" placeholder="Dia del nacimiento"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">calificaciones</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_qualification" placeholder="grado obtenido"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">Contact</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_contact" Placeholder="numero de contacto"> </div>

					</div>
					<div class="form-group"> <label for="address" class="col-sm-2 control-label">area de conocimiento</label>
						<div class="col-sm-9"> <input type="text" class="form-control" name="add_t_staff" placeholder="tipo"> </div>

					</div>
					<div class="form-group">


						<select id="selector1" class="form-control1" name="add_t_gender">
						   <option>genero</option>
							<option value="Male">Masculino</option>
						   <option value="Female">Femenino</option>
							</select>
					</div>


					<div class="col-sm-offset-2"> 
						<input type="submit" class="btn btn-default" name="add_teacher_info" value ="agregar">
						</div>
				</form>
			</div>

		</div>


	</div>