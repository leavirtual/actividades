
	<nav class="top-bar" data-topbar role="navigation">
	
	  <ul class="title-area">
	    <li class="name">
	
	      <h1><a href="#">
		      <img src="http://leavirtual.com/assets/img/LeavVirtualLogo_web.png" width="50%">
		      </a></h1>
	    </li>
	
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  </ul>
	
	  <section class="top-bar-section">
	    <!-- Right Nav Section -->
	    <ul class="right">
<!-- 	      <li class="active"><a href="#">Right Button Active</a></li> -->
	      <li class="has-dropdown">
	        <a href="#">Materias</a>
	        <ul class="dropdown">
		        
		      <?php
			  mysqli_set_charset( $con, 'utf8');
			   $get_materiasNAV = mysqli_query($con,"SELECT 	unidades.unidad_id,	
			   unidades.unidad_num,
			   unidades.unidad_titulo,
			   unidades.unidad_proposito,
			   unidades.unidad_desempeno,
			   unidades.unidad_temario,
			   unidades.materia_numero,
			   materias.cuatrimestre_num,	   
			   materias.materia_nombre,
			   materias.modulo_num,
			   materias.materia_id 
			   FROM unidades
			   RIGHT JOIN materias ON  unidades.materia_numero = materias.materia_id");
		     
		        while($mat_selNAV = mysqli_fetch_array($get_materiasNAV)){
			
				echo ' <li id="'.$mat_selNAV['unidad_id'].'"><a href="et.php?parent='.$mat_selNAV['unidad_id'].'">'.$mat_selNAV['materia_nombre'].' Unidad '.$mat_selNAV['unidad_num'].'</a></li>';
				}
			 
			  ?>
	          
	        </ul>
	      </li>
	      
	      <li class="has-dropdown">
	        <a href="#">Menu</a>
	        <ul class="dropdown">
		        
	          <li><a href="temarios.php">Termario</a></li>
	          <li class=""><a href="index.php">Actividades</a></li>
	          <li class=""><a href="maestros.php">Maestros</a></li>
	          <li class=""><a href="materias.php">Materias</a></li>
	        </ul>
	      </li>
	      
	      <?php if(empty($_SESSION['username'])){
		      
	      ?>
	      
	      <li >
	        <a href="#" data-reveal-id="topbar_login">Login</a>
	        
	        <div id="topbar_login" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
			 
			  <div class="large-3 large-centered medium-3 medium-centered columns">
			  
			  <form action="includes/loginforteachers.php" method="post">
			  	
				<div class="text-center">
					<img src="http://leavirtual.com/assets/img/LeavVirtualLogo_web.png">
					<hr / class="x">
				  	<input type="text" name="email" placeholder="Email">
				  	<input type="password" name="pswd" placeholder="Password">
				  	<input class="large-12 columns button small radius" type="Submit" value="Sign In">
			  	</div>
			  	
			  </form>	  
			  
			  </div>
			  
			  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
			  
			</div>
				        
	      </li>
	      <?php 
		  }elseif(isset($_SESSION['username'])){
	  
		     ?>
	      
	      <li>
	      <li class="has-dropdown">
	      	<a href="#">
		      <?php echo $_SESSION['username'];?>
		    </a>
		  
		    <ul class="dropdown">
	          <li><a href="index.php">Añadir Clase</a></li> 
		      <li><a href="master_class.php">Clases</a></li>  
	          <li><a href="includes/signout.php">Sign Out</a></li>
	          
	          
	        </ul>
		    
		  </li>
	      </li>
   
           <?php }?>
	      
	    </ul>
	    
	
	    <!-- Left Nav Section Might Use it later-->
<!--
	    <ul class="left">
	      <li><a href="#">Left Nav Button</a></li>
	      
			
			
			
			
	    </ul>
-->
	  	  
	 
	</nav>
	
