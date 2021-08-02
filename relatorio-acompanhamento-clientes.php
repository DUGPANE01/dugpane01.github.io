<?php include_once("php/database/config.php");?>
<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login-page/index.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en" class="loading">
  <!-- BEGIN : Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard1 - Apex responsive bootstrap 4 admin template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/img/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/img/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/img/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/img/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/chartist.min.css">
	    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/wizard.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/digital-clock.css">
	
			

    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
  </head>
  <!-- END : Head-->

  <!-- BEGIN : Body-->
	<?php
		$result=mysqli_query($con,"select * from accounts");
			while($row=mysqli_fetch_array($result))
		{
	?>
	<body data-col="2-columns" class=" 2-columns layout-<?php echo $row['theme_color']; ?>">
	<?php
		}
	?>
	
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">

		<!-- INCLUIR SIDEBAR -->
		<?php include "includes/sidebar.php";?>
		
        <!-- main menu background -->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
      </div>
      <!-- / main menu-->


      <!-- Navbar (Header) Starts-->
     <?php include("includes/navbar.php");?>
      <!-- Navbar (Header) Ends-->

      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--Statistics cards Starts-->
			<div class="row">
				<div class="content-header"><h2>Relatório de Acompanhamento de Clientes</h2></div>
			</div>
		<div class="row">
			<div class="col-xl-3 col-lg-6">
				<div class="card">
					<div class="card-content">
					  <div class="px-3 py-3">
						<div class="media">
						  <div class="media-body text-left">
						  <center>
						  
						  
						  <a href="#" type="button" class="btn btn-raised btn-dark btn-min-width mr-1 mb-1" data-toggle="modal" data-target="#modal-adicionar">Adicionar <i class="fa fa-plus"></i></a>
							
						  </center>
						  </div>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
		
		<section id="icon-tabs">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Formulário para gerar Relatorio de Acomp. de Clientes</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="icons-tab-steps wizard-circle" #f="ngForm">
              <!-- Step 1 -->
              <h6>Passo 1</h6>
              <fieldset>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
					
                      <label for="firstName2">Selecionar Cliente</label>
					  <select name="todos" id="cliente" name="cliente" required="" class="form-control" aria-invalid="false">
						<option value="todos">EXIBIR TODOS</option>
					  <?php
							$result=mysqli_query($con,"select DISTINCT cliente from relatorio_acompanhamento_clientes ORDER BY id ASC");
							while($row=mysqli_fetch_array($result))
							{
						?>
                      
                        <option value="<?php echo $row['cliente']; ?>"><?php echo $row['cliente']; ?></option>
                      
					  <?php
							}
						?>
						</select>
                    </div>
                  </div>
				  <div class="col-md-3">
                    <div class="form-group">
					
                      <label for="firstName2">DO MÊS:</label>
					  <select name="select" id="de" name="de" required="" class="form-control" aria-invalid="false">
					  <?php
							$result=mysqli_query($con,"select DISTINCT data from relatorio_acompanhamento_clientes ORDER BY id ASC");
							while($row=mysqli_fetch_array($result))
							{
						?>
                      
                        <option value="<?php echo $row['data']; ?>"><?php echo $row['data']; ?></option>
                      
					  <?php
							}
						?>
						</select>
                    </div>
                  </div>
			   <div class="col-md-3">
                    <div class="form-group">
					
                      <label for="firstName2">ATÉ MÊS:</label>
					  <select name="select" id="ate" name="ate"  required="" class="form-control" aria-invalid="false">
					  <?php
							$result=mysqli_query($con,"select DISTINCT data from relatorio_acompanhamento_clientes ORDER BY id ASC");
							while($row=mysqli_fetch_array($result))
							{
						?>
                      
                        <option value="<?php echo $row['data']; ?>"><?php echo $row['data']; ?></option>
                      
					  <?php
							}
						?>
						</select>
                    </div>
                  </div>
              
              </fieldset>
              <!-- Step 2 -->
              <h6>Passo 2</h6>
              <fieldset>
                <div class="row">

	<div class="card-content">
          <div class="card-body"style="border-style: solid; border-width: 1px;">
            <div class="nav-vertical">

              <ul class="nav nav-tabs nav-left flex-column">
