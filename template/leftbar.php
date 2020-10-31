<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<?php
                                    if ($this->session->userdata("foto") != NULL) echo '<img id="mbr_foto_big" src="'.base_url().'assets/img/'.$this->session->userdata("foto").'" width="150" class="img-circle">';
                                    else echo '<img id="mbr_foto_big" src="'.base_url().'assets/img/hen2.png" width="150" class="img-circle">';
                                    ?>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo $this->session->userdata('nama_pengguna'); ?></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;<?php echo $this->session->userdata('login_jabatan'); ?>
									</div>
									<span class="media-heading text-semibold"><?php echo $this->session->userdata('last_login'); ?></span>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="dashboard"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Data Master</span></a>
									<ul>
										<li><a href="<?php echo site_url('Data1_controller') ?>"></i>DATA SALDO MEMBER</a></li>
										<li><a href="<?php echo site_url('Data2_controller') ?>">DATA MEMBER</a></li>
										<li><a href="<?php echo site_url('Data3_controller') ?>">TAMBAH SALDO</a></li>
										
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-copy"></i>Transaksi<span></span></a>
									<ul>
										<li><a href="index.html" id="layout1">Laporan Transaksi<span class="label bg-warning-400">Current</span></a></li>
										<li><a href="../../layout_2/LTR/index.html" id="layout2">Penukaran Kupon</a></li>
									</ul>
								</li>
								<li><a href="changelog.html"><i class="icon-list-unordered"></i> <span>Changelog</span></a></li>
								<!-- /main -->

								<!-- Forms -->
								<li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="Forms"></i></li>
								<li>
									
									<ul>
										<li><a href="form_inputs_basic.html">Basic inputs</a></li>
										<li><a href="form_checkboxes_radios.html">Checkboxes &amp; radios</a></li>
										<li><a href="form_input_groups.html">Input groups</a></li>
										<li><a href="form_controls_extended.html">Extended controls</a></li>
										<li>
											<a href="#">Selects</a>
											<ul>
												<li><a href="form_select2.html">Select2 selects</a></li>
												<li><a href="form_multiselect.html">Bootstrap multiselect</a></li>
												<li><a href="form_select_box_it.html">SelectBoxIt selects</a></li>
												<li><a href="form_bootstrap_select.html">Bootstrap selects</a></li>
											</ul>
										</li>
										<li><a href="form_tag_inputs.html">Tag inputs</a></li>
										<li><a href="form_dual_listboxes.html">Dual Listboxes</a></li>
										<li><a href="form_editable.html">Editable forms</a></li>
										<li><a href="form_validation.html">Validation</a></li>
										<li><a href="form_inputs_grid.html">Inputs grid</a></li>
									</ul>
								</li>
								<!-- forms -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>