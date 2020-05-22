<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu" style="">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    
                    
                    <img src="/sunasterisk/img/default.png" alt="image" class="rounded-circle" width="50" height="50">
                    
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Fritz Gerald Dumdum</span>
                        <span class="text-muted text-xs block">Web Developer</span>
                    </a>
                </div>
                <div class="logo-element">
                    SUN
                </div>
            </li>
            <li>
                <?php echo $this->Html->link(
                    $this->Html->tag('i', false, false) . '' . 
                    $this->Html->tag('span', ' Articles', array('class' => 'nav-label')), array(
                        'controller' => 'articles', 
                        'action' => 'index'
                    ), array(
                        'escape' => false
                    )) 
                ?>
            </li>
            <li>
                <?php echo $this->Html->link(
                    $this->Html->tag('i', false, false) . '' . 
                    $this->Html->tag('span', ' Create Article', array('class' => 'nav-label')), array(
                        'controller' => 'articles', 
                        'action' => 'create'
                    ), array(
                        'escape' => false
                    )) 
                ?>
            </li>
        </ul>
    </div>
</nav>