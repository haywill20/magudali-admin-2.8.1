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
                                        <h5 class="text-muted text-bold-500">
                                            <?= !empty($this->lang->line('home_orders')) ? $this->lang->line('home_orders') : 'Null' ?>
                                        </h5>
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
                                        <h5 class="text-muted text-bold-500">
                                            <?= !empty($this->lang->line('home_products')) ? $this->lang->line('home_products') : 'Null' ?>
                                        </h5>
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
                                        <h5 class="text-muted text-bold-500">
                                            <?= !empty($this->lang->line('home_rating')) ? $this->lang->line('home_rating') : 'Null' ?>
                                        </h5>
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
                                        <h5 class="text-muted text-bold-500">
                                            <?= !empty($this->lang->line('home_balance')) ? $this->lang->line('home_balance') : 'Null' ?>
                                            (<?= $curreny?>)</h5>
                                        <h3 class="text-bold-600"><?= number_format($balance, 2) ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12" id="ecommerceChartView">
                    <div class="card card-shadow chart-height">
                        <div class="m-3">
                            <?= !empty($this->lang->line('home_product_sales')) ? $this->lang->line('home_product_sales') : 'Null' ?>
                        </div>
                        <div class="card-header card-header-transparent py-20 border-0">
                            <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group sales-tab"
                                role="group">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                        href="#scoreLineToDay"><?= !empty($this->lang->line('home_day')) ? $this->lang->line('home_day') : 'Null' ?></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                        href="#scoreLineToWeek"><?= !empty($this->lang->line('home_week')) ? $this->lang->line('home_week') : 'Null' ?></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                        href="#scoreLineToMonth"><?= !empty($this->lang->line('home_month')) ? $this->lang->line('home_month') : 'Null' ?></a>
                                </li>
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
                        <h3 class="card-title m-3">
                            <?= !empty($this->lang->line('home_category_wise_products_count')) ? $this->lang->line('home_category_wise_products_count') : 'Null' ?>
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
                        <h6><i class="icon fa fa-info"></i> <?= $count_products_availability_status ?>
                            <?= !empty($this->lang->line('home_Products_sold _out')) ? $this->lang->line('home_Products_sold _out') : 'Null' ?>
                        </h6>
                        <a href="<?= base_url('seller/product/?flag=sold') ?>"
                            class="text-decoration-none small-box-footer"><?= !empty($this->lang->line('home_info')) ? $this->lang->line('home_info') : 'Null' ?>
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php $settings = get_settings('system_settings', true); ?>
                <div class="col-md-6 col-xs-12">
                    <div class="alert alert-primary alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h6><i class="icon fa fa-info"></i> <?= $count_products_low_status ?>
                            <?= !empty($this->lang->line('home_Products_low_in_stock')) ? $this->lang->line('home_Products_low_in_stock') : 'Null' ?><small>
                                (<?= !empty($this->lang->line('home_low_stock_limit')) ? $this->lang->line('home_low_stock_limit') : 'Null' ?>
                                <?= isset($settings['low_stock_limit']) ? $settings['low_stock_limit'] : '5' ?>)</small>
                        </h6>
                        <a href="<?= base_url('seller/product/?flag=low') ?>"
                            class="text-decoration-none small-box-footer"><?= !empty($this->lang->line('home_info')) ? $this->lang->line('home_info') : 'Null' ?>
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <h5 class="col">
                    <?= !empty($this->lang->line('home_Order_Outlines')) ? $this->lang->line('home_Order_Outlines') : 'Null' ?>
                </h5>
                <div class="row col-12 d-flex">
                    <div class="col-3">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3><?= $status_counts['received'] ?></h3>
                                <p><?= !empty($this->lang->line('recived')) ? $this->lang->line('recived') : 'Null' ?>
                                </p>
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
                                <p><?= !empty($this->lang->line('processed')) ? $this->lang->line('processed') : 'Null' ?>
                                </p>
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
                                <p><?= !empty($this->lang->line('shipped')) ? $this->lang->line('shipped') : 'Null' ?>
                                </p>
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
                                <p><?= !empty($this->lang->line('delivered')) ? $this->lang->line('delivered') : 'Null' ?>
                                </p>
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
                                <p><?= !empty($this->lang->line('cancelled')) ? $this->lang->line('cancelled') : 'Null' ?>
                                </p>
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
                                <p><?= !empty($this->lang->line('returned')) ? $this->lang->line('returned') : 'Null' ?>
                                </p>
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
                                        <label><?= !empty($this->lang->line('date_range')) ? $this->lang->line('date_range') : 'Null' ?></label>
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
                                            <label><?= !empty($this->lang->line('filter_by_status')) ? $this->lang->line('filter_by_status') : 'Null' ?></label>
                                            <select id="order_status" name="order_status" placeholder="Select Status"
                                                required="" class="form-control">
                                                <option value="">
                                                    <?= !empty($this->lang->line('all_orders')) ? $this->lang->line('all_orders') : 'Null' ?>
                                                </option>
                                                <option value="received">
                                                    <?= !empty($this->lang->line('recived')) ? $this->lang->line('recived') : 'Null' ?>
                                                </option>
                                                <option value="processed">
                                                    <?= !empty($this->lang->line('processed')) ? $this->lang->line('processed') : 'Null' ?>
                                                </option>
                                                <option value="shipped">
                                                    <?= !empty($this->lang->line('shipped')) ? $this->lang->line('shipped') : 'Null' ?>
                                                </option>
                                                <option value="delivered">
                                                    <?= !empty($this->lang->line('delivered')) ? $this->lang->line('delivered') : 'Null' ?>
                                                </option>
                                                <option value="cancelled">
                                                    <?= !empty($this->lang->line('cancelled')) ? $this->lang->line('cancelled') : 'Null' ?>
                                                </option>
                                                <option value="returned">
                                                    <?= !empty($this->lang->line('returned')) ? $this->lang->line('returned') : 'Null' ?>
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Filter By payment  -->
                                    <div class="form-group col-md-3">
                                        <div>
                                            <label><?= !empty($this->lang->line('filter_by_payment')) ? $this->lang->line('filter_by_payment') : 'Null' ?></label>
                                            <select id="payment_method" name="payment_method"
                                                placeholder="Select Payment Method" required="" class="form-control">
                                                <option value="">
                                                    <?= !empty($this->lang->line('all_payment_methods')) ? $this->lang->line('all_payment_methods') : 'Null' ?>
                                                </option>
                                                <option value="COD">
                                                    <?= !empty($this->lang->line('cash_on_delivery')) ? $this->lang->line('cash_on_delivery') : 'Null' ?>
                                                </option>
                                                <option value="Paypal">
                                                    <?= !empty($this->lang->line('paypal')) ? $this->lang->line('paypal') : 'Null' ?>
                                                </option>
                                                <option value="RazorPay">
                                                    <?= !empty($this->lang->line('razor_pay')) ? $this->lang->line('razor_pay') : 'Null' ?>
                                                </option>
                                                <option value="Paystack">
                                                    <?= !empty($this->lang->line('paystack')) ? $this->lang->line('paystack') : 'Null' ?>
                                                </option>
                                                <option value="Flutterwave">
                                                    <?= !empty($this->lang->line('flutterwave')) ? $this->lang->line('flutterwave') : 'Null' ?>
                                                </option>`
                                                <option value="Paytm">
                                                    <?= !empty($this->lang->line('paytm')) ? $this->lang->line('paytm') : 'Null' ?>
                                                </option>
                                                <option value="Stripe">
                                                    <?= !empty($this->lang->line('stripe')) ? $this->lang->line('stripe') : 'Null' ?>
                                                </option>
                                                <option value="bank_transfer">
                                                    <?= !empty($this->lang->line('direct_bank_transfers')) ? $this->lang->line('direct_bank_transfers') : 'Null' ?>
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1 d-flex align-items-center pt-4">
                                        <button type="button" class="btn btn-outline-primary btn-sm"
                                            onclick="status_date_wise_search()"><?= !empty($this->lang->line('button_filter')) ? $this->lang->line('button_filter') : 'Null' ?></button>
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
                                            <?= !empty($this->lang->line('id')) ? $this->lang->line('id') : 'Null' ?>
                                        </th>
                                        <th data-field="order_item_id" data-sortable='true'>
                                            <?= !empty($this->lang->line('order_item_id')) ? $this->lang->line('order_item_id') : 'Null' ?>
                                        </th>
                                        <th data-field="order_id" data-sortable='true'>
                                            <?= !empty($this->lang->line('order_id')) ? $this->lang->line('order_id') : 'Null' ?>
                                        </th>
                                        <th data-field="user_id" data-sortable='true' data-visible="false">
                                            <?= !empty($this->lang->line('user_id')) ? $this->lang->line('user_id') : 'Null' ?>
                                        </th>
                                        <th data-field="seller_id" data-sortable='true' data-visible="false">
                                            <?= !empty($this->lang->line('seller_id')) ? $this->lang->line('seller_id') : 'Null' ?>
                                        </th>
                                        <th data-field="is_credited" data-sortable='true' data-visible="false">
                                            <?= !empty($this->lang->line('comission')) ? $this->lang->line('comission') : 'Null' ?>
                                        </th>
                                        <th data-field="quantity" data-sortable='true' data-visible="false">
                                            <?= !empty($this->lang->line('quanty')) ? $this->lang->line('quanty') : 'Null' ?>
                                        </th>
                                        <th data-field="username" data-sortable='true'>
                                            <?= !empty($this->lang->line('user_name')) ? $this->lang->line('user_name') : 'Null' ?>
                                        </th>
                                        <th data-field="seller_name" data-sortable='true'>
                                            <?= !empty($this->lang->line('seller_name')) ? $this->lang->line('seller_name') : 'Null' ?>
                                        </th>
                                        <th data-field="product_name" data-sortable='true'>
                                            <?= !empty($this->lang->line('product_name')) ? $this->lang->line('product_name') : 'Null' ?>
                                        </th>
                                        <th data-field="mobile" data-sortable='true'>
                                            <?= !empty($this->lang->line('mobile')) ? $this->lang->line('mobile') : 'Null' ?>
                                        </th>
                                        <th data-field="sub_total" data-sortable='true' data-visible="true">
                                            <?= !empty($this->lang->line('total')) ? $this->lang->line('total') : 'Null' ?>(<?= $curreny ?>)
                                        </th>
                                        <th data-field="payment_method" data-sortable='true' data-visible='false'>
                                            <?= !empty($this->lang->line('payment_methods')) ? $this->lang->line('payment_methods') : 'Null' ?>
                                        </th>
                                        <th data-field="delivery_boy" data-sortable='true' data-visible='false'>
                                            <?= !empty($this->lang->line('delivered_by')) ? $this->lang->line('delivered_by') : 'Null' ?>
                                        </th>
                                        <th data-field="delivery_boy_id" data-sortable='true' data-visible='false'>
                                            <?= !empty($this->lang->line('delivery_boy_id')) ? $this->lang->line('delivery_boy_id') : 'Null' ?>
                                        </th>
                                        <th data-field="product_variant_id" data-sortable='true' data-visible='false'>
                                            <?= !empty($this->lang->line('product_Variant_Id')) ? $this->lang->line('product_Variant_Id') : 'Null' ?>
                                        </th>
                                        <th data-field="delivery_date" data-sortable='true' data-visible='false'>
                                            <?= !empty($this->lang->line('delivery_date')) ? $this->lang->line('delivery_date') : 'Null' ?>
                                        </th>
                                        <th data-field="delivery_time" data-sortable='true' data-visible='false'>
                                            <?= !empty($this->lang->line('delivery_time')) ? $this->lang->line('delivery_time') : 'Null' ?>
                                        </th>
                                        <th data-field="status" data-sortable='true' data-visible='false'>
                                            <?= !empty($this->lang->line('status')) ? $this->lang->line('status') : 'Null' ?>
                                        </th>
                                        <th data-field="active_status" data-sortable='true' data-visible='true'>
                                            <?= !empty($this->lang->line('active_status')) ? $this->lang->line('active_status') : 'Null' ?>
                                        </th>
                                        <th data-field="date_added" data-sortable='true'>
                                            <?= !empty($this->lang->line('order_date')) ? $this->lang->line('order_date') : 'Null' ?>
                                        </th>
                                        <th data-field="operate">
                                            <?= !empty($this->lang->line('action')) ? $this->lang->line('action') : 'Null' ?>
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
                    <h5 class="modal-title" id="user_name">
                        <?= !empty($this->lang->line('order_tracking')) ? $this->lang->line('order_tracking') : 'Null' ?>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-info">
                                <!-- form start -->
                                <form class="form-horizontal " id="order_tracking_form"
                                    action="<?= base_url('seller/orders/update-order-tracking/'); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="order_id" id="order_id">
                                    <input type="hidden" name="order_item_id" id="order_item_id">
                                    <div class="card-body pad">
                                        <div class="form-group ">
                                            <label
                                                for="courier_agency"><?= !empty($this->lang->line('courier_agency')) ? $this->lang->line('courier_agency') : 'Null' ?></label>
                                            <input type="text" class="form-control" name="courier_agency"
                                                id="courier_agency"
                                                placeholder="<?= !empty($this->lang->line('courier_agency')) ? $this->lang->line('courier_agency') : 'Null' ?>" />
                                        </div>
                                        <div class="form-group ">
                                            <label
                                                for="tracking_id"><?= !empty($this->lang->line('tracking_id')) ? $this->lang->line('tracking_id') : 'Null' ?></label>
                                            <input type="text" class="form-control" name="tracking_id" id="tracking_id"
                                                placeholder="<?= !empty($this->lang->line('tracking_id')) ? $this->lang->line('tracking_id') : 'Null' ?>" />
                                        </div>
                                        <div class="form-group ">
                                            <label for="url">URL</label>
                                            <input type="text" class="form-control" name="url" id="url"
                                                placeholder="URL" />
                                        </div>
                                        <div class="form-group">
                                            <button type="reset"
                                                class="btn btn-warning"><?= !empty($this->lang->line('reset')) ? $this->lang->line('reset') : 'Null' ?></button>
                                            <button type="submit" class="btn btn-success"
                                                id="submit_btn"><?= !empty($this->lang->line('save')) ? $this->lang->line('save') : 'Null' ?></button>
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