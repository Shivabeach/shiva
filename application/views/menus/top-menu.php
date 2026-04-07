<div class="l-menu-blog">
    <div class="l-menu-blog--shell">
        <div class="l-menu">
            <ul class="menu-flex">
                <li class="hova home"><?php echo anchor('pages', 'Home', ['class' => 'icon fa-home']); ?></li>
                <li class="hova"><?php echo anchor('blogs', 'Blog', ['rel' => 'external']); ?></li>
                <li class="hova"><?php echo anchor('http://car/', 'Car', ['rel' => 'external']); ?></li>
                <li class="hova"><?php echo anchor('http://localhost/project/', 'Project', [
                    'rel' => 'external',
                ]); ?></li>
                <li class="hova"><a href="http://localhost/garden/" rel="external">Garden</a></li>
                <li class="hova pic"><?php echo anchor('https://mail.protonmail.com/login', 'ProtonMail', [
                    'rel' => 'external',
                ]); ?></li>
                <li class="hova"><?php echo anchor('http://medicine/', 'Medicine', [
                    'rel' => 'external',
                    'id' => 'calCount',
                ]); ?></li>
            </ul>
        </div>
    </div>
</div>