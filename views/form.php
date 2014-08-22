<div class="custom-form">
    <div id="brandName" class="form-group brand">
        <label>Brand name</label>
        <div class="input-group">
            <input type="text" class="form-control">
            <a href="javascript:;" class="input-group-addon"><i class="fa fa-font"></i></a>
            <a href="javascript:;" class="input-group-addon color-picker"><i class="glyphicon glyphicon-comment"></i></a>
            <a href="javascript:;" class="input-group-addon color-picker"><i class="glyphicon glyphicon-stop"></i></a>
        </div>
    </div>
    <div id="clickTag" class="form-group clickTag">
        <label>Click tag</label>
        <input type="text" class="form-control" placeholder="http://your-domain.com">
    </div>
    <div class="form-group">
        <label>Product list</label>
        <div>
            <ul class="nav nav-tabs tab-product-list" role="tablist" id="tab-product-list">
                <li class="col-xs-3 active"><a href="#product-item-1" role="tab" data-toggle="tab">Product 1</a></li>
                <li class="col-xs-3"><a href="#product-item-2" role="tab" data-toggle="tab">Product 2</a></li>
                <li class="col-xs-3"><a href="#product-item-3" role="tab" data-toggle="tab">Product 3</a></li>
                <li class="col-xs-3"><a href="#product-item-4" role="tab" data-toggle="tab">Product 4</a></li>
            </ul>

            <div class="tab-content tab-product-list-content" id="tab-product-list-content">
                <div class="tab-pane active" id="product-item-1">
                    <div id="textDesc1" class="form-group desc">
                        <label>Description</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <a href="javascript:;" class="input-group-addon change-font">
                                <i class="fa fa-font"></i>
                                <ul class="fonts-list">
                                    <li class="font-item" data-font="Arial">Arial</li>
                                    <li class="font-item" data-font="Tahoma">Tahoma</li>
                                </ul>
                            </a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                    </div>
                    <div id="textPrice1" class="form-group price">
                        <label>Price</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <a href="javascript:;" class="input-group-addon"><i class="fa fa-font"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                    </div>
                    <div id="textAction1" class="form-group action">
                        <label>Action</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <a href="javascript:;" class="input-group-addon"><i class="fa fa-font"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                    </div>
                    <div id="image1" class="form-group image">
                        <label>Image</label>
                        <div class="img-preview-wrapper">
                            <div class="preview"></div>
                            <a class="btn-open-upload-modal" data-toggle="modal" href="#modal-upload">
                                Update image
                            </a>
                            <!--
                            <input type="file">
                            <p class="help-block">You may upload .gif, .jpeg, and .png files; <br>and the file size must be under 200 kB.</p>
                            -->
                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div id="clickTag1" class="form-group clickTag">
                        <label>Click tag</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- <div class="form-group status">
                        <label>Status</label>
                        <div class="checkbox" style="display: inline-block; margin-left: 35px;">
                            <label>
                                <input type="checkbox"> Deactive
                            </label>
                        </div>
                    </div> -->
                </div>
                
                <div class="tab-pane" id="product-item-2">
                    <div id="textDesc2" class="form-group desc">
                        <label>Description</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <a href="javascript:;" class="input-group-addon"><i class="fa fa-font"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                    </div>
                    <div id="textPrice2" class="form-group price">
                        <label>Price</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <a href="javascript:;" class="input-group-addon"><i class="fa fa-font"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                    </div>
                    <div id="textAction2" class="form-group action">
                        <label>Action</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <a href="javascript:;" class="input-group-addon"><i class="fa fa-font"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                    </div>
                    <div id="image2" class="form-group image">
                        <label>Image</label>
                        <div class="img-preview-wrapper">
                            <div class="preview"></div>
                            <input type="file">
                            <p class="help-block">Example block-level help text here.</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div id="clickTag2" class="form-group clickTag">
                        <label>Click tag</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- <div class="form-group status">
                        <label>Status</label>
                        <div class="checkbox" style="display: inline-block; margin-left: 35px;">
                            <label>
                                <input type="checkbox"> Deactive
                            </label>
                        </div>
                    </div> -->
                </div>
                
                <div class="tab-pane" id="product-item-3">
                    <div id="textDesc3" class="form-group desc">
                        <label>Description</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <a href="javascript:;" class="input-group-addon"><i class="fa fa-font"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                    </div>
                    <div id="textPrice3" class="form-group price">
                        <label>Price</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <a href="javascript:;" class="input-group-addon"><i class="fa fa-font"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                    </div>
                    <div id="textAction3" class="form-group action">
                        <label>Action</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <a href="javascript:;" class="input-group-addon"><i class="fa fa-font"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                    </div>
                    <div id="image3" class="form-group image">
                        <label>Image</label>
                        <div class="img-preview-wrapper">
                            <div class="preview"></div>
                            <input type="file">
                            <p class="help-block">Example block-level help text here.</p>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div id="clickTag3" class="form-group clickTag">
                        <label>Click tag</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- <div class="form-group status">
                        <label>Status</label>
                        <div class="checkbox" style="display: inline-block; margin-left: 35px;">
                            <label>
                                <input type="checkbox"> Deactive
                            </label>
                        </div>
                    </div> -->
                </div>
                
                <div class="tab-pane" id="product-item-4">
                    <div id="textDesc4" class="form-group desc">
                        <label>Description</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <a href="javascript:;" class="input-group-addon"><i class="fa fa-font"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                    </div>
                    <div id="textPrice4" class="form-group price">
                        <label>Price</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <a href="javascript:;" class="input-group-addon"><i class="fa fa-font"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                    </div>
                    <div id="textAction4" class="form-group action">
                        <label>Action</label>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <a href="javascript:;" class="input-group-addon"><i class="fa fa-font"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="javascript:;" class="input-group-addon"><i class="glyphicon glyphicon-stop"></i></a>
                        </div>
                    </div>
                    <div id="image4" class="form-group image">
                        <label>Image</label>
                        <div class="img-preview-wrapper">
                            <div class="preview"></div>
                            <input type="file">
                            <p class="help-block">Example block-level help text here.</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div id="clickTag4" class="form-group clickTag">
                        <label>Click tag</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- <div class="form-group status">
                        <label>Status</label>
                        <div class="checkbox" style="display: inline-block; margin-left: 35px;">
                            <label>
                                <input type="checkbox"> Deactive
                            </label>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <a href="javascript:;" class="btn btn-default"><i class="fa fa-floppy-o"></i>  Save ad</a>
    </div>
</div>


<div id="modal-upload" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Upload Image</h4>
            </div>
            <div class="modal-body">
                <form action="helpers/upload_file.php" method="post" enctype="multipart/form-data">
                    <label for="file">Filename:</label>
                    <input type="file" name="file" id="file"><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--                <button type="button" class="btn btn-primary">Save changes</button>-->
<!--            </div>-->
        </div>
    </div>
</div>