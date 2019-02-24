INSERT INTO `image_paths` (`description`, `path`, `status`) VALUES
('Payment method paths', '/image/', 1);

INSERT INTO `users` (`id`, `name`, `cellphone`, `email`, `password`, `status`, `confirmation_code`, `confirmed`, `admin_app`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrador', '+58123456789', 'admin@admin.com', '$2y$10$2WVP07AJNwtjdP6XUXm09O2lR0n5NMfUxAnpZ7Pkwzb4qg0XOZf5i', 1, 'w44qhgMeZo84OqJc64aN1MtWBoyHjQbgG47mnb0P9jyuopZslw1pdkgM3oi47hXA', 0, 1, 'fcMV8SW1HJxoYLYEYdkZ0o0KTwJ9N4WAyFIIZeFb5KWWJ6x1lonBttFXDLTa', '2018-10-26 22:34:20', '2018-10-26 22:34:20');


 INSERT INTO `roles` (`id`, `name`, `todos`, `sort`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 1, 1, 1, NULL, NULL);
 INSERT INTO `assigned_role` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);