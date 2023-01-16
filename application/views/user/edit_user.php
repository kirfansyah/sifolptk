<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit User</h4>
                            </div>
                            <form class="user" method="post" action="<?php echo base_url('user/update'); ?> ">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Nama</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="name" class="form-control name" name="name" placeholder="Nama" value="<?= $user->name; ?>">
                                                                    <input type="hidden" id="id" class="form-control id" name="id" placeholder="Nama" value="<?= $user->id; ?>">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-user"></i>
                                                                    </div>
                                                                    <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Role</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <select name="role" id="role" class="form-control role">
                                                                        <option value="">-Pilih-</option>

                                                                        <?php foreach ($roles as $row) { ?>
                                                                            <option value="<?= $row->id ?>" <?php if ($row->id == $user->role_id) echo 'selected' ?>><?= $row->role ?></option>
                                                                        <?php } ?>

                                                                    </select>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-users"></i>
                                                                    </div>
                                                                    <?php echo form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Status</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <select name="status" id="status" class="form-control status">
                                                                        <option value="">-Pilih-</option>
                                                                        <?php foreach ($status as $key => $status_row) : ?>
                                                                            <option value="<?= $key ?>" <?php if ($key == $user->is_active) echo 'selected' ?>><?= $status_row ?></option>
                                                                        <?php endforeach; ?>

                                                                    </select>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-users"></i>
                                                                    </div>
                                                                    <?php echo form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Email</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="email" id="email" class="form-control email" name="email" placeholder="Email" value="<?= $user->email ?>" readonly>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-mail"></i>
                                                                    </div>
                                                                    <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Password</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="password" id="password1" class="form-control password1" name="password1" placeholder="Password" value="<?= $user->password ?>" readonly>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-lock"></i>
                                                                    </div>
                                                                    <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Password Confirm</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="password" id="password2" class="form-control password2" name="password2" placeholder="Repeat Password" value="<?= $user->password ?>" readonly>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-lock"></i>
                                                                    </div>
                                                                    <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-8 offset-md-4">

                                                    </div>
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic Horizontal form layout section end -->

        </div>
    </div>
</div>
<!-- END: Content-->


<?php $this->load->view('templates/footer'); ?>