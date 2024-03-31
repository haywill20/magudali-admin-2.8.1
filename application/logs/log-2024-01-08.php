<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-08 01:27:48 --> Could not find the language line "sellers"
ERROR - 2024-01-08 01:27:48 --> Could not find the language line "blogs"
ERROR - 2024-01-08 01:27:48 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 01:27:48 --> Could not find the language line "sellers"
ERROR - 2024-01-08 01:27:48 --> Could not find the language line "blogs"
ERROR - 2024-01-08 01:27:48 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 01:27:48 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 01:27:48 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 01:27:48 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 01:27:48 --> Could not find the language line "compare"
ERROR - 2024-01-08 07:09:40 --> Could not find the language line "sellers"
ERROR - 2024-01-08 07:09:40 --> Could not find the language line "blogs"
ERROR - 2024-01-08 07:09:40 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 07:09:40 --> Could not find the language line "sellers"
ERROR - 2024-01-08 07:09:40 --> Could not find the language line "blogs"
ERROR - 2024-01-08 07:09:40 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 07:09:40 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 07:09:40 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 07:09:40 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 07:09:40 --> Could not find the language line "compare"
ERROR - 2024-01-08 07:16:11 --> Could not find the language line "sellers"
ERROR - 2024-01-08 07:16:11 --> Could not find the language line "blogs"
ERROR - 2024-01-08 07:16:11 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 07:16:11 --> Could not find the language line "sellers"
ERROR - 2024-01-08 07:16:11 --> Could not find the language line "blogs"
ERROR - 2024-01-08 07:16:11 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 07:16:11 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 07:16:11 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 07:16:11 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 07:16:11 --> Could not find the language line "compare"
ERROR - 2024-01-08 07:37:09 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 07:37:15 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "sellers"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "blogs"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "sellers"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "blogs"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "brands"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "categories"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "attributes"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "brands"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "categories"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 09:45:37 --> Could not find the language line "compare"
ERROR - 2024-01-08 11:16:07 --> Could not find the language line "sellers"
ERROR - 2024-01-08 11:16:07 --> Could not find the language line "blogs"
ERROR - 2024-01-08 11:16:07 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 11:16:07 --> Could not find the language line "sellers"
ERROR - 2024-01-08 11:16:07 --> Could not find the language line "blogs"
ERROR - 2024-01-08 11:16:07 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 11:16:07 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 11:16:07 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 11:16:07 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 11:16:07 --> Could not find the language line "compare"
ERROR - 2024-01-08 11:34:19 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 11:34:44 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 13:16:40 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-08 13:16:40 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 13:16:40 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 15:25:07 --> Could not find the language line "sellers"
ERROR - 2024-01-08 15:25:07 --> Could not find the language line "blogs"
ERROR - 2024-01-08 15:25:07 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 15:25:07 --> Could not find the language line "sellers"
ERROR - 2024-01-08 15:25:07 --> Could not find the language line "blogs"
ERROR - 2024-01-08 15:25:07 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 15:25:07 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 15:25:07 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 15:25:07 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 15:25:07 --> Could not find the language line "compare"
ERROR - 2024-01-08 15:52:40 --> Could not find the language line "sellers"
ERROR - 2024-01-08 15:52:40 --> Could not find the language line "balance"
ERROR - 2024-01-08 15:52:40 --> Could not find the language line "blogs"
ERROR - 2024-01-08 15:52:40 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 15:52:40 --> Could not find the language line "sellers"
ERROR - 2024-01-08 15:52:40 --> Could not find the language line "blogs"
ERROR - 2024-01-08 15:52:40 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 15:52:40 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 15:52:40 --> Could not find the language line "compare"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "sellers"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "balance"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "blogs"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "sellers"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "blogs"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "compare"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "label_close"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "label_search"
ERROR - 2024-01-08 15:52:42 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:15:55 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:15:55 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:15:55 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:15:55 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:15:55 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:15:55 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:15:55 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:15:55 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:15:55 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:15:58 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:15:58 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:15:58 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:15:58 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:15:58 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:16:08 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:16:08 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:16:08 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:16:08 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:16:08 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:16:08 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:16:08 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:16:08 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:16:08 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:16:10 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:16:10 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:16:10 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:16:10 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:16:10 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:18:37 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:18:39 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:19:07 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:19:14 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:19:16 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:19:16 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:19:16 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:19:16 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:19:16 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:19:16 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:19:16 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 16:19:16 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 16:19:16 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:19:16 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:25:18 --> Could not find the language line "login_heading"
ERROR - 2024-01-08 16:25:18 --> Could not find the language line "login_password_label"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:25:19 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:25:21 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:25:27 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 16:25:27 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 16:25:27 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-08 16:25:44 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:25:44 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:25:44 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:25:44 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:25:44 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:25:44 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:25:44 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:25:44 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:25:44 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:26:54 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:26:54 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:26:54 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:26:54 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:26:54 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:26:54 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:26:54 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:26:54 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:26:54 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:26:56 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:26:56 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:26:56 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:26:56 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:26:56 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:31:19 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:31:19 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:31:19 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:31:19 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:31:19 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:31:19 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:31:19 --> Could not find the language line "brands"
ERROR - 2024-01-08 16:31:19 --> Could not find the language line "attributes"
ERROR - 2024-01-08 16:31:19 --> Could not find the language line "brands"
ERROR - 2024-01-08 16:31:19 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:31:19 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:31:19 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:31:21 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:31:21 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:31:21 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:31:21 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:31:21 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:32:28 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:32:28 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:32:28 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:32:28 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:32:28 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:32:28 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:32:28 --> Could not find the language line "brands"
ERROR - 2024-01-08 16:32:28 --> Could not find the language line "attributes"
ERROR - 2024-01-08 16:32:28 --> Could not find the language line "brands"
ERROR - 2024-01-08 16:32:28 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:32:28 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:32:28 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:32:29 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:32:29 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:32:29 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:32:29 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:32:29 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:32:36 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:32:36 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:32:36 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:32:36 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:32:36 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:32:36 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:32:36 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:32:36 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:32:36 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:32:37 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:32:37 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:32:37 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:32:37 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:32:37 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "brands"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "categories"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "attributes"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "brands"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "categories"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:32:44 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:32:46 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:32:46 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:32:46 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:32:46 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:32:46 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "brands"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "categories"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "attributes"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "brands"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "categories"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:54:19 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:54:20 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:54:20 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:54:20 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:54:20 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:54:20 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:54:25 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:54:25 --> Could not find the language line "balance"
ERROR - 2024-01-08 16:54:25 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:54:25 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:54:25 --> Could not find the language line "sellers"
ERROR - 2024-01-08 16:54:25 --> Could not find the language line "blogs"
ERROR - 2024-01-08 16:54:25 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 16:54:25 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 16:54:25 --> Could not find the language line "compare"
ERROR - 2024-01-08 16:54:26 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:54:26 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:54:26 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:54:26 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:54:26 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:54:37 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:54:39 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:54:39 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:54:39 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:54:39 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:54:39 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:57:20 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:57:22 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:57:22 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:57:22 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:57:22 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:57:22 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:58:15 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:58:16 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:58:16 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:58:16 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:58:16 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:58:16 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:58:35 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:58:36 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:58:36 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:58:36 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:58:36 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:58:36 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:59:13 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:59:13 --> Could not find the language line "check_availability"
ERROR - 2024-01-08 16:59:13 --> Could not find the language line "seller"
ERROR - 2024-01-08 16:59:13 --> Could not find the language line "seller"
ERROR - 2024-01-08 16:59:13 --> Could not find the language line "tags"
ERROR - 2024-01-08 16:59:13 --> Could not find the language line "description"
ERROR - 2024-01-08 16:59:14 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:59:14 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:59:14 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:59:14 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:59:14 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 16:59:34 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 16:59:35 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 16:59:35 --> Could not find the language line "label_close"
ERROR - 2024-01-08 16:59:35 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 16:59:35 --> Could not find the language line "label_search"
ERROR - 2024-01-08 16:59:35 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:04:29 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:04:29 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:04:29 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-08 17:04:50 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:04:50 --> Could not find the language line "brands"
ERROR - 2024-01-08 17:04:50 --> Could not find the language line "attributes"
ERROR - 2024-01-08 17:04:50 --> Could not find the language line "brands"
ERROR - 2024-01-08 17:04:52 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:04:52 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:04:52 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:04:52 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:04:52 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:04:58 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:04:58 --> Could not find the language line "brands"
ERROR - 2024-01-08 17:04:58 --> Could not find the language line "attributes"
ERROR - 2024-01-08 17:04:58 --> Could not find the language line "brands"
ERROR - 2024-01-08 17:05:00 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:05:00 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:05:00 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:05:00 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:05:00 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:05:03 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:05:03 --> Could not find the language line "brands"
ERROR - 2024-01-08 17:05:03 --> Could not find the language line "categories"
ERROR - 2024-01-08 17:05:03 --> Could not find the language line "attributes"
ERROR - 2024-01-08 17:05:03 --> Could not find the language line "brands"
ERROR - 2024-01-08 17:05:03 --> Could not find the language line "categories"
ERROR - 2024-01-08 17:05:04 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:05:04 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:05:04 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:05:04 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:05:04 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:05:11 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:05:12 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:05:12 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:05:12 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:05:12 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:05:12 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:05:43 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:05:43 --> Could not find the language line "check_availability"
ERROR - 2024-01-08 17:05:43 --> Could not find the language line "seller"
ERROR - 2024-01-08 17:05:43 --> Could not find the language line "seller"
ERROR - 2024-01-08 17:05:43 --> Could not find the language line "tags"
ERROR - 2024-01-08 17:05:43 --> Could not find the language line "description"
ERROR - 2024-01-08 17:05:44 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:05:44 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:05:44 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:05:44 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:05:44 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:06:04 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:06:04 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:06:04 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:06:04 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:06:04 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:06:06 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:06:09 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:06:09 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:06:09 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:06:09 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:06:09 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:06:09 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:06:09 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:06:09 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:06:09 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:06:09 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:06:12 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:06:17 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:06:18 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:06:18 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:06:18 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:06:18 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:06:18 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:06:28 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:06:28 --> Could not find the language line "brands"
ERROR - 2024-01-08 17:06:28 --> Could not find the language line "attributes"
ERROR - 2024-01-08 17:06:28 --> Could not find the language line "brands"
ERROR - 2024-01-08 17:06:29 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:06:29 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:06:29 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:06:29 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:06:29 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:06:33 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:06:33 --> Could not find the language line "check_availability"
ERROR - 2024-01-08 17:06:33 --> Could not find the language line "seller"
ERROR - 2024-01-08 17:06:33 --> Could not find the language line "seller"
ERROR - 2024-01-08 17:06:33 --> Could not find the language line "tags"
ERROR - 2024-01-08 17:06:33 --> Could not find the language line "description"
ERROR - 2024-01-08 17:06:35 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:06:35 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:06:35 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:06:35 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:06:35 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:06:54 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:06:54 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:06:54 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:06:54 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:06:54 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:06:56 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:07:11 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:11:40 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:11:53 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:11:53 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-08 17:11:53 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:12:37 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:12:37 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:12:37 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:12:45 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:13:24 --> Could not find the language line "sellers"
ERROR - 2024-01-08 17:13:24 --> Could not find the language line "blogs"
ERROR - 2024-01-08 17:13:24 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:13:24 --> Could not find the language line "sellers"
ERROR - 2024-01-08 17:13:24 --> Could not find the language line "blogs"
ERROR - 2024-01-08 17:13:24 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 17:13:24 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 17:13:24 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 17:13:24 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 17:13:24 --> Could not find the language line "compare"
ERROR - 2024-01-08 17:20:38 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:20:38 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:20:38 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:20:43 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:22:19 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:22:19 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:22:19 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-08 17:22:29 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:23:28 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:23:29 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:23:29 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:23:29 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:23:29 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:23:29 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:23:48 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:23:59 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-08 17:23:59 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:23:59 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:24:06 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:24:30 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:24:30 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-08 17:24:30 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:24:38 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:24:41 --> Severity: Warning --> unlink(/home/maguinev/public_html/): Is a directory /home/maguinev/public_html/application/controllers/admin/Sellers.php 147
ERROR - 2024-01-08 17:24:41 --> Severity: Warning --> unlink(/home/maguinev/public_html/): Is a directory /home/maguinev/public_html/application/controllers/admin/Sellers.php 148
ERROR - 2024-01-08 17:24:41 --> Severity: Warning --> unlink(/home/maguinev/public_html/): Is a directory /home/maguinev/public_html/application/controllers/admin/Sellers.php 149
ERROR - 2024-01-08 17:24:55 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:25:04 --> Severity: Warning --> unlink(/home/maguinev/public_html/): Is a directory /home/maguinev/public_html/application/controllers/admin/Sellers.php 146
ERROR - 2024-01-08 17:25:04 --> Severity: Warning --> unlink(/home/maguinev/public_html/uploads/seller/Wardiere_Inc__(1).png): No such file or directory /home/maguinev/public_html/application/controllers/admin/Sellers.php 147
ERROR - 2024-01-08 17:25:04 --> Severity: Warning --> unlink(/home/maguinev/public_html/uploads/seller/Wardiere_Inc__(1)1.png): No such file or directory /home/maguinev/public_html/application/controllers/admin/Sellers.php 148
ERROR - 2024-01-08 17:25:04 --> Severity: Warning --> unlink(/home/maguinev/public_html/): Is a directory /home/maguinev/public_html/application/controllers/admin/Sellers.php 149
ERROR - 2024-01-08 17:25:46 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:28:26 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:28:36 --> Could not find the language line "sellers"
ERROR - 2024-01-08 17:28:36 --> Could not find the language line "blogs"
ERROR - 2024-01-08 17:28:36 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:28:36 --> Could not find the language line "sellers"
ERROR - 2024-01-08 17:28:36 --> Could not find the language line "blogs"
ERROR - 2024-01-08 17:28:36 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 17:28:36 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 17:28:36 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 17:28:36 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 17:28:36 --> Could not find the language line "compare"
ERROR - 2024-01-08 17:29:24 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:34:57 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:34:57 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-08 17:34:57 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:35:03 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:35:05 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:35:05 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:35:05 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:35:05 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:35:05 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:43:32 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:43:33 --> Could not find the language line "support_chat"
ERROR - 2024-01-08 17:43:33 --> Could not find the language line "label_close"
ERROR - 2024-01-08 17:43:33 --> Could not find the language line "label_preview"
ERROR - 2024-01-08 17:43:33 --> Could not find the language line "label_search"
ERROR - 2024-01-08 17:43:33 --> Could not find the language line "label_search_result"
ERROR - 2024-01-08 17:43:39 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:43:39 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-08 17:43:39 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 17:45:29 --> Could not find the language line "sellers"
ERROR - 2024-01-08 17:45:29 --> Could not find the language line "blogs"
ERROR - 2024-01-08 17:45:29 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:45:29 --> Could not find the language line "sellers"
ERROR - 2024-01-08 17:45:29 --> Could not find the language line "blogs"
ERROR - 2024-01-08 17:45:29 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 17:45:29 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 17:45:29 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 17:45:29 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 17:45:29 --> Could not find the language line "compare"
ERROR - 2024-01-08 17:56:26 --> Could not find the language line "sellers"
ERROR - 2024-01-08 17:56:26 --> Could not find the language line "blogs"
ERROR - 2024-01-08 17:56:26 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 17:56:26 --> Could not find the language line "sellers"
ERROR - 2024-01-08 17:56:26 --> Could not find the language line "blogs"
ERROR - 2024-01-08 17:56:26 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 17:56:26 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 17:56:26 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 17:56:26 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 17:56:26 --> Could not find the language line "compare"
ERROR - 2024-01-08 18:16:25 --> Could not find the language line "sellers"
ERROR - 2024-01-08 18:16:25 --> Could not find the language line "blogs"
ERROR - 2024-01-08 18:16:25 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 18:16:25 --> Could not find the language line "sellers"
ERROR - 2024-01-08 18:16:25 --> Could not find the language line "blogs"
ERROR - 2024-01-08 18:16:25 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 18:16:25 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 18:16:25 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 18:16:25 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 18:16:25 --> Could not find the language line "compare"
ERROR - 2024-01-08 18:26:30 --> Could not find the language line "sellers"
ERROR - 2024-01-08 18:26:30 --> Could not find the language line "blogs"
ERROR - 2024-01-08 18:26:30 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 18:26:30 --> Could not find the language line "sellers"
ERROR - 2024-01-08 18:26:30 --> Could not find the language line "blogs"
ERROR - 2024-01-08 18:26:30 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 18:26:30 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 18:26:30 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 18:26:30 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 18:26:30 --> Could not find the language line "compare"
ERROR - 2024-01-08 19:09:08 --> Could not find the language line "sellers"
ERROR - 2024-01-08 19:09:08 --> Could not find the language line "blogs"
ERROR - 2024-01-08 19:09:08 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 19:09:08 --> Could not find the language line "sellers"
ERROR - 2024-01-08 19:09:08 --> Could not find the language line "blogs"
ERROR - 2024-01-08 19:09:08 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 19:09:08 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 19:09:08 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 19:09:08 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 19:09:08 --> Could not find the language line "compare"
ERROR - 2024-01-08 19:51:26 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 19:51:29 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT COUNT(u.id) as `total`
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = 1
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ERROR - 2024-01-08 19:51:29 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '0'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 19:51:29 --> Query error: Column 'status' in where clause is ambiguous - Invalid query: SELECT `u`.*, `sd`.*
FROM `users` `u`
JOIN `users_groups` `ug` ON `ug`.`user_id` = `u`.`id`
JOIN `seller_data` `sd` ON `sd`.`user_id` = `u`.`id`
WHERE `status` = '2'
AND `u`.`active` = 1
AND `ug`.`group_id` = '4'
ORDER BY `sd`.`id` DESC
 LIMIT 10
ERROR - 2024-01-08 20:13:49 --> Could not find the language line "sellers"
ERROR - 2024-01-08 20:13:49 --> Could not find the language line "blogs"
ERROR - 2024-01-08 20:13:49 --> Could not find the language line "open_nav"
ERROR - 2024-01-08 20:13:49 --> Could not find the language line "sellers"
ERROR - 2024-01-08 20:13:49 --> Could not find the language line "blogs"
ERROR - 2024-01-08 20:13:49 --> Could not find the language line "become_a_seller"
ERROR - 2024-01-08 20:13:49 --> Could not find the language line "shipping_policy"
ERROR - 2024-01-08 20:13:49 --> Could not find the language line "return_policy"
ERROR - 2024-01-08 20:13:49 --> Could not find the language line "enter_valid_number"
ERROR - 2024-01-08 20:13:49 --> Could not find the language line "compare"
