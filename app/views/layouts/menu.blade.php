<ul class="sidebar-menu">
	<!-- Optionally, you can add icons to the links -->
	<!-- <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Anasayfa</span></a></li> -->

	@if (Auth::user()->can("kullanici-duzenle"))
		<li><a href="{{ URL::to('kullanicilar'); }}"><i class="fa fa-link"></i> <span>Kullanıcılar</span></a></li>
	@endif

	
	<!--<li class="treeview">
	  <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
	  <ul class="treeview-menu">
		<li><a href="#">Link in level 2</a></li>
		<li><a href="#">Link in level 2</a></li>
	  </ul>
	</li>-->
</ul>