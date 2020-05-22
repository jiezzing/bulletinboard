<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($articles as $value) : ?>
                                    <tr class="gradeX">
                                        <td><?php echo $value['Article']['title'] ?></td>
                                        <td><?php echo $value['Article']['content'] ?></td>
                                        <td><?php echo $value['Article']['created'] ?></td>
                                        <td>
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <?php echo $this->Html->link(
                                                        $this->Html->tag('i', false, array('class' => 'fa fa-eye')) . '' . 
                                                        $this->Html->tag('span', ' View Details', array('class' => 'nav-label')), array(
                                                            'controller' => 'articles',
                                                            'action' => 'view', $value['Article']['id']
                                                        ), array(
                                                            'escape' => false,
                                                            'class' => 'text-navy'
                                                        )) 
                                                    ?>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <?php echo $this->Html->link(
                                                        $this->Html->tag('i', false, array('class' => 'fa fa-pencil')) . '' . 
                                                        $this->Html->tag('span', ' Edit', array('class' => 'nav-label')), array(
                                                            'controller' => 'articles',
                                                            'action' => 'edit', $value['Article']['id']
                                                        ), array(
                                                            'escape' => false,
                                                            'class' => 'text-navy'
                                                        )) 
                                                    ?>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <?php echo $this->Html->link(
                                                        $this->Html->tag('i', false, array('class' => 'fa fa-trash')) . '' . 
                                                        $this->Html->tag('span', ' Delete', array('class' => 'nav-label')), array(
                                                            'controller' => 'articles',
                                                            'action' => 'delete', $value['Article']['id']
                                                        ), array(
                                                            'escape' => false,
                                                            'class' => 'text-navy article delete-article',
                                                            'value' => $value['Article']['id']
                                                        )) 
                                                    ?>
                                                </li>
                                            </ol>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->Html->script('main');