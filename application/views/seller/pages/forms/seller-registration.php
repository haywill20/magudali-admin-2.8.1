<div class="">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content form-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card_seller card-info m-0 form-card">
                        <!-- form start -->
                        <form class="form-horizontal form-submit-event"
                            action="<?= base_url('seller/auth/create-seller'); ?>" method="POST" id="add_product_form">
                            <?php if (isset($user_data) && !empty($user_data)) { ?>
                            <input type="hidden" name="user_id" value="<?= $user_data['to_be_seller_id'] ?>">
                            <input type='hidden' name='user_name' value='<?= $user_data['to_be_seller_name'] ?>'>
                            <input type='hidden' name='user_mobile' value='<?= $user_data['to_be_seller_mobile'] ?>'>
                            <?php
                            } ?>
                            <div class="card-body">
                                <div class="login-logo">
                                    <a href="<?= base_url() . 'seller/login' ?>"><img
                                            src="<?= base_url() . $logo ?>"></a>
                                </div>
                                <h4 class="mb-4">
                                    <?= !empty($this->lang->line('seller_registration_title_personal_detail_label')) ? $this->lang->line('seller_registration_title_personal_detail_label') : 'Seller Registration' ?></label>
                                </h4>
                                <h5><?= !empty($this->lang->line('seller_registration_personal_details_label')) ? $this->lang->line('seller_registration_personal_details_label') : 'Personal Details' ?>
                                </h5>
                                <hr>
                                <div class="form-group row">
                                    <label for="name"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_name_label')) ? $this->lang->line('seller_registration_name_label') : 'Name' ?><span
                                            class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_name_placeholder')) ? $this->lang->line('seller_registration_name_placeholder') : 'Seller Name' ?>"
                                            name="name"
                                            <?= (isset($user_data) && !empty($user_data) && !empty($user_data['to_be_seller_id'])) ? 'disabled' : ''; ?>
                                            value="<?= @$user_data['to_be_seller_name'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobile"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_mobile_label')) ? $this->lang->line('seller_registration_mobile_label') : 'Mobile' ?><span
                                            class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="mobile"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_mobile_placeholder')) ? $this->lang->line('seller_registration_mobile_placeholder') : 'Enter your Mobile' ?>"
                                            name="mobile"
                                            <?= (isset($user_data) && !empty($user_data) && !empty($user_data['to_be_seller_id'])) ? 'disabled' : ''; ?>
                                            value="<?= @$user_data['to_be_seller_mobile'] ?>">
                                    </div>
                                </div>

                                <?php
                                if (!isset($user_data) && empty($user_data)) {
                                ?>
                                <div class="form-group row">
                                    <label for="email"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_correo_label')) ? $this->lang->line('seller_registration_correo_label') : 'Email' ?>
                                        <span class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_correo_placeholder')) ? $this->lang->line('seller_registration_correo_placeholder') : 'Enter your Email' ?>"
                                            name="email">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="password"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_password_label')) ? $this->lang->line('seller_registration_password_label') : 'Password' ?><span
                                            class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_password_placeholder')) ? $this->lang->line('seller_registration_password_placeholder') : 'Enter your Password' ?>"
                                            name="password">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="confirm_password"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_confirm_password_label')) ? $this->lang->line('seller_registration_confirm_password_label') : 'Confirm Password' ?><span
                                            class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="confirm_password"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_confirm_password_placeholder')) ? $this->lang->line('seller_registration_confirm_password_placeholder') : 'Confirm Your Password' ?>"
                                            name="confirm_password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_address_label')) ? $this->lang->line('seller_registration_address_label') : 'Address' ?><span
                                            class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" id="address"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_address_placeholder')) ? $this->lang->line('seller_registration_address_placeholder') : 'Enter Address' ?>"
                                            name="address"></textarea>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="form-group row">
                                    <label for="address_proof"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_address_proof_label')) ? $this->lang->line('seller_registration_address_proof_label') : 'Address Proof ' ?><span
                                            class='text-danger text-sm'>*</span> </label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="address_proof" id="address_proof"
                                            accept="image/*" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="authorized_signature"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_authorized_signature_label')) ? $this->lang->line('seller_registration_authorized_signature_label') : 'Authorized Signature' ?><span
                                            class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="authorized_signature"
                                            id="authorized_signature" accept="image/*" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="national_identity_card"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_national_identity_card_label')) ? $this->lang->line('seller_registration_national_identity_card_label') : 'National Identity Card' ?>
                                        <span class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="national_identity_card"
                                            id="national_identity_card" accept="image/*" />
                                    </div>
                                </div>

                                <h5><?= !empty($this->lang->line('seller_registration_title_store_detail_label')) ? $this->lang->line('seller_registration_title_store_detail_label') : 'Store Details' ?>
                                </h5>
                                <hr>
                                <div class="form-group row">
                                    <label for="store_name"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_name_store_label')) ? $this->lang->line('seller_registration_name_store_label') : 'Store Name' ?>
                                        <span class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="store_name"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_name_store_placeholder')) ? $this->lang->line('seller_registration_name_store_placeholder') : 'Enter Store Name' ?>"
                                            name="store_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="logo"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_logo_label')) ? $this->lang->line('seller_registration_logo_label') : 'Logo' ?><span
                                            class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="store_logo" id="store_logo"
                                            accept="image/*" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="store_url"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_url_label')) ? $this->lang->line('seller_registration_url_label') : 'Url' ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="store_url"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_url_placeholder')) ? $this->lang->line('seller_registration_url_placeholder') : 'Url' ?>"
                                            name="store_url">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="store_description"
                                        class="col-sm-3 col-form-label"><?= !empty($this->lang->line('seller_registration_description_label')) ? $this->lang->line('seller_registration_description_label') : 'Description' ?></label>
                                    <div class="col-sm-12">
                                        <textarea type="text" class="form-control" id="store_description"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_description_placeholder')) ? $this->lang->line('seller_registration_description_placeholder') : 'Enter the description of your business' ?>"
                                            name="store_description"></textarea>
                                    </div>
                                </div>

                                <h5><?= !empty($this->lang->line('seller_registration_title_store_tax_details_label')) ? $this->lang->line('seller_registration_title_store_tax_details_label') : 'Url' ?>
                                </h5>
                                <hr>
                                <div class="form-group row">
                                    <label for="tax_name"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_Tax_name_label')) ? $this->lang->line('seller_registration_Tax_name_label') : 'Tax Name' ?><span
                                            class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tax_name"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_Tax_name_placeholder')) ? $this->lang->line('seller_registration_Tax_name_placeholder') : 'Enter legal name of your company or business' ?>"
                                            name="tax_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tax_number"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_tax_number_label')) ? $this->lang->line('seller_registration_tax_number_label') : 'Ruc Number' ?><span
                                            class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tax_number"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_Tax_number_placeholder')) ? $this->lang->line('seller_registration_Tax_number_placeholder') : 'Enter your Ruc number or your ID' ?>"
                                            name="tax_number">
                                    </div>
                                </div>


                                <h5><?= !empty($this->lang->line('seller_registration_title_bank_details_label')) ? $this->lang->line('seller_registration_title_bank_details_label') : 'Bank Details' ?>
                                </h5>
                                <hr>
                                <div class="form-group row">
                                    <label for="account_number"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_account_number_label')) ? $this->lang->line('seller_registration_account_number_label') : 'Account Number' ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="account_number"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_account_number_placeholder')) ? $this->lang->line('seller_registration_account_number_placeholder') : 'Enter your bank account number' ?>"
                                            name="account_number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="account_name"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_account_name_label')) ? $this->lang->line('seller_registration_account_name_label') : 'Account Owner' ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="account_name"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_account_name_placeholder')) ? $this->lang->line('seller_registration_account_name_placeholder') : 'Enter the name of the account owner' ?>"
                                            name="account_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bank_code"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_bank_code_label')) ? $this->lang->line('seller_registration_bank_code_label') : 'SWIFT Code' ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="bank_code"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_bank_code_placeholder')) ? $this->lang->line('seller_registration_bank_code_placeholder') : 'Enter SWIFT Code' ?>"
                                            name="bank_code">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bank_name"
                                        class="col-sm-2 col-form-label"><?= !empty($this->lang->line('seller_registration_bank_name_label')) ? $this->lang->line('seller_registration_bank_name_label') : 'Bank Name' ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="bank_name"
                                            placeholder="<?= !empty($this->lang->line('seller_registration_bank_name_placeholder')) ? $this->lang->line('seller_registration_bank_name_placeholder') : 'Enter Bank Name' ?>"
                                            name="bank_name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                    <button type="submit" class="btn btn-success"
                                        id="submit_btn"><?= !empty($this->lang->line('seller_registration_button_submit_label')) ? $this->lang->line('seller_registration_button_submit_label') : 'Send request' ?></button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="form-group" id="error_box">
                                    <div class="card text-white d-none mb-3">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!--/.card-->
                </div>
                <!--/.col-md-12-->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>