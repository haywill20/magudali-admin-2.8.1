<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid p-3">
            <div class="row pt-4">
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center text-danger">
                                        <i class="ion-ios-cart-outline display-4"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h5 class="text-muted text-bold-500"><?= !empty($this->lang->line('home_orders')) ? $this->lang->line('home_orders') : 'Null' ?></h5>
                                        <h3 class="text-bold-600"><?= $order_counter ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center text-info">
                                        <i class="ion-ios-albums-outline display-4 display-4"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h5 class="text-muted text-bold-500"><?= !empty($this->lang->line('home_products')) ? $this->lang->line('home_products') : 'Null' ?></h5>
                                        <h3 class="text-bold-600"><?= $products ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center text-warning">
                                        <i class="ion-ios-star-outline display-4 display-4"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h5 class="text-muted text-bold-500"><?= !empty($this->lang->line('home_rating')) ? $this->lang->line('home_rating') : 'Null' ?></h5>
                                        <h3 class="text-bold-600">
                                            <?= intval($ratings[0]['rating']) . "/" . $ratings[0]['no_of_ratings']; ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center text-success">
                                        <i class="ion-cash display-4"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h5 class="text-muted text-bold-500"><?= !empty($this->lang->line('home_balance')) ? $this->lang->line('home_balance') : 'Null' ?> (<?= $curreny ?>)</h5>
                                        <h3 class="text-bold-600"><?= number_format($balance, 2) ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12" id="ecommerceChartView">
                    <div class="card card-shadow chart-height">
                        <div class="m-3"><?= !empty($this->lang->line('home_product_sales')) ? $this->lang->line('home_product_sales') : 'Null' ?></div>
                        <div class="card-header card-header-transparent py-20 border-0">
                            <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group sales-tab"
                                role="group">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                        href="#scoreLineToDay"><?= !empty($this->lang->line('home_day')) ? $this->lang->line('home_day') : 'Null' ?></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                        href="#scoreLineToWeek"><?= !empty($this->lang->line('home_week')) ? $this->lang->line('home_week') : 'Null' ?></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                        href="#scoreLineToMonth"><?= !empty($this->lang->line('home_month')) ? $this->lang->line('home_month') : 'Null' ?></a></li>
                            </ul>
                        </div>
                        <div class="widget-content tab-content bg-white p-20">
                            <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Category Wise Product's Sales -->
                    <div class="card ">
                        <h3 class="card-title m-3"><?= !empty($this->lang->line('home_category_wise_products_count')) ? $this->lang->line('home_category_wise_products_count') : 'Null' ?>
                        </h3>
                        <div class="card-body">
                            <div id="piechart_3d" class='piechat_height'></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h6><i class="icon fa fa-info"></i> <?= $count_products_availability_status ?><?= !empty($this->lang->line('home_Products_sold _out')) ? $this->lang->line('home_Products_sold _out') : 'Null' ?>
                        </h6>
                        <a href="<?= base_url('seller/product/?flag=sold') ?>"
                            class="text-decoration-none small-box-footer"><?= !empty($this->lang->line('home_info')) ? $this->lang->line('home_info') : 'Null' ?> <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php $settings = get_settings('system_settings', true); ?>
                <div class="col-md-6 col-xs-12">
                    <div class="alert alert-primary alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h6><i class="icon fa fa-info"></i> <?= $count_products_low_status ?>
                            <?= !empty($this->lang->line('home_Products_low_in_stock')) ? $this->lang->line('home_Products_low_in_stock') : 'Null' ?>
                            <small>
                                (<?= !empty($this->lang->line('home_low_stock_limit')) ? $this->lang->line('home_low_stock_limit') : 'Null' ?>
                                <?= isset($settings['low_stock_limit']) ? $settings['low_stock_limit'] : '5' ?>)</small>
                        </h6>
                        <a href="<?= base_url('seller/product/?flag=low') ?>"
                            class="text-decoration-none small-box-footer"><?= !empty($this->lang->line('home_info')) ? $this->lang->line('home_info') : 'Null' ?> <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <h5 class="col"><?= !empty($this->lang->line('home_Order_Outlines')) ? $this->lang->line('home_Order_Outlines') : 'Null' ?></h5>
                <div class="row col-12 d-flex">
                    <div class="col-3">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3><?= $status_counts['received'] ?></h3>
                                <p><?= !empty($this->lang->line('home_recived')) ? $this->lang->line('home_recived') : 'Null' ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-xs fa-level-down-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?= $status_counts['processed'] ?></h3>
                                <p><?= !empty($this->lang->line('home_processed')) ? $this->lang->line('home_processed') : 'Null' ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-xs fa-people-carry"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="small-box details-box">
                            <div class="inner">
                                <h3><?= $status_counts['shipped'] ?></h3>
                                <p><?= !empty($this->lang->line('home_shipped')) ? $this->lang->line('home_shipped') : 'Null' ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-xs fa-shipping-fast"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?= $status_counts['delivered'] ?></h3>
                                <p><?= !empty($this->lang->line('home_delivered')) ? $this->lang->line('home_delivered') : 'Null' ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-xs fa-user-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?= $status_counts['cancelled'] ?></h3>
                                <p><?= !empty($this->lang->line('home_cancelled')) ? $this->lang->line('home_cancelled') : 'Null' ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-xs fa-times-circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <h3><?= $status_counts['returned'] ?></h3>
                                <p><?= !empty($this->lang->line('home_returned')) ? $this->lang->line('home_returned') : 'Null' ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-xs fa-level-up-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 main-content">
                    <div class="card content-area p-4">
                        <div class="card-innr">
                            <div class="gaps-1-5x row d-flex adjust-items-center">
                                <div class="row col-md-12">
                                    <div class="form-group col-md-4">
                                        <label><?= !empty($this->lang->line('home_date_range')) ? $this->lang->line('home_date_range') : 'Null' ?></label>
                                        <div class="input-group col-md-12">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                            <input type="text" class="form-control float-right" id="datepicker">
                                            <input type="hidden" id="start_date" class="form-control float-right">
                                            <input type="hidden" id="end_date" class="form-control float-right">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div>
                                            <label><?= !empty($this->lang->line('home_filter_by_status')) ? $this->lang->line('home_filter_by_status') : 'Null' ?></label>
                                            <select id="order_status" name="order_status" placeholder="Select Status"
                                                required="" class="form-control">
                                                <option value=""><?= !empty($this->lang->line('home_all_orders')) ? $this->lang->line('home_all_orders') : 'Null' ?>
                                                </option>
                                                <option value="received"><?= !empty($this->lang->line('home_recived')) ? $this->lang->line('home_recived') : 'Null' ?>
                                                </option>
                                                <option value="processed">
                                                    <?= !empty($this->lang->line('home_processed')) ? $this->lang->line('home_processed') : 'Null' ?>
                                                </option>
                                                <option value="shipped"><?= !empty($this->lang->line('home_shipped')) ? $this->lang->line('home_shipped') : 'Null' ?>
                                                </option>
                                                <option value="delivered">
                                                    <?= !empty($this->lang->line('home_delivered')) ? $this->lang->line('home_delivered') : 'Null' ?>
                                                </option>
                                                <option value="cancelled">
                                                    <?= !empty($this->lang->line('home_cancelled')) ? $this->lang->line('home_cancelled') : 'Null' ?>d
                                                </option>
                                                <option value="returned"><?= !empty($this->lang->line('home_returned')) ? $this->lang->line('home_returned') : 'Null' ?>
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Filter By payment  -->
                                    <div class="form-group col-md-3">
                                        <div>
                                            <label><?= !empty($this->lang->line('home_filter_by_payment')) ? $this->lang->line('home_filter_by_payment') : 'Null' ?></label>
                                            <select id="payment_method" name="payment_method"
                                                placeholder="Select Payment Method" required="" class="form-control">
                                                <option value=""><?= !empty($this->lang->line('home_all_payment_methods')) ? $this->lang->line('home_all_payment_methods') : 'Null' ?>
                                                </option>
                                                <option value="COD">
                                                    <?= !empty($this->lang->line('home_Cash_on_delivery')) ? $this->lang->line('home_Cash_on_delivery') : 'Null' ?>
                                                </option>
                                                <option value="Paypal"><?= !empty($this->lang->line('home_paypal')) ? $this->lang->line('home_paypal') : 'Null' ?>
                                                </option>
                                                <option value="RazorPay">
                                                    <?= !empty($this->lang->line('home_razor_pay')) ? $this->lang->line('home_razor_pay') : 'Null' ?>
                                                </option>
                                                <option value="Paystack"><?= !empty($this->lang->line('home_paystack')) ? $this->lang->line('home_paystack') : 'Null' ?>
                                                </option>
                                                <option value="Flutterwave">
                                                    <?= !empty($this->lang->line('home_flutterwave')) ? $this->lang->line('home_flutterwave') : 'Null' ?>
                                                </option>`
                                                <option value="Paytm"><?= !empty($this->lang->line('home_paytm')) ? $this->lang->line('home_paytm') : 'Null' ?></option>
                                                <option value="Stripe"><?= !empty($this->lang->line('home_stripe')) ? $this->lang->line('home_stripe') : 'Null' ?>
                                                </option>
                                                <option value="bank_transfer">
                                                    <?= !empty($this->lang->line('home_Direct_bank_transfers')) ? $this->lang->line('home_Direct_bank_transfers') : 'Null' ?>
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1 d-flex align-items-center pt-4">
                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                            onclick="status_date_wise_search()"><?= !empty($this->lang->line('home_filter')) ? $this->lang->line('home_filter') : 'Null' ?></button>
                                    </div>
                                </div>
                            </div>
                            <table class='table-striped' data-toggle="table"
                                data-url="<?= base_url('seller/orders/view_order_items') ?>" data-click-to-select="true"
                                data-side-pagination="server" data-pagination="true"
                                data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-show-columns="true"
                                data-show-refresh="true" data-trim-on-search="false" data-sort-name="o.id"
                                data-sort-order="desc" data-mobile-responsive="true" data-toolbar=""
                                data-show-export="true" data-maintain-selected="true"
                                data-export-types='["txt","excel","csv"]'
                                data-export-options='{"fileName": "order-items-list","ignoreColumn": ["state"] }'
                                data-query-params="orders_query_params">
                                <thead>
                                    <tr>
                                        <th data-field="id" data-sortable='true' data-footer-formatter="totalFormatter">
                                        <?= !empty($this->lang->line('home_id')) ? $this->lang->line('home_id') : 'Null' ?></th>
                                        <th data-field="order_item_id" data-sortable='true'>
                                            <?= !empty($this->lang->line('home_order_item_id')) ? $this->lang->line('home_order_item_id') : 'Null' ?>
                                        </th>
                                        <th data-field="order_id" data-sortable='true'>
                                            <?= !empty($this->lang->line('home_order_id')) ? $this->lang->line('home_order_id') : 'Null' ?>
                                        </th>
                                        <th data-field="user_id" data-sortable='true' data-visible="false">
                                            <?= !empty($this->lang->line('home_user_id')) ? $this->lang->line('home_user_id') : 'Null' ?>
                                        </th>
                                        <th data-field="seller_id" data-sortable='true' data-visible="false">
                                            <?= !empty($this->lang->line('home_seller_id')) ? $this->lang->line('home_seller_id') : 'Null' ?>
                                        </th>
                                        <th data-field="is_credited" data-sortable='true' data-visible="false">
                                        <?= !empty($this->lang->line('home_comission')) ? $this->lang->line('home_comission') : 'Null' ?></th>
                                        <th data-field="quantity" data-sortable='true' data-visible="false">
                                            <?= !empty($this->lang->line('home_quanty')) ? $this->lang->line('home_quanty') : 'Null' ?>
                                        </th>
                                        <th data-field="username" data-sortable='true'><?= !empty($this->lang->line('home_user_name')) ? $this->lang->line('home_user_name') : 'Null' ?></th>
                                        <th data-field="seller_name" data-sortable='true'>
                                            <?= !empty($this->lang->line('home_seller_name')) ? $this->lang->line('home_seller_name') : 'Null' ?>
                                        </th>
                                        <th data-field="product_name" data-sortable='true'>
                                            <?= !empty($this->lang->line('home_product_name')) ? $this->lang->line('home_product_name') : 'Null' ?>
                                        </th>
                                        <th data-field="mobile" data-sortable='true'>
                                            <?= !empty($this->lang->line('home_mobile')) ? $this->lang->line('home_mobile') : 'Null' ?>
                                        </th>
                                        <th data-field="sub_total" data-sortable='true' data-visible="true">
                                            Total(<?= $curreny ?>)</th>
                                        <th data-field="payment_method" data-sortable='true' data-visible='false'>
                                        <?= !empty($this->lang->line('home_all_payment_methods')) ? $this->lang->line('home_all_payment_methods') : 'Null' ?>
                                        </th>
                                        <th data-field="delivery_boy" data-sortable='true' data-visible='false'>
                                            <?= !empty($this->lang->line('home_delivery')) ? $this->lang->line('home_delivery') : 'Null' ?>
                                        </th>
                                        <th data-field="delivery_boy_id" data-sortable='true' data-visible='false'>
                                        <?= !empty($this->lang->line('home_delivery_boy_id')) ? $this->lang->line('home_delivery_boy_id') : 'Null' ?></th>
                                        <th data-field="product_variant_id" data-sortable='true' data-visible='false'>
                                        <?= !empty($this->lang->line('home_Product_Variant_Id')) ? $this->lang->line('home_Product_Variant_Id') : 'Null' ?></th>
                                        <th data-field="delivery_date" data-sortable='true' data-visible='false'>
                                        <?= !empty($this->lang->line('home_delivery_date')) ? $this->lang->line('home_delivery_date') : 'Null' ?></th>
                                        <th data-field="delivery_time" data-sortable='true' data-visible='false'>
                                        <?= !empty($this->lang->line('home_delivery_time')) ? $this->lang->line('home_delivery_time') : 'Null' ?></th>
                                        <th data-field="status" data-sortable='true' data-visible='false'>
                                            <?= !empty($this->lang->line('home_status')) ? $this->lang->line('home_status') : 'Null' ?>
                                        </th>
                                        <th data-field="active_status" data-sortable='true' data-visible='true'>
                                            <?= !empty($this->lang->line('home_active_status')) ? $this->lang->line('home_active_status') : 'Null' ?>
                                        </th>
                                        <th data-field="date_added" data-sortable='true'>
                                            <?= !empty($this->lang->line('home_order_date')) ? $this->lang->line('home_order_date') : 'Null' ?>
                                        </th>
                                        <th data-field="operate"><?= !empty($this->lang->line('home_action')) ? $this->lang->line('home_action') : 'Null' ?>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div><!-- .card-innr -->
                    </div><!-- .card -->
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="transaction_modal" data-backdrop="static"
        data-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="user_name"><?= !empty($this->lang->line('home_order_tracking')) ? $this->lang->line('home_order_tracking') : 'Null' ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-info">
                                <!-- form start -->
                                <form class="form-horizontal" id="order_tracking_form"
                                    action="<?= base_url('seller/orders/update-order-tracking/'); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="order_id" id="order_id">
                                    <input type="hidden" name="order_item_id" id="order_item_id">
                                    <div class="card-body pad">
                                        <div class="form-group ">
                                            <label for="courier_agency"><?= !empty($this->lang->line('home_courier_agency')) ? $this->lang->line('home_courier_agency') : 'Null' ?></label>
                                            <input type="text" class="form-control" name="courier_agency"
                                                id="courier_agency" placeholder="<?= !empty($this->lang->line('home_courier_agency')) ? $this->lang->line('home_courier_agency') : 'Null' ?>" />
                                        </div>
                                        <div class="form-group ">
                                            <label for="tracking_id"><?= !empty($this->lang->line('home_tracking_id')) ? $this->lang->line('home_tracking_id') : 'Null' ?></label>
                                            <input type="text" class="form-control" name="tracking_id" id="tracking_id"
                                                placeholder="<?= !empty($this->lang->line('home_tracking_id')) ? $this->lang->line('home_tracking_id') : 'Null' ?>" />
                                        </div>
                                        <div class="form-group ">
                                            <label for="url"><?= !empty($this->lang->line('home_url')) ? $this->lang->line('home_url') : 'Null' ?></label>
                                            <input type="text" class="form-control" name="url" id="url"
                                                placeholder="<?= !empty($this->lang->line('home_url')) ? $this->lang->line('home_url') : 'Null' ?>" />
                                        </div>
                                        <div class="form-group">
                                            <button type="reset" class="btn btn-warning"><?= !empty($this->lang->line('home_reset')) ? $this->lang->line('home_reset') : 'Null' ?></button>
                                            <button type="submit" class="btn btn-success" id="submit_btn"><?= !empty($this->lang->line('home_save')) ? $this->lang->line('home_save') : 'Null' ?></button>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="form-group" id="error_box">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </form>
                            </div>
                            <!--/.card-->
                        </div>
                        <!--/.col-md-12-->
                    </div>
                    <!-- /.row -->

                </div>
                </form>
            </div>
        </div>
    </div>
</div>