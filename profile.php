<?php
$this->load->view('Admin/Header');
?>
<div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       My profile
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <?php
                             foreach($dt as $row);
                             ?>
                            <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('index.php/Admin/editprofile')?>">
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control" id="inputEmail1" name="email" value="<?php echo $row->email?>" readonly>
                                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputPassword1" name="pswd" value="<?php echo $row->password?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-danger">Update</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </section>

            </div>
<?php
$this->load->view('Admin/Footer');
?>