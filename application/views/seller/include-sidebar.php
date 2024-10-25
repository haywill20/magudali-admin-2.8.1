<?php $settings = get_settings('system_settings', true); ?>
<aside class="main-sidebar elevation-2 sidebar-dark-indigo">
    <!-- Brand Logo -->
    <a href="<?= base_url('seller/home') ?>" class="brand-link">
        <img src="<?= base_url() . get_settings('favicon') ?>" alt="<?= $settings['app_name']; ?>"
            title="<?= $settings['app_name']; ?>" class="brand-image">
        <span class="brand-text font-weight-light small"><?= $settings['app_name']; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat" data-widget="treeview"
                role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="<?= base_url('seller/home') ?>" class="nav-link">
                        <i class="nav-icon fas fa-home text-primary"></i>
                        <p>
                            <?= !empty($this->lang->line('sidebar_home')) ? $this->lang->line('sidebar_home') : 'Inicio' ?>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart text-warning"></i>
                        <p>
                            <?= !empty($this->lang->line('sidebar_orders')) ? $this->lang->line('sidebar_orders') : 'Pedidos' ?>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('seller/orders/') ?>" class="nav-link">
                                <i class="fa fa-shopping-cart nav-icon"></i>
                                <p><?= !empty($this->lang->line('sidebar_orders')) ? $this->lang->line('sidebar_orders') : 'Pedidos' ?>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('seller/orders/order-tracking') ?>" class="nav-link">
                                <i class="fa fa-map-marker-alt nav-icon"></i>
                                <p>
                                    <?= !empty($this->lang->line('sidebar_orders_tracking')) ? $this->lang->line('sidebar_orders_tracking') : 'Null' ?>
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('seller/category/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-bullseye text-success"></i>
                        <p>
                            <?= !empty($this->lang->line('sidebar_categories')) ? $this->lang->line('sidebar_categories') : 'Null' ?>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('seller/point_of_sale/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p>
                            <?= !empty($this->lang->line('sidebar_point_of_sale')) ? $this->lang->line('sidebar_point_of_sale') : 'Null' ?>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('seller/manage_stock') ?>" class="nav-link">
                        <i class="nav-icon fa fa-cube text-success"></i>
                        <p>
                            <?= !empty($this->lang->line('sidebar_manage_stock')) ? $this->lang->line('sidebar_manage_stock') : 'Null' ?>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('seller/chat') ?>" class="nav-link">
                        <i class="nav-icon 	far fa-comments text-warning"></i>
                        <p>
                            <?= !empty($this->lang->line('sidebar_chat')) ? $this->lang->line('sidebar_chat') : 'Null' ?>
                        </p>
                    </a>
                </li>


                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link menu-open">
                        <i class="nav-icon fas fa-cubes text-danger"></i>
                        <p>
                            <?= !empty($this->lang->line('sidebar_products')) ? $this->lang->line('sidebar_products') : 'Null' ?>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?= base_url('seller/attribute_set/') ?>" class="nav-link">
                                <i class="fa fa-cogs nav-icon"></i>
                                <p><?= !empty($this->lang->line('sidebar_attribute_sets')) ? $this->lang->line('sidebar_attribute_sets') : 'Null' ?>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/attributes/') ?>" class="nav-link">
                                <i class="fas fa-sliders-h nav-icon"></i>
                                <p><?= !empty($this->lang->line('sidebar_attributes')) ? $this->lang->line('sidebar_attributes') : 'Null' ?>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/attribute_value/') ?>" class="nav-link">
                                <i class="fas fa-filter nav-icon"></i>
                                <p><?= !empty($this->lang->line('sidebar_attributes_values')) ? $this->lang->line('sidebar_attributes_values') : 'Null' ?>
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?= base_url('seller/taxes/') ?>" class="nav-link">
                                <i class="fas fa-percentage nav-icon"></i>
                                <p><?= !empty($this->lang->line('sidebar_tax')) ? $this->lang->line('sidebar_tax') : 'Null' ?>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/product/create-product') ?>" class="nav-link">
                                <i class="fas fa-plus-square nav-icon"></i>
                                <p><?= !empty($this->lang->line('sidebar_add_products')) ? $this->lang->line('sidebar_add_products') : 'Null' ?>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/product/bulk-upload') ?>" class="nav-link">
                                <i class="fas fa-upload nav-icon"></i>
                                <p><?= !empty($this->lang->line('sidebar_bulk_upload')) ? $this->lang->line('sidebar_bulk_upload') : 'Null' ?>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/product/') ?>" class="nav-link">
                                <i class="fas fa-boxes nav-icon"></i>
                                <p><?= !empty($this->lang->line('sidebar_manage_products')) ? $this->lang->line('sidebar_manage_products') : 'Null' ?>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('seller/product_faqs/') ?>" class="nav-link">
                                <i class="fas fa-question-circle nav-icon"></i>
                                <p><?= !empty($this->lang->line('sidebar_products_faqs')) ? $this->lang->line('sidebar_products_faqs') : 'Null' ?>
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('seller/media/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-icons text-success"></i>
                        <p>
                            <?= !empty($this->lang->line('sidebar_media')) ? $this->lang->line('sidebar_media') : 'Null' ?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('seller/transaction/wallet-transactions') ?>" class="nav-link">
                        <i class="fa fa-rupee-sign nav-icon text-warning"></i>
                        <p><?= !empty($this->lang->line('sidebar_wallet_transactions')) ? $this->lang->line('sidebar_wallet_transactions') : 'Null' ?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('seller/payment-request/withdrawal-requests') ?>" class="nav-link">
                        <i class="nav-icon fas fa-money-bill-wave text-danger"></i>
                        <p><?= !empty($this->lang->line('sidebar_withdrawal_requests')) ? $this->lang->line('sidebar_withdrawal_requests') : 'Null' ?>
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="<?= base_url('seller/Pickup_location/manage_pickup_locations') ?>" class="nav-link">
                        <i class="nav-icon fas fa-shipping-fast text-success"></i>
                        <p>
                            <?= !empty($this->lang->line('sidebar_pickup_location')) ? $this->lang->line('sidebar_pickup_location') : 'Null' ?>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-map-marked-alt text-info"></i>
                        <p>
                            <?= !empty($this->lang->line('sidebar_location')) ? $this->lang->line('sidebar_location') : 'Null' ?>
                            <i class="right fas fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('seller/area/manage-zipcodes') ?>" class="nav-link">
                                <i class="fa fa-map-pin nav-icon "></i>
                                <p><?= !empty($this->lang->line('sidebar_zipcodes')) ? $this->lang->line('sidebar_zipcodes') : 'Null' ?>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('seller/area/manage-cities') ?>" class="nav-link">
                                <i class="fa fa-location-arrow nav-icon "></i>
                                <p><?= !empty($this->lang->line('sidebar_city')) ? $this->lang->line('sidebar_city') : 'Null' ?>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/area/manage-areas') ?>" class="nav-link">
                                <i class="fas fa-street-view nav-icon "></i>
                                <p>
                                    <?= !empty($this->lang->line('sidebar_areas')) ? $this->lang->line('sidebar_areas') : 'Null' ?>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('seller/area/manage_countries') ?>" class="nav-link">
                                <i class="fas fa-solid fa-globe nav-icon "></i>
                                <p>
                                    <?= !empty($this->lang->line('sidebar_countries')) ? $this->lang->line('sidebar_countries') : 'Null' ?>
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-pie nav-icon text-primary"></i>
                        <p><?= !empty($this->lang->line('sidebar_reports')) ? $this->lang->line('sidebar_reports') : 'Null' ?>
                            <i class="right fas fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('seller/sales-report') ?>" class="nav-link">
                                <i class="fa fa-chart-line nav-icon "></i>
                                <p><?= !empty($this->lang->line('sidebar_sales_report')) ? $this->lang->line('sidebar_sales_report') : 'Null' ?>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('seller/sales-inventory') ?>" class="nav-link">
                                <i class="fa fa-chart-line nav-icon "></i>
                                <p><?= !empty($this->lang->line('sidebar_sales_inventory_reports')) ? $this->lang->line('sidebar_sales_inventory_reports') : 'Null' ?>
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>