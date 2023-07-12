-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table laravel.clubs: ~3 rows (approximately)
INSERT INTO `clubs` (`id`, `name`, `email`, `url`, `image_url`, `slug`, `address`, `reservations_until`, `max_person_count`, `capacity`, `owner_id`, `created_at`, `updated_at`) VALUES
	(1, 'Divine', 'divine@gmail.com', 'http://night-club-rezervacije.test:3000/admin/clubs/1/', 'https://images.unsplash.com/photo-1560359614-870d1a7ea91d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'divine', NULL, '23:00:00', 6, 3000, 1, '2023-07-11 16:23:23', '2023-07-11 18:36:34'),
	(2, 'Teraca', 'teraca@gmail.com', 'http://night-club-rezervacije.test:3000/clubs/2', 'https://images.unsplash.com/photo-1566417713940-fe7c737a9ef2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1129&q=80', 'teraca', NULL, '23:00:00', 6, 5000, 1, '2023-07-11 17:51:43', '2023-07-11 17:51:43'),
	(3, 'Jazzy', 'jazzy@gmail.com', 'http://night-club-rezervacije.test:3000/clubs/3', 'https://images.unsplash.com/photo-1571838657342-9ef1b10d2ce3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80', 'jazzy', NULL, '22:00:00', 9, 3000, 1, '2023-07-11 17:55:45', '2023-07-11 17:55:45');

-- Dumping data for table laravel.events: ~3 rows (approximately)
INSERT INTO `events` (`id`, `name`, `description`, `url`, `image_url`, `slug`, `date`, `time_start`, `time_end`, `club_id`, `created_at`, `updated_at`) VALUES
	(1, 'Acoustic night', 'Guitar and wine', NULL, 'https://images.unsplash.com/photo-1471478331149-c72f17e33c73?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80', 'acoustic-night', '2023-07-14', '20:00:00', '01:00:00', 1, '2023-07-11 16:23:47', '2023-07-11 18:34:16'),
	(2, 'White party', 'Dress code white', NULL, 'https://images.unsplash.com/photo-1425421598808-4a22ce59cc97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80', 'white-party', '2023-07-13', '18:00:00', '00:00:00', 1, '2023-07-11 18:11:56', '2023-07-11 18:11:56'),
	(3, 'Summer party', 'Cocktail and bikini party', NULL, 'https://images.unsplash.com/photo-1590230806685-c667d516295a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=386&q=80', 'summer-party', '2023-07-20', '18:00:00', '00:00:00', 1, '2023-07-11 18:16:25', '2023-07-11 18:16:25'),
	(4, 'Coctail night', 'Enjoy coctails', NULL, 'https://images.unsplash.com/photo-1546171753-97d7676e4602?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80', 'coctail-night', '2023-07-20', '21:00:00', '02:00:00', 2, '2023-07-11 18:55:17', '2023-07-11 18:55:17'),
	(5, 'Black night', 'Dress code black', NULL, 'https://images.unsplash.com/photo-1624695355888-153471d81f52?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=382&q=80', 'black-night', '2023-07-28', '21:00:00', '02:00:00', 2, '2023-07-11 18:57:42', '2023-07-11 18:57:42'),
	(6, 'Gin party', 'Just gin and good vibes', NULL, 'https://images.unsplash.com/photo-1598373187432-c1ff06874ce8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=572&q=80', 'gin-party', '2023-07-27', '21:00:00', '02:00:00', 2, '2023-07-11 18:59:57', '2023-07-11 18:59:57'),
	(7, 'Blues night', 'Just good blues', NULL, 'https://images.unsplash.com/photo-1489602765044-5d661da88b24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'blues-night', '2023-07-28', '22:00:00', '02:00:00', 3, '2023-07-11 19:03:32', '2023-07-11 19:03:32'),
	(8, 'Jazz night', 'Jazz and good beer', NULL, 'https://images.unsplash.com/photo-1415201364774-f6f0bb35f28f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'jazz-night', '2023-08-09', '22:00:00', '02:00:00', 3, '2023-07-11 19:05:56', '2023-07-11 19:05:56'),
	(9, 'Rock night', 'Rock and roll', NULL, 'https://images.unsplash.com/photo-1477927849362-0fb1e7d59ee6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80', 'rock-night', '2023-08-16', '22:00:00', '02:00:00', 3, '2023-07-11 19:08:05', '2023-07-11 19:08:05');

-- Dumping data for table laravel.failed_jobs: ~0 rows (approximately)

-- Dumping data for table laravel.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_06_14_210414_create_clubs_table', 1),
	(6, '2023_06_14_210501_create_events_table', 1),
	(7, '2023_06_14_210518_create_reservations_table', 1),
	(8, '2023_06_14_210531_create_roles_table', 1),
	(9, '2023_06_14_210548_create_user_role_table', 1);

-- Dumping data for table laravel.password_resets: ~0 rows (approximately)

-- Dumping data for table laravel.personal_access_tokens: ~0 rows (approximately)

-- Dumping data for table laravel.reservations: ~1 rows (approximately)
INSERT INTO `reservations` (`id`, `user_id`, `event_id`, `person_count`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 4, '2023-07-11 17:18:08', '2023-07-11 17:18:08'),
	(2, 1, 1, 5, '2023-07-11 18:34:45', '2023-07-11 18:34:45'),
	(3, 1, 1, 6, '2023-07-11 19:44:31', '2023-07-11 19:44:31');

-- Dumping data for table laravel.roles: ~0 rows (approximately)

-- Dumping data for table laravel.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'test', 'test@test.com', NULL, '$2y$10$BWEUr73bwl29WMAyrXJWmucsCHfDPeoEL26Uxs90dBvjBoZ0qfViq', NULL, '2023-07-11 16:22:46', '2023-07-11 16:22:46');

-- Dumping data for table laravel.user_role: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
