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
                                    <tr class="gradeX">
                                        <td>asd</td>
                                        <td>asd</td>
                                        <td>asd</td>
                                        <td>
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <?php echo $this->Html->link(
                                                        $this->Html->tag('i', false, array('class' => 'fa fa-pencil')) . '' . 
                                                        $this->Html->tag('span', ' Edit', array('class' => 'nav-label')), array(
                                                            'controller' => 'users',
                                                            'action' => 'edit', $usersItem['User']['id']
                                                        ), array(
                                                            'escape' => false,
                                                            'class' => 'text-navy'
                                                        )) 
                                                    ?>
                                                </li>
                                            </ol>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->Html->script('main');