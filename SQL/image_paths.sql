
INSERT INTO `users` (`id`, `name`, `cellphone`, `email`, `password`, `status`, `confirmation_code`, `confirmed`, `admin_app`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrador', '+58123456789', 'admin@admin.com', '$2y$10$2WVP07AJNwtjdP6XUXm09O2lR0n5NMfUxAnpZ7Pkwzb4qg0XOZf5i', 1, 'w44qhgMeZo84OqJc64aN1MtWBoyHjQbgG47mnb0P9jyuopZslw1pdkgM3oi47hXA', 0, 1, 'fcMV8SW1HJxoYLYEYdkZ0o0KTwJ9N4WAyFIIZeFb5KWWJ6x1lonBttFXDLTa', '2018-10-26 22:34:20', '2018-10-26 22:34:20');


 INSERT INTO `roles` (`id`, `name`, `todos`, `sort`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 1, 1, 1, NULL, NULL);
 INSERT INTO `assigned_role` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

INSERT INTO `parameters_system` (`id`, `code`, `name`, `value`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'profile_paths', '/images_publications/', 'imagenes de las publicaciones', 1, NULL, NULL);


INSERT INTO `users` (`id`, `name`, `username`, `cellphone`, `email`, `password`, `status`, `confirmation_code`, `confirmed`, `admin_app`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'luigie', 'luisguillermo12', '4141401175', 'luisguillermo12@gmail.com', '$2y$10$q8kAaG3sU/KaN5oCG2JkU.FBPgTJoGWAkAapNtyABFknqCW/e2Ecu', 1, 'vNeZ2OBKx1tFMtw9XAbSkq6OMMAABdeglKPPWCY1swdTFh6jrTaciGm0jFpYK38Z', 1, 0, NULL, '2019-02-25 03:42:18', '2019-02-25 03:42:18', NULL);

