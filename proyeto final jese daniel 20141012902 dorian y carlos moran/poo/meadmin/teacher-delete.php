<?php 



?>

<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">Home</a></li>
			<li class="active">
				<?php if(isset($_GET['teacher'])){ echo strtoupper($page=$_GET['teacher']); } ?>
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">
			<?php echo strtoupper($_GET['teacher']); ?>
		</h2>

	
			<div class="tables">


				<table class="table table-bordered ">

					<thead>
						<tr>
							<th>#</th>
							<th>foto</th>
							<th>F.Nombre</th>
							<th>direccion</th>
							<th>Email</th>
							<th>U.nombre</th>
							<th>Pass</th>
							<th>1 apellido</th>
							<th>2 apellido</th>
							<th>DOB</th>
							<th>calificacion</th>
							<th>Contacto</th>
							<th>Genero</th>
							<th>Aaccion</th>
						</tr>
					</thead>
					<tbody>

						<?php $teacher_dis_admin = $ravi->teacher_info_display_admin();
													$t_sn = 1;
													while($teacher_info_admin =$teacher_dis_admin->fetch_assoc())					{
														
													
																		?>


						<tr>
							<th scope="row">
								<?php echo $t_sn; ?>
							</th>
							<th></th>
							<td>
								<?php echo $teacher_info_admin['t_fullname']; ?>
							</td>
							<td>
								<?php echo $teacher_info_admin['t_address']; ?>
							</td>
							<td>
								<?php echo $teacher_info_admin['t_email']; ?>
							</td>
							<td>
								<?php echo $teacher_info_admin['t_username']; ?>
							</td>
							<td>
								<?php echo $teacher_info_admin['t_pass']; ?>
							</td>
							<td>
								<?php echo $teacher_info_admin['t_father']; ?>
							</td>
							<td>
								<?php echo $teacher_info_admin['t_mother']; ?>
							</td>
							<td>
								<?php echo $teacher_info_admin['t_dob']; ?>
							</td>
							<td>
								<?php echo $teacher_info_admin['t_qualification']; ?>
							</td>
							<td>
								<?php echo $teacher_info_admin['t_contact']; ?>
							</td>
							<td>
								<?php echo $teacher_info_admin['t_gender']; ?>
							</td>
							<td>
								
				<a href="home.php?teacher=teacher-del&teacherid=<?php echo $teacher_info_admin['t_id']; ?>" class="btn red">borrar</a>
					</td>
						</tr>
						<?php $t_sn++; } ?>
					</tbody>

				</table>

			</div>
		</div>


	</div>
	<!--//graph-visual-->

