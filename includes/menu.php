<!-- Menu -->
<nav id="menu" class="navbar navbar-default">
	<div class="container-fluid">
		<ul class="nav navbar-nav nav-pills">
      <li class="navbar-brand">Kase one</li>
      <?php
      foreach ($pages as $p) {
        $li = ['<li class="nav-item">'];
        if ($page != $p['name']) $li[] = '<a href="index.php?page=' . $p['name'] . '">';
        $li[] = $p['label'];
        if ($page != $p['name']) $li[] = '</a>';
        if (isset($p['private']) && $p['private']) $li[] = '';
        $li[] = '</li>';
        echo implode('', $li);
      }
      ?>
		</ul>
   <!--<span class="navbar-text navbar-right"> Accès <strong><a href="#">Admin</a></strong></span>-->
	</div>
</nav>
