<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-26 00:36:42 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-26 00:36:42 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-26 00:36:42 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-26 00:52:38 --> Could not find the language line "sellers"
ERROR - 2024-01-26 00:52:38 --> Could not find the language line "blogs"
ERROR - 2024-01-26 00:52:38 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 00:52:38 --> Could not find the language line "sellers"
ERROR - 2024-01-26 00:52:38 --> Could not find the language line "blogs"
ERROR - 2024-01-26 00:52:38 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 00:52:38 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 00:52:38 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 00:52:38 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 00:52:38 --> Could not find the language line "compare"
ERROR - 2024-01-26 01:06:59 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "sellers"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "blogs"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "sellers"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "blogs"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "product"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "check_availability"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "seller"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "tags"
ERROR - 2024-01-26 01:22:47 --> Severity: Warning --> Undefined array key "user_id" /home/maguinev/public_html/application/views/front-end/classic/pages/product-page.php 558
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "description"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 01:22:47 --> Could not find the language line "compare"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "sellers"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "blogs"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "sellers"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "blogs"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "product"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "check_availability"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "seller"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "tags"
ERROR - 2024-01-26 02:40:14 --> Severity: Warning --> Undefined array key "user_id" /home/maguinev/public_html/application/views/front-end/classic/pages/product-page.php 558
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "description"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 02:40:14 --> Could not find the language line "compare"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "sellers"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "blogs"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "sellers"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "blogs"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "product"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "check_availability"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "seller"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "tags"
ERROR - 2024-01-26 03:56:18 --> Severity: Warning --> Undefined array key "user_id" /home/maguinev/public_html/application/views/front-end/classic/pages/product-page.php 558
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "description"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 03:56:18 --> Could not find the language line "compare"
ERROR - 2024-01-26 04:08:48 --> Could not find the language line "sellers"
ERROR - 2024-01-26 04:08:48 --> Could not find the language line "blogs"
ERROR - 2024-01-26 04:08:48 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 04:08:48 --> Could not find the language line "sellers"
ERROR - 2024-01-26 04:08:48 --> Could not find the language line "blogs"
ERROR - 2024-01-26 04:08:48 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 04:08:48 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 04:08:48 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 04:08:48 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 04:08:48 --> Could not find the language line "compare"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "sellers"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "blogs"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "sellers"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "blogs"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "brands"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "attributes"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "brands"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 04:21:33 --> Could not find the language line "compare"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "sellers"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "blogs"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "sellers"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "blogs"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "product"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "check_availability"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "seller"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "tags"
ERROR - 2024-01-26 04:33:47 --> Severity: Warning --> Undefined array key "user_id" /home/maguinev/public_html/application/views/front-end/classic/pages/product-page.php 558
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "description"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 04:33:47 --> Could not find the language line "compare"
ERROR - 2024-01-26 04:44:24 --> Could not find the language line "sellers"
ERROR - 2024-01-26 04:44:24 --> Could not find the language line "blogs"
ERROR - 2024-01-26 04:44:24 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 04:44:24 --> Could not find the language line "sellers"
ERROR - 2024-01-26 04:44:24 --> Could not find the language line "blogs"
ERROR - 2024-01-26 04:44:24 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 04:44:24 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 04:44:24 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 04:44:24 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 04:44:24 --> Could not find the language line "compare"
ERROR - 2024-01-26 05:35:45 --> Could not find the language line "sellers"
ERROR - 2024-01-26 05:35:45 --> Could not find the language line "blogs"
ERROR - 2024-01-26 05:35:45 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 05:35:45 --> Could not find the language line "sellers"
ERROR - 2024-01-26 05:35:45 --> Could not find the language line "blogs"
ERROR - 2024-01-26 05:35:45 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 05:35:45 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 05:35:45 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 05:35:45 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 05:35:45 --> Could not find the language line "compare"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "sellers"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "blogs"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "sellers"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "blogs"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "sellers"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "sellers"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "view_products"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "view_products"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "view_products"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "view_products"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "view_products"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "view_products"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "view_products"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 05:40:45 --> Could not find the language line "compare"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "sellers"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "blogs"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "sellers"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "blogs"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "brands"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "attributes"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "brands"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 05:41:18 --> Could not find the language line "compare"
ERROR - 2024-01-26 05:54:59 --> Could not find the language line "sellers"
ERROR - 2024-01-26 05:54:59 --> Could not find the language line "blogs"
ERROR - 2024-01-26 05:54:59 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 05:54:59 --> Could not find the language line "sellers"
ERROR - 2024-01-26 05:54:59 --> Could not find the language line "blogs"
ERROR - 2024-01-26 05:54:59 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 05:54:59 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 05:54:59 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 05:54:59 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 05:54:59 --> Could not find the language line "compare"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "sellers"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "blogs"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "sellers"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "blogs"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "brands"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "attributes"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "brands"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 07:30:02 --> Could not find the language line "compare"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "sellers"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "blogs"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "sellers"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "blogs"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "product"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "check_availability"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "seller"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "tags"
ERROR - 2024-01-26 08:06:00 --> Severity: Warning --> Undefined array key "user_id" /home/maguinev/public_html/application/views/front-end/classic/pages/product-page.php 558
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "description"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 08:06:00 --> Could not find the language line "compare"
ERROR - 2024-01-26 09:34:01 --> Could not find the language line "sellers"
ERROR - 2024-01-26 09:34:01 --> Could not find the language line "blogs"
ERROR - 2024-01-26 09:34:01 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 09:34:01 --> Could not find the language line "sellers"
ERROR - 2024-01-26 09:34:01 --> Could not find the language line "blogs"
ERROR - 2024-01-26 09:34:01 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 09:34:01 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 09:34:01 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 09:34:01 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 09:34:01 --> Could not find the language line "compare"
ERROR - 2024-01-26 11:06:10 --> Could not find the language line "sellers"
ERROR - 2024-01-26 11:06:10 --> Could not find the language line "blogs"
ERROR - 2024-01-26 11:06:10 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 11:06:10 --> Could not find the language line "sellers"
ERROR - 2024-01-26 11:06:10 --> Could not find the language line "blogs"
ERROR - 2024-01-26 11:06:10 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 11:06:10 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 11:06:10 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 11:06:10 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 11:06:10 --> Could not find the language line "compare"
ERROR - 2024-01-26 11:15:07 --> Could not find the language line "sellers"
ERROR - 2024-01-26 11:15:07 --> Could not find the language line "blogs"
ERROR - 2024-01-26 11:15:07 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 11:15:07 --> Could not find the language line "sellers"
ERROR - 2024-01-26 11:15:07 --> Could not find the language line "blogs"
ERROR - 2024-01-26 11:15:07 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 11:15:07 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 11:15:07 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 11:15:07 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 11:15:07 --> Could not find the language line "compare"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "sellers"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "blogs"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "sellers"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "blogs"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "product"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "no_video_tag_support"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "no_video_tag_support"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "check_availability"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "seller"
ERROR - 2024-01-26 12:42:55 --> Severity: Warning --> Undefined array key "user_id" /home/maguinev/public_html/application/views/front-end/classic/pages/product-page.php 558
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "description"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 12:42:55 --> Could not find the language line "compare"
ERROR - 2024-01-26 13:05:04 --> Could not find the language line "sellers"
ERROR - 2024-01-26 13:05:04 --> Could not find the language line "blogs"
ERROR - 2024-01-26 13:05:04 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 13:05:04 --> Could not find the language line "sellers"
ERROR - 2024-01-26 13:05:04 --> Could not find the language line "blogs"
ERROR - 2024-01-26 13:05:04 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 13:05:04 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 13:05:04 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 13:05:04 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 13:05:04 --> Could not find the language line "compare"
ERROR - 2024-01-26 13:12:22 --> Could not find the language line "sellers"
ERROR - 2024-01-26 13:12:22 --> Could not find the language line "blogs"
ERROR - 2024-01-26 13:12:22 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 13:12:22 --> Could not find the language line "sellers"
ERROR - 2024-01-26 13:12:22 --> Could not find the language line "blogs"
ERROR - 2024-01-26 13:12:22 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 13:12:22 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 13:12:22 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 13:12:22 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 13:12:22 --> Could not find the language line "compare"
ERROR - 2024-01-26 13:12:24 --> Could not find the language line "sellers"
ERROR - 2024-01-26 13:12:24 --> Could not find the language line "blogs"
ERROR - 2024-01-26 13:12:24 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 13:12:24 --> Could not find the language line "sellers"
ERROR - 2024-01-26 13:12:24 --> Could not find the language line "blogs"
ERROR - 2024-01-26 13:12:24 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 13:12:24 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 13:12:24 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 13:12:24 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 13:12:24 --> Could not find the language line "compare"
ERROR - 2024-01-26 13:12:26 --> Could not find the language line "sellers"
ERROR - 2024-01-26 13:12:26 --> Could not find the language line "blogs"
ERROR - 2024-01-26 13:12:26 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 13:12:26 --> Could not find the language line "sellers"
ERROR - 2024-01-26 13:12:26 --> Could not find the language line "blogs"
ERROR - 2024-01-26 13:12:26 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 13:12:26 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 13:12:26 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 13:12:26 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 13:12:26 --> Could not find the language line "compare"
ERROR - 2024-01-26 13:16:33 --> Could not find the language line "sellers"
ERROR - 2024-01-26 13:16:33 --> Could not find the language line "blogs"
ERROR - 2024-01-26 13:16:33 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 13:16:33 --> Could not find the language line "sellers"
ERROR - 2024-01-26 13:16:33 --> Could not find the language line "blogs"
ERROR - 2024-01-26 13:16:33 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 13:16:33 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 13:16:33 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 13:16:33 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 13:16:33 --> Could not find the language line "compare"
ERROR - 2024-01-26 13:57:14 --> Could not find the language line "sellers"
ERROR - 2024-01-26 13:57:14 --> Could not find the language line "blogs"
ERROR - 2024-01-26 13:57:14 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 13:57:14 --> Could not find the language line "sellers"
ERROR - 2024-01-26 13:57:14 --> Could not find the language line "blogs"
ERROR - 2024-01-26 13:57:14 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 13:57:14 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 13:57:14 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 13:57:14 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 13:57:14 --> Could not find the language line "compare"
ERROR - 2024-01-26 13:57:26 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-26 13:57:26 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-26 13:57:26 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-26 14:51:38 --> Severity: error --> Exception: Call to undefined function notify_event() /home/maguinev/public_html/application/models/Seller_model.php 405
ERROR - 2024-01-26 14:54:07 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-26 14:54:07 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-26 14:54:07 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-26 15:11:41 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-26 15:11:41 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-26 15:11:41 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-26 15:12:21 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-26 15:12:21 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-26 15:12:21 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "sellers"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "blogs"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "sellers"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "blogs"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "compare"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "sellers"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "blogs"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "sellers"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "blogs"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 16:27:49 --> Could not find the language line "compare"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "sellers"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "blogs"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "sellers"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "blogs"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "compare"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "sellers"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "blogs"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "sellers"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "blogs"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 18:25:41 --> Could not find the language line "compare"
ERROR - 2024-01-26 19:10:07 --> Could not find the language line "sellers"
ERROR - 2024-01-26 19:10:07 --> Could not find the language line "blogs"
ERROR - 2024-01-26 19:10:07 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 19:10:07 --> Could not find the language line "sellers"
ERROR - 2024-01-26 19:10:07 --> Could not find the language line "blogs"
ERROR - 2024-01-26 19:10:07 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 19:10:07 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 19:10:07 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 19:10:07 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 19:10:07 --> Could not find the language line "compare"
ERROR - 2024-01-26 19:10:08 --> Could not find the language line "sellers"
ERROR - 2024-01-26 19:10:08 --> Could not find the language line "blogs"
ERROR - 2024-01-26 19:10:08 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 19:10:08 --> Could not find the language line "sellers"
ERROR - 2024-01-26 19:10:08 --> Could not find the language line "blogs"
ERROR - 2024-01-26 19:10:08 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 19:10:08 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 19:10:08 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 19:10:08 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 19:10:08 --> Could not find the language line "compare"
ERROR - 2024-01-26 19:34:39 --> Could not find the language line "sellers"
ERROR - 2024-01-26 19:34:39 --> Could not find the language line "blogs"
ERROR - 2024-01-26 19:34:39 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 19:34:39 --> Could not find the language line "sellers"
ERROR - 2024-01-26 19:34:39 --> Could not find the language line "blogs"
ERROR - 2024-01-26 19:34:39 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 19:34:39 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 19:34:39 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 19:34:39 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 19:34:39 --> Could not find the language line "compare"
ERROR - 2024-01-26 20:12:19 --> Could not find the language line "sellers"
ERROR - 2024-01-26 20:12:19 --> Could not find the language line "blogs"
ERROR - 2024-01-26 20:12:19 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 20:12:19 --> Could not find the language line "sellers"
ERROR - 2024-01-26 20:12:19 --> Could not find the language line "blogs"
ERROR - 2024-01-26 20:12:19 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 20:12:19 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 20:12:19 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 20:12:19 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 20:12:19 --> Could not find the language line "compare"
ERROR - 2024-01-26 20:43:48 --> Could not find the language line "sellers"
ERROR - 2024-01-26 20:43:48 --> Could not find the language line "blogs"
ERROR - 2024-01-26 20:43:48 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 20:43:48 --> Could not find the language line "sellers"
ERROR - 2024-01-26 20:43:48 --> Could not find the language line "blogs"
ERROR - 2024-01-26 20:43:48 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 20:43:48 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 20:43:48 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 20:43:48 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 20:43:48 --> Could not find the language line "compare"
ERROR - 2024-01-26 21:52:38 --> Could not find the language line "sellers"
ERROR - 2024-01-26 21:52:38 --> Could not find the language line "blogs"
ERROR - 2024-01-26 21:52:38 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 21:52:38 --> Could not find the language line "sellers"
ERROR - 2024-01-26 21:52:38 --> Could not find the language line "blogs"
ERROR - 2024-01-26 21:52:38 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 21:52:38 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 21:52:38 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 21:52:38 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 21:52:38 --> Could not find the language line "compare"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "sellers"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "blogs"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "open_nav"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "sellers"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "blogs"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "product"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "check_availability"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "seller"
ERROR - 2024-01-26 22:39:25 --> Severity: Warning --> Undefined array key "user_id" /home/maguinev/public_html/application/views/front-end/classic/pages/product-page.php 558
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "description"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "return_policy"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-26 22:39:25 --> Could not find the language line "compare"
