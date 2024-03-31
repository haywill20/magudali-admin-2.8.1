<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-07 00:03:02 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:03:04 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:03:08 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:03:08 --> Could not find the language line "brands"
ERROR - 2024-01-07 00:03:08 --> Could not find the language line "attributes"
ERROR - 2024-01-07 00:03:08 --> Could not find the language line "brands"
ERROR - 2024-01-07 00:03:10 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:03:13 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:03:13 --> Could not find the language line "brands"
ERROR - 2024-01-07 00:03:13 --> Could not find the language line "attributes"
ERROR - 2024-01-07 00:03:13 --> Could not find the language line "brands"
ERROR - 2024-01-07 00:03:14 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:03:24 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:03:24 --> Could not find the language line "brands"
ERROR - 2024-01-07 00:03:24 --> Could not find the language line "attributes"
ERROR - 2024-01-07 00:03:24 --> Could not find the language line "brands"
ERROR - 2024-01-07 00:03:26 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:03:31 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:03:31 --> Could not find the language line "brands"
ERROR - 2024-01-07 00:03:31 --> Could not find the language line "attributes"
ERROR - 2024-01-07 00:03:31 --> Could not find the language line "brands"
ERROR - 2024-01-07 00:03:33 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:19:05 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:19:05 --> Could not find the language line "brands"
ERROR - 2024-01-07 00:19:05 --> Could not find the language line "attributes"
ERROR - 2024-01-07 00:19:05 --> Could not find the language line "brands"
ERROR - 2024-01-07 00:19:07 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:19:12 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:19:13 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:22:27 --> Could not find the language line "sellers"
ERROR - 2024-01-07 00:22:27 --> Could not find the language line "blogs"
ERROR - 2024-01-07 00:22:27 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:22:27 --> Could not find the language line "sellers"
ERROR - 2024-01-07 00:22:27 --> Could not find the language line "blogs"
ERROR - 2024-01-07 00:22:27 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 00:22:27 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 00:22:27 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 00:22:27 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 00:22:27 --> Could not find the language line "compare"
ERROR - 2024-01-07 00:25:12 --> Could not find the language line "sellers"
ERROR - 2024-01-07 00:25:12 --> Could not find the language line "blogs"
ERROR - 2024-01-07 00:25:12 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:25:12 --> Could not find the language line "sellers"
ERROR - 2024-01-07 00:25:12 --> Could not find the language line "blogs"
ERROR - 2024-01-07 00:25:12 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 00:25:12 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 00:25:12 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 00:25:12 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 00:25:12 --> Could not find the language line "compare"
ERROR - 2024-01-07 00:25:21 --> Could not find the language line "sellers"
ERROR - 2024-01-07 00:25:21 --> Could not find the language line "blogs"
ERROR - 2024-01-07 00:25:21 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:25:21 --> Could not find the language line "sellers"
ERROR - 2024-01-07 00:25:21 --> Could not find the language line "blogs"
ERROR - 2024-01-07 00:25:21 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 00:25:21 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 00:25:21 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 00:25:21 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 00:25:21 --> Could not find the language line "compare"
ERROR - 2024-01-07 00:48:38 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:48:42 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 00:49:01 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 00:49:01 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-07 00:49:01 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 01:00:49 --> Could not find the language line "sellers"
ERROR - 2024-01-07 01:00:49 --> Could not find the language line "blogs"
ERROR - 2024-01-07 01:00:49 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 01:00:49 --> Could not find the language line "sellers"
ERROR - 2024-01-07 01:00:49 --> Could not find the language line "blogs"
ERROR - 2024-01-07 01:00:49 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 01:00:49 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 01:00:49 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 01:00:49 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 01:00:49 --> Could not find the language line "compare"
ERROR - 2024-01-07 01:00:51 --> Could not find the language line "sellers"
ERROR - 2024-01-07 01:00:51 --> Could not find the language line "blogs"
ERROR - 2024-01-07 01:00:51 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 01:00:51 --> Could not find the language line "sellers"
ERROR - 2024-01-07 01:00:51 --> Could not find the language line "blogs"
ERROR - 2024-01-07 01:00:51 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 01:00:51 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 01:00:51 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 01:00:51 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 01:00:51 --> Could not find the language line "compare"
ERROR - 2024-01-07 01:01:17 --> Could not find the language line "sellers"
ERROR - 2024-01-07 01:01:17 --> Could not find the language line "blogs"
ERROR - 2024-01-07 01:01:17 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 01:01:17 --> Could not find the language line "sellers"
ERROR - 2024-01-07 01:01:17 --> Could not find the language line "blogs"
ERROR - 2024-01-07 01:01:17 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 01:01:17 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 01:01:17 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 01:01:17 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 01:01:17 --> Could not find the language line "compare"
ERROR - 2024-01-07 01:01:19 --> Could not find the language line "sellers"
ERROR - 2024-01-07 01:01:19 --> Could not find the language line "blogs"
ERROR - 2024-01-07 01:01:19 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 01:01:19 --> Could not find the language line "sellers"
ERROR - 2024-01-07 01:01:19 --> Could not find the language line "blogs"
ERROR - 2024-01-07 01:01:19 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 01:01:19 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 01:01:19 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 01:01:19 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 01:01:19 --> Could not find the language line "compare"
ERROR - 2024-01-07 01:01:47 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 01:01:47 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-07 01:01:47 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 01:01:55 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:01:55 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:01:55 --> Severity: Warning --> Undefined variable $fetched /home/maguinev/public_html/application/views/admin/pages/tables/manage_stock.php 55
ERROR - 2024-01-07 01:01:55 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:01:55 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:01:55 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:01:55 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:01:55 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:01:55 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:01:55 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:01:55 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:01:55 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:01:55 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:02:14 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:02:14 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:02:14 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:02:14 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:02:14 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:02:14 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:02:14 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:02:14 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:02:14 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:02:14 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:02:14 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:02:14 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:02:22 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:02:22 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:02:22 --> Severity: Warning --> Undefined variable $fetched /home/maguinev/public_html/application/views/admin/pages/tables/manage_stock.php 55
ERROR - 2024-01-07 01:02:22 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:02:22 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:02:22 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:02:22 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:02:22 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:02:22 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:02:22 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:02:22 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:02:22 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:02:22 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:04:35 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:04:35 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:04:35 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:04:35 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:04:35 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:04:35 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:04:35 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:04:35 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:04:35 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:04:35 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:04:35 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:04:35 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:04:45 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:04:45 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:04:45 --> Severity: Warning --> Undefined variable $fetched /home/maguinev/public_html/application/views/admin/pages/tables/manage_stock.php 55
ERROR - 2024-01-07 01:04:45 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:04:45 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:04:45 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:04:45 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:04:45 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:04:45 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:04:45 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:04:45 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:04:45 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:04:45 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:04:56 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:04:56 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:04:56 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:04:56 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:04:56 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:04:56 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:04:56 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:04:56 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:04:56 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:04:56 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:04:56 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:04:56 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:05:06 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:05:06 --> Could not find the language line "Text.current_stock"
ERROR - 2024-01-07 01:05:06 --> Severity: Warning --> Undefined variable $fetched /home/maguinev/public_html/application/views/admin/pages/tables/manage_stock.php 55
ERROR - 2024-01-07 01:05:06 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:05:06 --> Could not find the language line "Text.quantity"
ERROR - 2024-01-07 01:05:06 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:05:06 --> Could not find the language line "Text.type"
ERROR - 2024-01-07 01:05:06 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:05:06 --> Could not find the language line "Text.add"
ERROR - 2024-01-07 01:05:06 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:05:06 --> Could not find the language line "Text.subtract"
ERROR - 2024-01-07 01:05:06 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 01:05:06 --> Could not find the language line "Text.update_stock"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "sellers"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "blogs"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "sellers"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "blogs"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "product"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "check_availability"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "seller"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "tags"
ERROR - 2024-01-07 05:46:09 --> Severity: Warning --> Undefined array key "user_id" /home/maguinev/public_html/application/views/front-end/classic/pages/product-page.php 558
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "description"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 05:46:09 --> Could not find the language line "compare"
ERROR - 2024-01-07 06:24:16 --> Could not find the language line "sellers"
ERROR - 2024-01-07 06:24:16 --> Could not find the language line "blogs"
ERROR - 2024-01-07 06:24:16 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 06:24:16 --> Could not find the language line "sellers"
ERROR - 2024-01-07 06:24:16 --> Could not find the language line "blogs"
ERROR - 2024-01-07 06:24:16 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 06:24:16 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 06:24:16 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 06:24:16 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 06:24:16 --> Could not find the language line "compare"
ERROR - 2024-01-07 06:24:17 --> Could not find the language line "sellers"
ERROR - 2024-01-07 06:24:17 --> Could not find the language line "blogs"
ERROR - 2024-01-07 06:24:17 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 06:24:17 --> Could not find the language line "sellers"
ERROR - 2024-01-07 06:24:17 --> Could not find the language line "blogs"
ERROR - 2024-01-07 06:24:17 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 06:24:17 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 06:24:17 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 06:24:17 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 06:24:17 --> Could not find the language line "compare"
ERROR - 2024-01-07 06:24:19 --> Could not find the language line "sellers"
ERROR - 2024-01-07 06:24:19 --> Could not find the language line "blogs"
ERROR - 2024-01-07 06:24:19 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 06:24:19 --> Could not find the language line "sellers"
ERROR - 2024-01-07 06:24:19 --> Could not find the language line "blogs"
ERROR - 2024-01-07 06:24:19 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 06:24:19 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 06:24:19 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 06:24:19 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 06:24:19 --> Could not find the language line "compare"
ERROR - 2024-01-07 06:35:26 --> Could not find the language line "sellers"
ERROR - 2024-01-07 06:35:26 --> Could not find the language line "blogs"
ERROR - 2024-01-07 06:35:26 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 06:35:26 --> Could not find the language line "sellers"
ERROR - 2024-01-07 06:35:26 --> Could not find the language line "blogs"
ERROR - 2024-01-07 06:35:26 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 06:35:26 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 06:35:26 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 06:35:26 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 06:35:26 --> Could not find the language line "compare"
ERROR - 2024-01-07 08:12:17 --> Could not find the language line "sellers"
ERROR - 2024-01-07 08:12:17 --> Could not find the language line "blogs"
ERROR - 2024-01-07 08:12:17 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 08:12:17 --> Could not find the language line "sellers"
ERROR - 2024-01-07 08:12:17 --> Could not find the language line "blogs"
ERROR - 2024-01-07 08:12:17 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 08:12:17 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 08:12:17 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 08:12:17 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 08:12:17 --> Could not find the language line "compare"
ERROR - 2024-01-07 08:19:34 --> Could not find the language line "sellers"
ERROR - 2024-01-07 08:19:34 --> Could not find the language line "blogs"
ERROR - 2024-01-07 08:19:35 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 08:19:35 --> Could not find the language line "sellers"
ERROR - 2024-01-07 08:19:35 --> Could not find the language line "blogs"
ERROR - 2024-01-07 08:19:35 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 08:19:35 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 08:19:35 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 08:19:35 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 08:19:35 --> Could not find the language line "compare"
ERROR - 2024-01-07 09:25:04 --> Could not find the language line "sellers"
ERROR - 2024-01-07 09:25:04 --> Could not find the language line "blogs"
ERROR - 2024-01-07 09:25:04 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 09:25:04 --> Could not find the language line "sellers"
ERROR - 2024-01-07 09:25:04 --> Could not find the language line "blogs"
ERROR - 2024-01-07 09:25:04 --> Could not find the language line "email_us"
ERROR - 2024-01-07 09:25:04 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 09:25:04 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 09:25:04 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 09:25:04 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 09:25:04 --> Could not find the language line "compare"
ERROR - 2024-01-07 11:18:17 --> Could not find the language line "sellers"
ERROR - 2024-01-07 11:18:17 --> Could not find the language line "blogs"
ERROR - 2024-01-07 11:18:17 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 11:18:17 --> Could not find the language line "sellers"
ERROR - 2024-01-07 11:18:17 --> Could not find the language line "blogs"
ERROR - 2024-01-07 11:18:17 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 11:18:17 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 11:18:17 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 11:18:17 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 11:18:17 --> Could not find the language line "compare"
ERROR - 2024-01-07 11:56:51 --> Could not find the language line "sellers"
ERROR - 2024-01-07 11:56:51 --> Could not find the language line "blogs"
ERROR - 2024-01-07 11:56:51 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 11:56:51 --> Could not find the language line "sellers"
ERROR - 2024-01-07 11:56:51 --> Could not find the language line "blogs"
ERROR - 2024-01-07 11:56:51 --> Could not find the language line "email_us"
ERROR - 2024-01-07 11:56:51 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 11:56:51 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 11:56:51 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 11:56:51 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 11:56:51 --> Could not find the language line "compare"
ERROR - 2024-01-07 13:12:55 --> Could not find the language line "sellers"
ERROR - 2024-01-07 13:12:55 --> Could not find the language line "blogs"
ERROR - 2024-01-07 13:12:55 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 13:12:55 --> Could not find the language line "sellers"
ERROR - 2024-01-07 13:12:55 --> Could not find the language line "blogs"
ERROR - 2024-01-07 13:12:55 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 13:12:55 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 13:12:55 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 13:12:55 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 13:12:55 --> Could not find the language line "compare"
ERROR - 2024-01-07 13:12:58 --> Could not find the language line "sellers"
ERROR - 2024-01-07 13:12:58 --> Could not find the language line "blogs"
ERROR - 2024-01-07 13:12:58 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 13:12:58 --> Could not find the language line "sellers"
ERROR - 2024-01-07 13:12:58 --> Could not find the language line "blogs"
ERROR - 2024-01-07 13:12:58 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 13:12:58 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 13:12:58 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 13:12:58 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 13:12:58 --> Could not find the language line "compare"
ERROR - 2024-01-07 13:13:32 --> Could not find the language line "sellers"
ERROR - 2024-01-07 13:13:32 --> Could not find the language line "blogs"
ERROR - 2024-01-07 13:13:32 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 13:13:32 --> Could not find the language line "sellers"
ERROR - 2024-01-07 13:13:32 --> Could not find the language line "blogs"
ERROR - 2024-01-07 13:13:32 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 13:13:32 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 13:13:32 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 13:13:32 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 13:13:32 --> Could not find the language line "compare"
ERROR - 2024-01-07 14:54:59 --> Could not find the language line "sellers"
ERROR - 2024-01-07 14:54:59 --> Could not find the language line "blogs"
ERROR - 2024-01-07 14:54:59 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 14:54:59 --> Could not find the language line "sellers"
ERROR - 2024-01-07 14:54:59 --> Could not find the language line "blogs"
ERROR - 2024-01-07 14:54:59 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 14:54:59 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 14:54:59 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 14:54:59 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 14:54:59 --> Could not find the language line "compare"
ERROR - 2024-01-07 14:55:03 --> Could not find the language line "sellers"
ERROR - 2024-01-07 14:55:03 --> Could not find the language line "blogs"
ERROR - 2024-01-07 14:55:03 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 14:55:03 --> Could not find the language line "sellers"
ERROR - 2024-01-07 14:55:03 --> Could not find the language line "blogs"
ERROR - 2024-01-07 14:55:03 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 14:55:03 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 14:55:03 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 14:55:03 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 14:55:03 --> Could not find the language line "compare"
ERROR - 2024-01-07 16:30:06 --> Could not find the language line "sellers"
ERROR - 2024-01-07 16:30:06 --> Could not find the language line "blogs"
ERROR - 2024-01-07 16:30:06 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 16:30:06 --> Could not find the language line "sellers"
ERROR - 2024-01-07 16:30:06 --> Could not find the language line "blogs"
ERROR - 2024-01-07 16:30:06 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 16:30:06 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 16:30:06 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 16:30:06 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 16:30:06 --> Could not find the language line "compare"
ERROR - 2024-01-07 16:30:41 --> Could not find the language line "sellers"
ERROR - 2024-01-07 16:30:41 --> Could not find the language line "blogs"
ERROR - 2024-01-07 16:30:41 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 16:30:41 --> Could not find the language line "sellers"
ERROR - 2024-01-07 16:30:41 --> Could not find the language line "blogs"
ERROR - 2024-01-07 16:30:41 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 16:30:41 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 16:30:41 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 16:30:41 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 16:30:41 --> Could not find the language line "compare"
ERROR - 2024-01-07 17:16:03 --> Could not find the language line "sellers"
ERROR - 2024-01-07 17:16:03 --> Could not find the language line "blogs"
ERROR - 2024-01-07 17:16:03 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 17:16:03 --> Could not find the language line "sellers"
ERROR - 2024-01-07 17:16:03 --> Could not find the language line "blogs"
ERROR - 2024-01-07 17:16:03 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 17:16:03 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 17:16:03 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 17:16:03 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 17:16:03 --> Could not find the language line "compare"
ERROR - 2024-01-07 18:10:26 --> Could not find the language line "sellers"
ERROR - 2024-01-07 18:10:26 --> Could not find the language line "blogs"
ERROR - 2024-01-07 18:10:26 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 18:10:26 --> Could not find the language line "sellers"
ERROR - 2024-01-07 18:10:26 --> Could not find the language line "blogs"
ERROR - 2024-01-07 18:10:26 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 18:10:26 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 18:10:26 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 18:10:26 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 18:10:26 --> Could not find the language line "compare"
ERROR - 2024-01-07 19:23:14 --> Could not find the language line "sellers"
ERROR - 2024-01-07 19:23:14 --> Could not find the language line "blogs"
ERROR - 2024-01-07 19:23:14 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 19:23:14 --> Could not find the language line "sellers"
ERROR - 2024-01-07 19:23:14 --> Could not find the language line "blogs"
ERROR - 2024-01-07 19:23:14 --> Could not find the language line "email_us"
ERROR - 2024-01-07 19:23:14 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 19:23:14 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 19:23:14 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 19:23:14 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 19:23:14 --> Could not find the language line "compare"
ERROR - 2024-01-07 19:27:12 --> Could not find the language line "sellers"
ERROR - 2024-01-07 19:27:12 --> Could not find the language line "blogs"
ERROR - 2024-01-07 19:27:12 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 19:27:12 --> Could not find the language line "sellers"
ERROR - 2024-01-07 19:27:12 --> Could not find the language line "blogs"
ERROR - 2024-01-07 19:27:12 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 19:27:12 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 19:27:12 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 19:27:12 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 19:27:12 --> Could not find the language line "compare"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "sellers"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "blogs"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "sellers"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "blogs"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "compare"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "sellers"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "blogs"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "sellers"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "blogs"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 19:27:13 --> Could not find the language line "compare"
ERROR - 2024-01-07 20:01:47 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-07 20:01:47 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 20:01:47 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 20:02:01 --> Could not find the language line "sellers"
ERROR - 2024-01-07 20:02:01 --> Could not find the language line "balance"
ERROR - 2024-01-07 20:02:01 --> Could not find the language line "blogs"
ERROR - 2024-01-07 20:02:01 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 20:02:01 --> Could not find the language line "sellers"
ERROR - 2024-01-07 20:02:01 --> Could not find the language line "blogs"
ERROR - 2024-01-07 20:02:01 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 20:02:01 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 20:02:01 --> Could not find the language line "compare"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "sellers"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "balance"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "blogs"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "sellers"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "blogs"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "compare"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "support_chat"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "label_close"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "label_preview"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "label_search"
ERROR - 2024-01-07 20:02:03 --> Could not find the language line "label_search_result"
ERROR - 2024-01-07 20:15:27 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 20:15:32 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 21:06:44 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 21:06:44 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 21:06:44 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-07 22:21:47 --> Could not find the language line "sellers"
ERROR - 2024-01-07 22:21:47 --> Could not find the language line "blogs"
ERROR - 2024-01-07 22:21:47 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 22:21:47 --> Could not find the language line "sellers"
ERROR - 2024-01-07 22:21:47 --> Could not find the language line "blogs"
ERROR - 2024-01-07 22:21:47 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 22:21:47 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-07 22:21:47 --> Could not find the language line "return_policy"
ERROR - 2024-01-07 22:21:47 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 22:21:47 --> Could not find the language line "compare"
ERROR - 2024-01-07 22:51:05 --> Could not find the language line "sellers"
ERROR - 2024-01-07 22:51:05 --> Could not find the language line "balance"
ERROR - 2024-01-07 22:51:05 --> Could not find the language line "blogs"
ERROR - 2024-01-07 22:51:05 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 22:51:05 --> Could not find the language line "sellers"
ERROR - 2024-01-07 22:51:05 --> Could not find the language line "blogs"
ERROR - 2024-01-07 22:51:05 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 22:51:05 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 22:51:05 --> Could not find the language line "compare"
ERROR - 2024-01-07 22:51:09 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 22:51:09 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-07 22:51:09 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 23:00:13 --> Could not find the language line "support_chat"
ERROR - 2024-01-07 23:00:13 --> Could not find the language line "label_close"
ERROR - 2024-01-07 23:00:13 --> Could not find the language line "label_search"
ERROR - 2024-01-07 23:00:13 --> Could not find the language line "label_search_result"
ERROR - 2024-01-07 23:00:17 --> Severity: Warning --> Undefined array key 0 /home/maguinev/public_html/application/controllers/admin/Chat.php 138
ERROR - 2024-01-07 23:00:17 --> Severity: Warning --> Trying to access array offset on value of type null /home/maguinev/public_html/application/controllers/admin/Chat.php 138
ERROR - 2024-01-07 23:00:42 --> Could not find the language line "sellers"
ERROR - 2024-01-07 23:00:42 --> Could not find the language line "balance"
ERROR - 2024-01-07 23:00:42 --> Could not find the language line "blogs"
ERROR - 2024-01-07 23:00:42 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 23:00:42 --> Could not find the language line "sellers"
ERROR - 2024-01-07 23:00:42 --> Could not find the language line "blogs"
ERROR - 2024-01-07 23:00:42 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 23:00:42 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 23:00:42 --> Could not find the language line "compare"
ERROR - 2024-01-07 23:09:30 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-07 23:09:30 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 23:09:30 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 23:20:30 --> Could not find the language line "sellers"
ERROR - 2024-01-07 23:20:30 --> Could not find the language line "balance"
ERROR - 2024-01-07 23:20:30 --> Could not find the language line "blogs"
ERROR - 2024-01-07 23:20:30 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 23:20:30 --> Could not find the language line "sellers"
ERROR - 2024-01-07 23:20:30 --> Could not find the language line "blogs"
ERROR - 2024-01-07 23:20:30 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 23:20:30 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 23:20:30 --> Could not find the language line "compare"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "sellers"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "balance"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "blogs"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "open_nav"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "sellers"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "blogs"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "compare"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "support_chat"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "label_close"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "label_preview"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "label_search"
ERROR - 2024-01-07 23:20:32 --> Could not find the language line "label_search_result"
ERROR - 2024-01-07 23:20:36 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-07 23:20:36 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-07 23:20:36 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
