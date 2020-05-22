<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12"><h3 class="m-t-none m-b">Create Article</h3>
                                <form role="form">
                                    <div class="form-group"><label>Title</label> <input type="text" value="<?php echo $articleDetails['Article']['title'] ?>" id="title" class="form-control"></div>
                                    <div class="form-group"><label>Content</label> <input type="text" value="<?php echo $articleDetails['Article']['content'] ?>" id="content" class="form-control"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="ibox-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <button class="btn btn-primary btn-sm float-right" value="<?php echo $articleDetails['Article']['id'] ?>" type="button" id="update-article-btn">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php echo $this->Html->script('main');