<?php
		$result=mysqli_query($con,"select * from texto_relatorio_acompanhamento_clientes");
			while($row=mysqli_fetch_array($result))
		{
	?>
                <li class="nav-item">
                  <a class="nav-link" id="baseVerticalLeft-tab<?php echo $row['id']; ?>" data-toggle="tab" aria-controls="tabVerticalLeft<?php echo $row['id']; ?>"
                    href="#tabVerticalLeft<?php echo $row['id']; ?>" aria-expanded="true"><?php echo $row['titulo']; ?></a>
                </li>
				<?php
							}
						?>
                      

              </ul>
              <div class="tab-content px-1">
                      <?php
		$result=mysqli_query($con,"select * from texto_relatorio_acompanhamento_clientes");
			while($row=mysqli_fetch_array($result))
		{
	?>
                     <div role="tabpanel" class="tab-pane" id="tabVerticalLeft<?php echo $row['id']; ?>" aria-expanded="true" aria-labelledby="baseVerticalLeft-tab<?php echo $row['id']; ?>">
                  <?php echo $row['texto']; ?>
                </div>
                      
					  <?php
							}
						?>
              </div>
            </div>
          </div>
        </div>
                </div>
              </fieldset>
              <!-- Step 3 -->
              <h6>Step 3</h6>
              <fieldset>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="eventName2">Event Name</label>
                      <input type="text" class="form-control" id="eventName2" name="eventName2">
                    </div>
                    <div class="form-group">
                      <label for="eventType2">Event Type</label>
                      <select class="custom-select form-control" id="eventType2" data-placeholder="Type to search cities"
                        name="eventType2">
                        <option value="Banquet">Banquet</option>
                        <option value="Fund Raiser">Fund Raiser</option>
                        <option value="Dinner Party">Dinner Party</option>
                        <option value="Wedding">Wedding</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="eventLocation2">Event Location</label>
                      <select class="custom-select form-control" id="eventLocation2" name="eventLocation2">
                        <option value="">Select City</option>
                        <option value="Amsterdam">Amsterdam</option>
                        <option value="Berlin">Berlin</option>
                        <option value="Frankfurt">Frankfurt</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="eventStatus2">Event Status</label>
                      <select class="custom-select form-control" id="eventStatus2" name="eventStatus2">
                        <option value="Planning">Planning</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Finished">Finished</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <span>Requirements</span>
                      <div class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input" id="staffing">
                        <label class="custom-control-label" for="staffing">Staffing</label>
                      </div>

                      <div class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input" id="catering">
                        <label class="custom-control-label" for="catering">Catering</label>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <!-- Step 4 -->
              <h6>Step 4</h6>
              <fieldset>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="meetingName2">Name of Meeting</label>
                      <input type="text" class="form-control" id="meetingName2" name="meetingName2">
                    </div>
                    <div class="form-group">
                      <label for="meetingLocation2">Location</label>
                      <input type="text" class="form-control" id="meetingLocation2" name="meetingLocation2">
                    </div>
                    <div class="form-group">
                      <label for="participants2">Names of Participants</label>
                      <textarea name="participants" id="participants2" rows="4" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="decisions2">Decisions Reached</label>
                      <textarea name="decisions" id="decisions2" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Agenda Items</label>
                      <div class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input" id="1st-item">
                        <label class="custom-control-label" for="1st-item">1st item</label>
                      </div>
                      <div class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input" id="2nd-item">
                        <label class="custom-control-label" for="2nd-item">2nd item</label>
                      </div>
                      <div class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input" id="3rd-item">
                        <label class="custom-control-label" for="3rd-item">3rd item</label>
                      </div>
                      <div class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input" id="4th-item">
                        <label class="custom-control-label" for="4th-item">4th item</label>
                      </div>
                      <div class="custom-control custom-checkbox m-0">
                        <input type="checkbox" class="custom-control-input" id="5th-item">
                        <label class="custom-control-label" for="5th-item">5th item</label>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
		
		<div class="row">
			<div class="col-12">
			  <div class="card">
				<div class="card-header">
				  <h4 class="card-title">Entradas atuais</h4>
				  <p class="card-text">Aqui você vê todas entradas do relatório, podendo editar ou excluir.</p>
				</div>
				<div class="card-content">
				  <div class="card-body card-dashboard table-responsive">
				  <div class="btn-group mr-1 mb-1">
                    <button type="button" class="btn btn-raised btn-outline-info"><input class="form-control round" id='myInput' onkeyup='searchTable()' type='text' placeholder='Pesquisa Inteligente'></button>
                    <button type="button" class="btn btn-raised btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(55px, -2px, 0px);">
                      <a class="dropdown-item" href="#"> <input class="form-control round" id='searchTable1' onkeyup='searchTable1()' type='text' placeholder='Pesquisa por Cliente'> </a>
                      <a class="dropdown-item" href="#"> <input class="form-control round" id='searchTable2' onkeyup='searchTable2()' type='text' placeholder='Pesquisa por Máquina'> </a>
					  <a class="dropdown-item" href="#"> <input class="form-control round" id='searchTable3' onkeyup='searchTable3()' type='text' placeholder='Pesquisa por Célula'> </a>
					  <a class="dropdown-item" href="#"> <input class="form-control round" id='searchTable4' onkeyup='searchTable4()' type='text' placeholder='Pesquisa por Óleo'> </a>
					  <a class="dropdown-item" href="#"> <input class="form-control round" id='searchTable5' onkeyup='searchTable5()' type='text' placeholder='Pesquisa por Refração'> </a>
					  <a class="dropdown-item" href="#"> <input class="form-control round" id='searchTable6' onkeyup='searchTable6()' type='text' placeholder='Pesquisa por Emulção'> </a>
					  <a class="dropdown-item" href="#"> <input class="form-control round" id='searchTable7' onkeyup='searchTable7()' type='text' placeholder='Pesquisa por Mês'> </a>
					  <a class="dropdown-item" href="#"> <input class="form-control round" id='searchTable8' onkeyup='searchTable8()' type='text' placeholder='Pesquisa por Data'> </a>
					  <a class="dropdown-item" href="#"> <input class="form-control round" id='searchTable9' onkeyup='searchTable9()' type='text' placeholder='Pesquisa por Observação'> </a>
                    </div>
                  </div>
				<?php include "includes/scripts-relatorio-acompanhamento-clientes.php";?>
					<table class="table table-striped table-bordered table-responsive-sm" id="tabelaRelatorioAcompanhamentoCliente">
					  <thead>
						<tr id='tableHeader'>
						  <th>Cliente</th>
						  <th>Máquina</th>
						  <th>Célula</th>
						  <th>Óleo</th>
						  <th>Refração</th>
						  <th>Emulção</th>
						  <th>Mês</th>
						  <th>Data</th>
						  <th>Observação</th>
						  <th>Ação</th>
						</tr>
					  </thead>
					  <tbody>
						<?php
							$result=mysqli_query($con,"select * from relatorio_acompanhamento_clientes ORDER BY id DESC");
							while($row=mysqli_fetch_array($result))
							{
						?>
						<tr>
							<td><?php echo $row['cliente']; ?></td>
							<td><?php echo $row['maquina']; ?></td>
							<td><?php echo $row['celula']; ?></td>
							<td><?php echo $row['tipo_oleo']; ?></td>
							<td><?php echo $row['indice_refracao']; ?></td>
							<td><?php echo $row['emulcao_tanque']; ?></td>
							<td><?php echo $row['mes']; ?></td>
							<td><?php echo $row['data']; ?></td>
							<td><?php echo $row['obs']; ?></td>
							<td>
							<a href="#" data-toggle="modal" data-target="#modal-edit-<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></a>
							│
							<a href="#" data-toggle="modal" data-target="#modal-delete-<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a>

							</td>
						</tr>
						<?php
							}
						?>
					  </tbody>
					  <tfoot>
						<tr id='tableHeader'>
						  <th>Cliente</th>
						  <th>Máquina</th>
						  <th>Célula</th>
						  <th>Óleo</th>
						  <th>Refração</th>
						  <th>Emulção</th>
						  <th>Mês</th>
						  <th>Data</th>
						  <th>Observação</th>
						  <th>Ação</th>
						</tr>
					  </tfoot>
					</table>
				  </div>
				</div>
			  </div>
			</div>
		  </div>

			</div>
          </div>
        </div>
        <!-- END : End Main Content-->
		
		    <!-- ////////////////////////////////////////////////////////////////////////////-->
			<!-- ///////////////////////////   MODALS   /////////////////////////////////////-->
			<!-- ////////////////////////////////////////////////////////////////////////////-->
		    	<?php
									$result=mysqli_query($con,"select * from relatorio_acompanhamento_clientes");
									while($row=mysqli_fetch_array($result))
									{
									?>
			<!-- Modal Edit -->
                  <div class="modal fade text-left" id="modal-edit-<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-primary">
                          <h3 class="modal-title" id="myModalLabel35">Editar</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="POST" action="php/processar/processa_edit_relatorio_acompanhamento_clientes.php?id=<?php echo $row['id']; ?>" role="form">
                          <div class="modal-body">
                            <fieldset class="form-group">
								<label for="cliente">Cliente:</label>
								<input type="text" name="cliente-<?php echo $row['id']; ?>" id="cliente-<?php echo $row['id']; ?>" class="form-control round" value="<?php echo $row['cliente']; ?>">
							</fieldset>
                            <fieldset class="form-group">
								<label for="maquina">Máquina:</label>
								<input type="text" name="maquina-<?php echo $row['id']; ?>" id="maquina-<?php echo $row['id']; ?>" class="form-control round" value="<?php echo $row['maquina']; ?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Célula:</label>
								<input type="text" name="celula-<?php echo $row['id']; ?>" id="celula-<?php echo $row['id']; ?>" class="form-control round" value="<?php echo $row['celula']; ?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Óleo:</label>
								<input type="text" name="tipo_oleo-<?php echo $row['id']; ?>" id="tipo_oleo-<?php echo $row['id']; ?>" class="form-control round" value="<?php echo $row['tipo_oleo']; ?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Refração:</label>
								<input type="text" name="indice_refracao-<?php echo $row['id']; ?>" id="indice_refracao-<?php echo $row['id']; ?>" class="form-control round" value="<?php echo $row['indice_refracao']; ?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Emulção:</label>
								<input type="text" name="emulcao_tanque-<?php echo $row['id']; ?>" id="emulcao_tanque-<?php echo $row['id']; ?>" class="form-control round" value="<?php echo $row['emulcao_tanque']; ?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Mês:</label>
								<input type="text" name="mes-<?php echo $row['id']; ?>" id="mes-<?php echo $row['id']; ?>" class="form-control round" value="<?php echo $row['mes']; ?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Data:</label>
								<input type="text" name="data-<?php echo $row['id']; ?>" id="data-<?php echo $row['id']; ?>" class="form-control round" value="<?php echo $row['data']; ?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Observação:</label>
								<input type="text" name="obs-<?php echo $row['id']; ?>" id="obs-<?php echo $row['id']; ?>" class="form-control round" value="<?php echo $row['obs']; ?>">
							</fieldset>
                          </div>
                          <div class="modal-footer">
                            <input type="close" class="btn btn-outline-danger btn-lg" data-dismiss="modal" value="Cancelar">
                            <input type="submit" class="btn btn-outline-primary btn-lg" value="Salvar">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
				  
				  <!-- Modal Edit -->
                  <div class="modal fade text-left" id="modal-adicionar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-primary">
                          <h3 class="modal-title" id="myModalLabel35">Adicionar</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="POST" action="php/processar/processa_add_relatorio_acompanhamento_clientes.php" role="form">
                          <div class="modal-body">
                            <fieldset class="form-group">
								<label for="cliente">Cliente:</label>
								<input type="text" name="cliente-<?php echo $row['id']; ?>" id="cliente-<?php echo $row['id']; ?>" class="form-control round" placeholder="Cliente">
							</fieldset>
                            <fieldset class="form-group">
								<label for="maquina">Máquina:</label>
								<input type="text" name="maquina-<?php echo $row['id']; ?>" id="maquina-<?php echo $row['id']; ?>" class="form-control round" placeholder="Máquina">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Célula:</label>
								<input type="text" name="celula-<?php echo $row['id']; ?>" id="celula-<?php echo $row['id']; ?>" class="form-control round" placeholder="Célula">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Óleo:</label>
								<input type="text" name="tipo_oleo-<?php echo $row['id']; ?>" id="tipo_oleo-<?php echo $row['id']; ?>" class="form-control round" placeholder="Óleo">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Refração:</label>
								<input type="text" name="indice_refracao-<?php echo $row['id']; ?>" id="indice_refracao-<?php echo $row['id']; ?>" class="form-control round" placeholder="Índice de Refração">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Emulção:</label>
								<input type="text" name="emulcao_tanque-<?php echo $row['id']; ?>" id="emulcao_tanque-<?php echo $row['id']; ?>" class="form-control round" placeholder="Emulção">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Mês:</label>
								<input type="text" name="mes-<?php echo $row['id']; ?>" id="mes-<?php echo $row['id']; ?>" class="form-control round" placeholder="Mês">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Data:</label>
								<input type="text" name="data-<?php echo $row['id']; ?>" id="data-<?php echo $row['id']; ?>" class="form-control round" placeholder="Data">
							</fieldset>
							<fieldset class="form-group">
								<label for="maquina">Observação:</label>
								<input type="text" name="obs-<?php echo $row['id']; ?>" id="obs-<?php echo $row['id']; ?>" class="form-control round" placeholder="Observação">
							</fieldset>
                          </div>
                          <div class="modal-footer">
                            <input type="close" class="btn btn-outline-danger btn-lg" data-dismiss="modal" value="Cancelar">
                            <input type="submit" class="btn btn-outline-primary btn-lg" value="Adicionar">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
				  
				  			<!-- Modal Delete -->
                  <div class="modal fade text-left" id="modal-delete-<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-danger">
                          <h3 class="modal-title" id="myModalLabel35">Deletar</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="POST" action="php/processar/processa_delete_relatorio_acompanhamento_clientes.php?id=<?php echo $row['id']; ?>" role="form">
                          <div class="modal-body">
                            <h4>Tem certeza que deseja excluir?</h4>
							<p>Essa ação será irreversível!</p>
							
                          </div>
                          <div class="modal-footer">
                            <input type="close" class="btn btn-outline-danger btn-lg" data-dismiss="modal" value="Cancelar">
                            <input type="submit" class="btn btn-outline-primary btn-lg" value="Deletar">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
									<?php
									}
									?>
        <!-- BEGIN : Footer-->
        <footer class="footer footer-static footer-light">
          <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2019 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
        </footer>
        <!-- End : Footer-->

      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- START Notification Sidebar-->
    <aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
      <div class="side-nav notification-sidebar-content">
        <div class="row">
          <div class="col-12 mt-1">
            <ul class="nav nav-tabs">
              <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#activity-tab" aria-expanded="true" class="nav-link active">Activity</a></li>
              <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#chat-tab" aria-expanded="false" class="nav-link">Chat</a></li>
              <li class="nav-item"><a id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#settings-tab" aria-expanded="false" class="nav-link">Settings</a></li>
            </ul>
            <div class="tab-content px-1 pt-1">
              <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
                <div id="activity" class="col-12 timeline-left">
                  <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                  <div id="timeline" class="timeline-left timeline-wrapper">
                    <ul class="timeline">
                      <li class="timeline-line"></li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-purple bg-lighten-1"><i class="ft-shopping-cart"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">just now</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-info bg-lighten-1"><i class="fa fa-plane"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="cyan-text medium-small">Yesterday</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-success bg-lighten-1"><i class="ft-mic"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="green-text medium-small">5 Days Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-warning bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="amber-text medium-small">1 Week Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-red bg-lighten-1"><i class="ft-inbox"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-cyan bg-lighten-1"><i class="ft-mic"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="brown-text medium-small">1 Month Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-amber bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-grey bg-lighten-1"><i class="ft-inbox"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="grey-text medium-small">1 Year Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div id="chat-tab" aria-labelledby="base-tab2" class="tab-pane">
                <div id="chatapp" class="col-12">
                  <h6 class="mt-1 mb-3 text-bold-400">RECENT CHAT</h6>
                  <div class="collection border-none">
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Elizabeth Elliott</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Thank you</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-6.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Mary Adams</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Hello Boo</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-11.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Caleb Richards</h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.00 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Keny !</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-18.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">June Lane</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Ohh God</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-1.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Edward Fletcher</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.15 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Love you</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-2.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Crystal Bates</h4><span class="medium-small float-right blue-grey-text text-lighten-3">8.00 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Can we</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-3.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Nathan Watts</h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.53 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Great!</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-15.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Willard Wood</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.20 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Do it</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-19.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Ronnie Ellis</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.30 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Got that</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-14.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Gwendolyn Wood</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.34 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Like you</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-13.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Daniel Russell</h4><span class="medium-small float-right blue-grey-text text-lighten-3">12.00 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Thank you</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-22.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Sarah Graves</h4><span class="medium-small float-right blue-grey-text text-lighten-3">11.14 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Okay you</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-9.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Andrew Hoffman</h4><span class="medium-small float-right blue-grey-text text-lighten-3">7.30 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Can do</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-20.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Camila Lynch</h4><span class="medium-small float-right blue-grey-text text-lighten-3">2.00 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Leave it</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="settings-tab" aria-labelledby="base-tab3" class="tab-pane">
                <div id="settings" class="col-12">
                  <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                  <ul class="list-unstyled">
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Notifications</span>
                          <div class="float-right">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="notifications1" checked="checked" type="checkbox" class="custom-control-input">
                              <label for="notifications1" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                          <div class="float-right">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="recent-activity1" checked="checked" type="checkbox" class="custom-control-input">
                              <label for="recent-activity1" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Notifications</span>
                          <div class="float-right">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="notifications2" type="checkbox" class="custom-control-input">
                              <label for="notifications2" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                          <div class="float-right">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="recent-activity2" type="checkbox" class="custom-control-input">
                              <label for="recent-activity2" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show your emails</span>
                          <div class="float-right">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="show-emails" type="checkbox" class="custom-control-input">
                              <label for="show-emails" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                          <div class="float-right">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="show-stats" type="checkbox" class="custom-control-input">
                              <label for="show-stats" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <!-- END Notification Sidebar-->
    <!-- Theme customizer Starts-->
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="rtl-icon" href="https://pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-6/" target="_blank" class="bg-dark customizer-toggle"><span class="font-medium-1 white align-middle">RTL</span></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
      <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
        <h4 class="text-uppercase mb-0 text-bold-400">Theme Customizer</h4>
        <p>Customize & Preview in Real Time</p>
        <hr>
        <!-- Layout Options-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Layout Options</h6>
        <div class="layout-switch ml-4">
          <div class="custom-control custom-radio d-inline-block custom-control-inline light-layout">
            <input id="ll-switch" type="radio" name="layout-switch" checked class="custom-control-input">
            <label for="ll-switch" class="custom-control-label">Light</label>
          </div>
          <div class="custom-control custom-radio d-inline-block custom-control-inline dark-layout">
            <input id="dl-switch" type="radio" name="layout-switch" class="custom-control-input">
            <label for="dl-switch" class="custom-control-label">Dark</label>
          </div>
          <div class="custom-control custom-radio d-inline-block custom-control-inline transparent-layout">
            <input id="tl-switch" type="radio" name="layout-switch" class="custom-control-input">
            <label for="tl-switch" class="custom-control-label">Transparent</label>
          </div>
        </div>
        <hr>
        <!-- Sidebar Options Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase sb-options">Sidebar Color Options</h6>
        <div class="cz-bg-color sb-color-options">
          <div class="row p-1">
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="pomegranate" class="gradient-pomegranate d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="king-yna" class="gradient-king-yna d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset" class="gradient-ibiza-sunset d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="flickr" class="gradient-flickr d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-bliss" class="gradient-purple-bliss d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="man-of-steel" class="gradient-man-of-steel d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-love" class="gradient-purple-love d-block rounded-circle"></span></div>
          </div>
          <div class="row p-1">
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="black" class="bg-black d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="white" class="bg-grey d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="primary" class="bg-primary d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="success" class="bg-success d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="warning" class="bg-warning d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="info" class="bg-info d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="danger" class="bg-danger d-block rounded-circle"></span></div>
          </div>
        </div>
        <!-- Sidebar Options Ends-->
        <!-- Transparent Layout Bg color Options-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase tl-color-options d-none">Background Colors</h6>
        <div class="cz-tl-bg-color d-none">
          <div class="row p-1">
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="hibiscus" class="bg-hibiscus d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-purple-pizzazz" class="bg-purple-pizzazz d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-blue-lagoon" class="bg-blue-lagoon d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-electric-viloet" class="bg-electric-violet d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-protage" class="bg-portage d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-tundora" class="bg-tundora d-block rounded-circle"></span></div>
          </div>
        </div>
        <!-- Transparent Layout Bg color Ends-->
        <hr>
        <!-- Sidebar BG Image Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase sb-bg-img">Sidebar Bg Image</h6>
        <div class="cz-bg-image row sb-bg-img">
          <div class="col-sm-2 mb-3"><img src="app-assets/img/sidebar-bg/01.jpg" width="90" class="rounded sb-bg-01"></div>
          <div class="col-sm-2 mb-3"><img src="app-assets/img/sidebar-bg/02.jpg" width="90" class="rounded sb-bg-02"></div>
          <div class="col-sm-2 mb-3"><img src="app-assets/img/sidebar-bg/03.jpg" width="90" class="rounded sb-bg-03"></div>
          <div class="col-sm-2 mb-3"><img src="app-assets/img/sidebar-bg/04.jpg" width="90" class="rounded sb-bg-04"></div>
          <div class="col-sm-2 mb-3"><img src="app-assets/img/sidebar-bg/05.jpg" width="90" class="rounded sb-bg-05"></div>
          <div class="col-sm-2 mb-3"><img src="app-assets/img/sidebar-bg/06.jpg" width="90" class="rounded sb-bg-06"></div>
        </div>
        <!-- Transparent BG Image Ends-->
        <div class="tl-bg-img d-none">
          <h6 class="text-center text-bold-500 text-uppercase">Background Images</h6>
          <div class="cz-tl-bg-image row">
            <div class="col-sm-3"><img src="app-assets/img/gallery/bg-glass-1.jpg" width="90" class="rounded bg-glass-1 selected"></div>
            <div class="col-sm-3"><img src="app-assets/img/gallery/bg-glass-2.jpg" width="90" class="rounded bg-glass-2"></div>
            <div class="col-sm-3"><img src="app-assets/img/gallery/bg-glass-3.jpg" width="90" class="rounded bg-glass-3"></div>
            <div class="col-sm-3"><img src="app-assets/img/gallery/bg-glass-4.jpg" width="90" class="rounded bg-glass-4"></div>
          </div>
        </div>
        <!-- Transparent BG Image Ends    -->
        <hr>
        <!-- Sidebar BG Image Toggle Starts-->
        <div class="togglebutton toggle-sb-bg-img">
          <div class="switch"><span>Sidebar Bg Image</span>
            <div class="float-right">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input id="sidebar-bg-img" type="checkbox" checked class="custom-control-input cz-bg-image-display">
                <label for="sidebar-bg-img" class="custom-control-label"></label>
              </div>
            </div>
          </div>
          <hr>
        </div>
        <!-- Sidebar BG Image Toggle Ends-->
        <!-- Compact Menu Starts-->
        <div class="togglebutton">
          <div class="switch"><span>Compact Menu</span>
            <div class="float-right">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
                <label for="cz-compact-menu" class="custom-control-label"></label>
              </div>
            </div>
          </div>
        </div>
        <!-- Compact Menu Ends-->
        <hr>
        <!-- Sidebar Width Starts-->
        <div>
          <label for="cz-sidebar-width">Sidebar Width</label>
          <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
            <option value="small">Small</option>
            <option value="medium" selected="">Medium</option>
            <option value="large">Large</option>
          </select>
        </div>
        <!-- Sidebar Width Ends-->
      </div>
    </div>
    <!-- Theme customizer Ends-->
    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/prism.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/js/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/notification-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/customizer.js" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
	<script src="app-assets/vendors/js/jquery.steps.min.js" type="text/javascript"></script>
	    <script src="app-assets/vendors/js/datatable/datatables.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/buttons.flash.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/jszip.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/pdfmake.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/vfs_fonts.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/buttons.html5.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/datatable/buttons.print.min.js" type="text/javascript"></script>
    <script src="app-assets/js/dashboard1.js" type="text/javascript"></script>
	    
    <script src="app-assets/js/data-tables/datatable-styling.js" type="text/javascript"></script>
	<script src="app-assets/js/wizard-steps.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
  <!-- END : Body-->
</html>