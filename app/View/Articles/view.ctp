<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12"><h3 class="m-t-none m-b">Create Article</h3>
                                <form role="form">
                                    <div class="form-group"><label>Title</label> <input type="text" value="<?php echo $articleDetails['Article']['title'] ?>" class="form-control" readonly="true"></div>
                                    <div class="form-group"><label>Content</label> <input type="text" value="<?php echo $articleDetails['Article']['title'] ?>"  class="form-control" readonly="true"></div>
                                    <div class="form-group"><label>Vote</label> <input type="text" value="<?php echo $articleDetails['Article']['vote'] ?>"  class="form-control" readonly="true"></div>
                                    <div class="form-group"><label>Created</label> <input type="text" value="<?php echo $articleDetails['Article']['created'] ?>" class="form-control" readonly="true"></div>

                                    <div>
                                        <?php if($articleDetails['Article']['vote']) : ?>
                                            <a href="#" ><span class="btn btn-sm btn-danger float-right m-t-n-xsnav-label" value="<?php echo $articleDetails['Article']['id'] ?>" id="downvote-btn">Downvote</span></a>
                                        <?php else : ?>
                                            <a href="#" ><span class="btn btn-sm btn-primary float-right m-t-n-xsnav-label" value="<?php echo $articleDetails['Article']['id'] ?>" id="upvote-btn">Upvote</span></a>
                                        <?php endif ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php echo $this->Html->script('main');