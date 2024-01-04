TYPE=VIEW
query=select `p`.`id` AS `id`,`p`.`category_id` AS `category_id`,`p`.`name` AS `name`,`p`.`image` AS `image`,`p`.`description` AS `description`,`p`.`created_at` AS `created_at`,`p`.`updated_at` AS `updated_at`,`c`.`name` AS `category_name` from (`end`.`products` `p` left join `end`.`categories` `c` on(`p`.`category_id` = `c`.`id`))
md5=ec1704f1d42553b99a44556e6898ce03
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=0001703692373622831
create-version=2
source=SELECT p.* ,c.name as category_name FROM `products` p\nLEFT JOIN categories c\non p.category_id=c.id
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `p`.`id` AS `id`,`p`.`category_id` AS `category_id`,`p`.`name` AS `name`,`p`.`image` AS `image`,`p`.`description` AS `description`,`p`.`created_at` AS `created_at`,`p`.`updated_at` AS `updated_at`,`c`.`name` AS `category_name` from (`end`.`products` `p` left join `end`.`categories` `c` on(`p`.`category_id` = `c`.`id`))
mariadb-version=100428
