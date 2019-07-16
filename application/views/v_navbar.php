	<!-- Nav section  -->
	<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
				<a href=""><i class="fa fa-search"></i></a>
			</div>
			<ul class="main-menu">
				<li class="<?php if($this->uri->segment(1)=='beranda'){echo 'active';}
							else if($this->uri->segment(1)==''){echo 'active';}?>">
					<a href="<?php echo base_url('beranda');?>">Beranda</a>
				</li>
				<li class="<?php if($this->uri->segment(1)=='tentang'){echo 'active';}?>">
					<a href="<?php echo base_url('tentang');?>">Tentang Kami</a>
				</li>
				<li class="<?php if($this->uri->segment(1)=='berita'){echo 'active';}?>">
					<a href="<?php echo base_url('berita');?>">Berita</a>
				</li>
				<li class="<?php if($this->uri->segment(1)=='galeri'){echo 'active';}?>">
					<a href="<?php echo base_url('galeri');?>">Galeri</a>
				</li>
				<li class="<?php if($this->uri->segment(1)=='daftar'){echo 'active';}?>">
					<a href="<?php echo base_url('daftar');?>">Pendaftaran</a>
				</li>
				<li class="<?php if($this->uri->segment(1)=='kontak'){echo 'active';}?>">
					<a href="<?php echo base_url('kontak');?>">Kontak</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- Nav section end -->
