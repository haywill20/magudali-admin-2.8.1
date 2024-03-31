<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-02-16 01:36:42 --> Could not find the language line "sellers"
ERROR - 2024-02-16 01:36:42 --> Could not find the language line "blogs"
ERROR - 2024-02-16 01:36:42 --> Could not find the language line "open_nav"
ERROR - 2024-02-16 01:36:42 --> Could not find the language line "sellers"
ERROR - 2024-02-16 01:36:42 --> Could not find the language line "blogs"
ERROR - 2024-02-16 01:36:42 --> Could not find the language line "become_a_seller"
ERROR - 2024-02-16 01:36:42 --> Could not find the language line "shipping_policy"
ERROR - 2024-02-16 01:36:42 --> Could not find the language line "return_policy"
ERROR - 2024-02-16 01:36:42 --> Could not find the language line "enter_valid_number"
ERROR - 2024-02-16 01:36:42 --> Could not find the language line "compare"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "sellers"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "blogs"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "open_nav"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "sellers"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "blogs"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "product"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "check_availability"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "seller"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "tags"
ERROR - 2024-02-16 08:13:00 --> Severity: Warning --> Undefined array key "user_id" /home/maguinev/public_html/application/views/front-end/classic/pages/product-page.php 558
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "description"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "become_a_seller"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "shipping_policy"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "return_policy"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "enter_valid_number"
ERROR - 2024-02-16 08:13:00 --> Could not find the language line "compare"
ERROR - 2024-02-16 08:14:39 --> Could not find the language line "sellers"
ERROR - 2024-02-16 08:14:39 --> Could not find the language line "blogs"
ERROR - 2024-02-16 08:14:39 --> Could not find the language line "open_nav"
ERROR - 2024-02-16 08:14:39 --> Could not find the language line "sellers"
ERROR - 2024-02-16 08:14:39 --> Could not find the language line "blogs"
ERROR - 2024-02-16 08:14:39 --> Could not find the language line "become_a_seller"
ERROR - 2024-02-16 08:14:39 --> Could not find the language line "shipping_policy"
ERROR - 2024-02-16 08:14:39 --> Could not find the language line "return_policy"
ERROR - 2024-02-16 08:14:39 --> Could not find the language line "enter_valid_number"
ERROR - 2024-02-16 08:14:39 --> Could not find the language line "compare"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "sellers"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "blogs"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "open_nav"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "sellers"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "blogs"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "brands"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "categories"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "attributes"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "brands"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "categories"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "become_a_seller"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "shipping_policy"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "return_policy"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "enter_valid_number"
ERROR - 2024-02-16 11:00:03 --> Could not find the language line "compare"
ERROR - 2024-02-16 11:01:15 --> Could not find the language line "sellers"
ERROR - 2024-02-16 11:01:15 --> Could not find the language line "blogs"
ERROR - 2024-02-16 11:01:15 --> Could not find the language line "open_nav"
ERROR - 2024-02-16 11:01:15 --> Could not find the language line "sellers"
ERROR - 2024-02-16 11:01:15 --> Could not find the language line "blogs"
ERROR - 2024-02-16 11:01:15 --> Could not find the language line "become_a_seller"
ERROR - 2024-02-16 11:01:15 --> Could not find the language line "shipping_policy"
ERROR - 2024-02-16 11:01:15 --> Could not find the language line "return_policy"
ERROR - 2024-02-16 11:01:15 --> Could not find the language line "enter_valid_number"
ERROR - 2024-02-16 11:01:15 --> Could not find the language line "compare"
ERROR - 2024-02-16 11:01:25 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-02-16 11:01:25 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-02-16 11:01:25 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "sellers"
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "blogs"
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "open_nav"
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "sellers"
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "blogs"
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "product"
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "check_availability"
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "seller"
ERROR - 2024-02-16 16:57:43 --> Severity: Warning --> Undefined array key "user_id" /home/maguinev/public_html/application/views/front-end/classic/pages/product-page.php 558
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "description"
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "become_a_seller"
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "shipping_policy"
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "return_policy"
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "enter_valid_number"
ERROR - 2024-02-16 16:57:43 --> Could not find the language line "compare"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "sellers"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "blogs"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "open_nav"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "sellers"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "blogs"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "brands"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "categories"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "attributes"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "brands"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "categories"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "become_a_seller"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "shipping_policy"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "return_policy"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "enter_valid_number"
ERROR - 2024-02-16 19:36:41 --> Could not find the language line "compare"
ERROR - 2024-02-16 20:26:42 --> Could not find the language line "sellers"
ERROR - 2024-02-16 20:26:42 --> Could not find the language line "blogs"
ERROR - 2024-02-16 20:26:42 --> Could not find the language line "open_nav"
ERROR - 2024-02-16 20:26:42 --> Could not find the language line "sellers"
ERROR - 2024-02-16 20:26:42 --> Could not find the language line "blogs"
ERROR - 2024-02-16 20:26:42 --> Could not find the language line "become_a_seller"
ERROR - 2024-02-16 20:26:42 --> Could not find the language line "shipping_policy"
ERROR - 2024-02-16 20:26:42 --> Could not find the language line "return_policy"
ERROR - 2024-02-16 20:26:42 --> Could not find the language line "enter_valid_number"
ERROR - 2024-02-16 20:26:42 --> Could not find the language line "compare"
ERROR - 2024-02-16 21:00:15 --> Could not find the language line "sellers"
ERROR - 2024-02-16 21:00:15 --> Could not find the language line "blogs"
ERROR - 2024-02-16 21:00:15 --> Could not find the language line "open_nav"
ERROR - 2024-02-16 21:00:15 --> Could not find the language line "sellers"
ERROR - 2024-02-16 21:00:15 --> Could not find the language line "blogs"
ERROR - 2024-02-16 21:00:15 --> Could not find the language line "become_a_seller"
ERROR - 2024-02-16 21:00:15 --> Could not find the language line "shipping_policy"
ERROR - 2024-02-16 21:00:15 --> Could not find the language line "return_policy"
ERROR - 2024-02-16 21:00:15 --> Could not find the language line "enter_valid_number"
ERROR - 2024-02-16 21:00:15 --> Could not find the language line "compare"
ERROR - 2024-02-16 21:00:27 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-02-16 21:00:27 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-02-16 21:00:27 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-02-16 23:12:50 --> Could not find the language line "sellers"
ERROR - 2024-02-16 23:12:50 --> Could not find the language line "blogs"
ERROR - 2024-02-16 23:12:50 --> Could not find the language line "open_nav"
ERROR - 2024-02-16 23:12:50 --> Could not find the language line "sellers"
ERROR - 2024-02-16 23:12:50 --> Could not find the language line "blogs"
ERROR - 2024-02-16 23:12:50 --> Could not find the language line "become_a_seller"
ERROR - 2024-02-16 23:12:50 --> Could not find the language line "shipping_policy"
ERROR - 2024-02-16 23:12:50 --> Could not find the language line "return_policy"
ERROR - 2024-02-16 23:12:50 --> Could not find the language line "enter_valid_number"
ERROR - 2024-02-16 23:12:50 --> Could not find the language line "compare"
