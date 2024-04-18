-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 20, 2024 alle 18:24
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progetto_palestra`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `activities`
--

INSERT INTO `activities` (`id`, `name`, `description`, `time`, `day`, `status`, `difficulty`, `goal`, `course_id`, `created_at`, `updated_at`) VALUES
(21, 'Hatha Yoga', 'Basic classes focusing on balancing body and mind through the practice of asanas (physical postures), pranayama (conscious breathing), and meditation.', '1', 'Monday', 'Active', 'Intermediate', 'Improve flexibility, strength, and balance, reduce stress, and promote overall well-being.', 9, '2024-03-20 15:34:54', '2024-03-20 16:19:30'),
(22, 'Vinyasa Flow', 'Dynamic sequences of asanas synchronized with breath, creating a fluid flow between poses. Often includes inversions, balances, and more advanced postures.', '2', 'Friday', 'Active', 'Advanced', 'Improve endurance, increase muscular strength, enhance concentration, and strengthen mind-body connection.', 9, '2024-03-20 15:35:37', '2024-03-20 15:35:37'),
(23, 'Yin Yoga', 'Slow, meditative practice involving holding poses for extended periods (3-5 minutes or more). Focuses on deep release of connective tissues.', '3', 'Wednesday', 'Active', 'Beginner', 'Promote deep relaxation, increase flexibility, release muscle tension, and improve body awareness.', 9, '2024-03-20 15:36:17', '2024-03-20 15:36:17'),
(24, 'Matwork', 'During Matwork, exercises are performed on a mat primarily using the body\'s weight as resistance. Exercises include a variety of movements aimed at improving strength, flexibility, stability, and body control.', '1', 'Wednesday', 'Active', 'Intermediate', 'Build core strength, improve posture, and enhance overall body awareness.', 10, '2024-03-20 15:38:54', '2024-03-20 15:38:54'),
(25, 'Equipment Usage', 'This activity utilizes specialized equipment like the Reformer, Cadillac, and Pilates Chair. It offers adjustable resistance and various positions to target different muscle groups.', '2', 'Tuesday', 'Active', 'Advanced', 'Strengthen muscles, improve flexibility, and enhance overall body control using resistance provided by the equipment.', 10, '2024-03-20 15:40:52', '2024-03-20 15:40:52'),
(26, 'Breathing and Body Awareness', 'This activity focuses on proper breathing techniques and body awareness. Combining breathing exercises with fluid movements aims.', '1', 'Friday', 'Active', 'Beginner', 'Enhance relaxation, reduce stress, and improve focus through controlled breathing and heightened body awareness.', 10, '2024-03-20 15:41:49', '2024-03-20 15:41:49'),
(27, 'Deadlifts', 'Deadlifts involve lifting a loaded barbell from the ground to a standing position, emphasizing lower body and back strength.', '1', 'Tuesday', 'Active', 'Intermediate', 'Strengthening the posterior chain muscles (lower back, glutes, and hamstrings) and improving overall strength and power.', 11, '2024-03-20 15:43:48', '2024-03-20 15:43:48'),
(28, 'Burpees', 'Burpees are a full-body exercise performed by starting in a standing position, dropping into a squat, kicking the feet back into a plank position, returning to the squat, and jumping vertically.', '2', 'Wednesday', 'Active', 'Advanced', 'Enhancing cardiovascular endurance, muscular endurance, and agility.', 11, '2024-03-20 15:45:43', '2024-03-20 15:45:43'),
(29, 'Kettlebell Swings', 'Kettlebell swings involve swinging a kettlebell between the legs from a squat position to chest height with the arms extended, utilizing hip power.', '1', 'Tuesday', 'Active', 'Beginner', 'Developing explosive hip power, strengthening the posterior chain, and improving cardiovascular fitness.', 11, '2024-03-20 15:46:17', '2024-03-20 15:46:17'),
(30, 'Medicine Ball Slams', 'Medicine ball slams involve lifting a weighted medicine ball overhead and forcefully slamming it to the ground, engaging the entire body in a dynamic movement.', '3', 'Friday', 'Active', 'Beginner', 'Enhancing power, strength, and explosiveness across multiple muscle groups, particularly the core, shoulders, and legs.', 12, '2024-03-20 15:46:55', '2024-03-20 15:46:55'),
(31, 'Battle Rope Waves', 'Battle rope waves are performed by holding onto both ends of a heavy rope and creating waves with alternating arm movements, generating continuous ripples along the length of the rope.', '2', 'Monday', 'Active', 'Advanced', 'Improving cardiovascular endurance, muscular endurance, grip strength, and overall coordination.', 12, '2024-03-20 15:47:28', '2024-03-20 15:47:28'),
(32, 'Tai Chi Form', 'Tai Chi forms are a series of slow, graceful movements performed in a flowing sequence. Each movement transitions smoothly into the next, promoting balance, flexibility, and relaxation.', '2', 'Saturday', 'Active', 'Beginner', 'Enhance physical and mental well-being, cultivate mindfulness, improve balance, coordination, and overall body awareness.', 13, '2024-03-20 15:48:23', '2024-03-20 15:48:23'),
(33, 'Qigong', 'Qigong consists of gentle movements, deep breathing, and meditation techniques aimed at cultivating and balancing the body\'s vital energy (Qi). It involves static poses, dynamic movements, and visualization exercises.', '4', 'Monday', 'Active', 'Advanced', 'Improve energy flow, reduce stress, enhance relaxation, and promote inner harmony and balance.', 13, '2024-03-20 15:48:55', '2024-03-20 15:48:55'),
(34, 'Push Hands (Tui Shou)', 'Push Hands is a partner exercise in Tai Chi where practitioners engage in gentle pushing and yielding movements while maintaining balance and connection with their partner. It helps develop sensitivity, timing, and responsiveness.', '3', 'Friday', 'Active', 'Beginner', 'Enhance sensitivity to external forces, improve balance, coordination, and understanding of Tai Chi principles through interaction with a partner.', 13, '2024-03-20 15:49:35', '2024-03-20 15:49:35'),
(35, 'Pull-Ups', 'Pull-ups involve gripping an overhead bar with palms facing away, then pulling the body upward until the chin passes the bar, and lowering back down.', '2', 'Wednesday', 'Active', 'Intermediate', 'Strengthening the back, shoulders, arms, and core muscles, while also improving grip strength and overall upper body strength.', 14, '2024-03-20 15:50:25', '2024-03-20 16:17:26'),
(36, 'Push-Ups', 'Push-ups are performed by lowering the body to the ground with arms shoulder-width apart, then pushing back up to the starting position while maintaining a straight body alignment.', '3', 'Tuesday', 'Active', 'Advanced', 'Targeting the chest, shoulders, triceps, and core muscles, while also improving overall upper body strength, stability, and endurance.', 14, '2024-03-20 15:51:03', '2024-03-20 15:51:03'),
(37, 'Bodyweight Squats', 'Bodyweight squats involve standing with feet shoulder-width apart, bending the knees and hips to lower the body into a squat position, then returning to the starting position by extending the knees and hips.', '4', 'Thursday', 'Active', 'Beginner', 'Strengthening the quadriceps, hamstrings, glutes, and lower back muscles, while also improving mobility, stability, and functional leg strength.', 14, '2024-03-20 15:51:30', '2024-03-20 15:51:30');

-- --------------------------------------------------------

--
-- Struttura della tabella `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `instructor_id` bigint(20) UNSIGNED NOT NULL,
  `room` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL DEFAULT '2024-03-20 16:20:04',
  `end_date` datetime NOT NULL DEFAULT '2024-05-01 16:20:04',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `instructor_id`, `room`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(9, 'Yoga', 'Yoga combines fluid movements, mindful breathing, and meditation to improve flexibility, reduce stress, and promote mental and physical well-being.', 4, '4', '2024-03-19 00:00:00', '2024-04-03 00:00:00', '2024-03-20 15:25:54', '2024-03-20 15:25:54'),
(10, 'Pilates', 'Pilates focuses on core strength, flexibility, and body control through low-impact exercises. It enhances posture, tones muscles, and improves overall fitness.', 4, '8', '2024-03-19 00:00:00', '2024-04-15 00:00:00', '2024-03-20 15:26:46', '2024-03-20 15:26:46'),
(11, 'CrossFit', 'CrossFit combines strength training, high-intensity interval training, and functional movements to improve overall fitness and athletic performance.', 4, '7', '2024-03-26 00:00:00', '2024-04-16 00:00:00', '2024-03-20 15:27:31', '2024-03-20 15:27:31'),
(12, 'Functional Training', 'Functional training focuses on improving everyday movements and activities through exercises that mimic real-life motions, enhancing strength, flexibility, and mobility.', 4, '5', '2024-03-22 00:00:00', '2024-04-29 00:00:00', '2024-03-20 15:28:15', '2024-03-20 15:28:15'),
(13, 'Tai Chi', 'Tai Chi is a gentle Chinese martial art focusing on slow, flowing movements, deep breathing, and mindfulness to improve balance, flexibility, and inner peace.', 4, '1', '2024-04-04 00:00:00', '2024-03-28 00:00:00', '2024-03-20 15:28:50', '2024-03-20 15:28:50'),
(14, 'Calisthenics', 'Boost strength, agility & control. Expert guidance, technique focus, community support. Unlock your potential! Join now!\"', 4, '2', '2024-05-08 00:00:00', '2024-05-22 00:00:00', '2024-03-20 15:29:23', '2024-03-20 15:29:23'),
(15, 'Parkour Conditioning', 'Parkour Conditioning focuses on developing agility, strength, and coordination through exercises inspired by the discipline of parkour, such as jumps, climbs, and balance drills.', 4, '5', '2024-06-05 00:00:00', '2024-06-28 00:00:00', '2024-03-20 15:29:58', '2024-03-20 15:29:58'),
(16, 'Aerobics', 'Aerobics involves rhythmic exercises to music, aiming to improve cardiovascular fitness, coordination, and endurance through energetic movements.', 4, '3', '2024-07-02 00:00:00', '2024-06-25 00:00:00', '2024-03-20 15:30:48', '2024-03-20 15:30:48');

-- --------------------------------------------------------

--
-- Struttura della tabella `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(76, '2014_10_12_000000_create_users_table', 1),
(77, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(78, '2019_08_19_000000_create_failed_jobs_table', 1),
(79, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(80, '2024_03_19_093567_create_courses_table', 1),
(81, '2024_03_19_094535_create_activities_table', 1),
(82, '2024_03_19_095151_create_reservations_table', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Lucienne Gerhold', 'kbogisich@example.com', '2024-03-20 15:20:13', '$2y$10$rggbG7oPHt/DCU./839Tn.R0/mpkJ9j..o6oO3EQrqExVymsMEmD6', 'Admin', 'IFwKanYv5Z', '2024-03-20 15:20:13', '2024-03-20 15:20:13'),
(3, 'Prof. Sidney Johnson PhD', 'rossie.stark@example.net', '2024-03-20 15:20:13', '$2y$10$NaW6LRz4NwcoxRPmXaCoa.dsqEz1XJ5Yh/dTXtgvtazqbTrd.RlUi', 'User', 'KlRlJ1vGZr', '2024-03-20 15:20:13', '2024-03-20 15:20:13'),
(4, 'Linnie Altenwerth', 'mraz.nils@example.com', '2024-03-20 15:20:13', '$2y$10$0w/UglBfH.4X9IYqcrpM0.Mk4Yb4CFbUbkC7cGHKy9Ew9m8U7fFe6', 'Admin', '1D5tywqCjjs1I5lHlZdf2DDo4Y6yrilhVULZO7WnbrTI0erXUJ48Q87YWrsw', '2024-03-20 15:20:13', '2024-03-20 15:20:13'),
(5, 'Ethyl Greenfelder', 'dcremin@example.com', '2024-03-20 15:20:13', '$2y$10$.xsOdUTdfbj1aPdzBw6Qdu8fjSHpfnolJ.S6/bS6aTYNkTJA0oQWW', 'Instructor', 'PGJ9sR5ZLH', '2024-03-20 15:20:13', '2024-03-20 15:20:13'),
(6, 'Courtney Daugherty', 'chermiston@example.com', '2024-03-20 15:20:13', '$2y$10$WIrFM3.fiIXAe74Hq.JMLu..Wpw1NUsibw7PEFc/XP5x2iKYIp7Pi', 'User', 'piFK5vwSS1', '2024-03-20 15:20:13', '2024-03-20 15:20:13'),
(7, 'Prof. Eleanore Howell', 'erippin@example.com', '2024-03-20 15:20:13', '$2y$10$Ew.1/r9JXf/Iritytywuy.uRTord5U426A5Ns2qjLqAlomxSby1LO', 'User', 'RmvVJD3vOG', '2024-03-20 15:20:13', '2024-03-20 15:20:13'),
(8, 'Miss Sadie Pacocha MD', 'madie.schultz@example.org', '2024-03-20 15:20:13', '$2y$10$SAv.ibhaobWA5tGSoQiuoOYXbba2STCZPBLC/YHnc2ALinYTBz0S6', 'Admin', '3jXH1Q4eCA', '2024-03-20 15:20:13', '2024-03-20 15:20:13'),
(9, 'Hosea Erdman', 'celine48@example.org', '2024-03-20 15:20:13', '$2y$10$INzEYJ5yddeNoexNp8V4ie8HtuaYoFWbqXILubK5mBlmq5w0d2T6u', 'Instructor', 'vqB4EFD7Yi', '2024-03-20 15:20:13', '2024-03-20 15:20:13'),
(10, 'Sammie Langworth', 'jesse82@example.net', '2024-03-20 15:20:13', '$2y$10$My1w1JHpigGQn6BtvhltGOrO475e7xtzATfQJz0/R9STewWk.y8IW', 'Admin', 'JfnqaEkgnG', '2024-03-20 15:20:13', '2024-03-20 15:20:13'),
(11, 'Dr. Magdalena Muller DVM', 'sheila.wolff@example.org', '2024-03-20 15:20:13', '$2y$10$8CEQpvNCkC4.7/WUY.WkbeiasJHYUXo4qz17i/2FCGWmy7Bcp2ZpW', 'Admin', 'WJjm7frRVj', '2024-03-20 15:20:13', '2024-03-20 15:20:13'),
(12, 'Darryl Buckridge', 'muller.winona@example.net', '2024-03-20 15:20:13', '$2y$10$bg8aSR.5QQATgO7X1sAtYOe/nu8v455vU.HHuTg5KTc4QGszXZomK', 'Admin', 'k2ygLPmb0f', '2024-03-20 15:20:13', '2024-03-20 15:20:13'),
(13, 'Forest West', 'christelle.brekke@example.org', '2024-03-20 15:20:13', '$2y$10$QdcPVuFtxdem0E5LIkzvwObQj3Qzz7kMtMqNw.6xW6jvSqnc7xAyS', 'User', 'G9aTeLvMza', '2024-03-20 15:20:13', '2024-03-20 15:20:13'),
(14, 'Ephraim Kemmer', 'zferry@example.net', '2024-03-20 15:20:14', '$2y$10$kNuuWkJRGUSXb8yGi8Zwh.7DQTtB5PUh5bCl7AddCvSoNLwcp8HOq', 'Admin', 'VnPRdO6WQp', '2024-03-20 15:20:14', '2024-03-20 15:20:14'),
(15, 'Mr. Curt Huels', 'will.terrence@example.com', '2024-03-20 15:20:14', '$2y$10$pWkJ9wfi9plrZWIV55pLi.tAi9wX0opi5WATdKaXvhIOEragW9/SG', 'Admin', '0Wpu74znGx', '2024-03-20 15:20:14', '2024-03-20 15:20:14'),
(16, 'Merle Powlowski', 'uebert@example.org', '2024-03-20 15:20:14', '$2y$10$jEOmuiDtYxvAMgso3HlNwu/2qvOA5OtD9K/ahU4QQfwDWDb7vvOT2', 'Instructor', 'FrWn870mX0', '2024-03-20 15:20:14', '2024-03-20 15:20:14'),
(17, 'Dr. Cary Abernathy', 'mvon@example.net', '2024-03-20 15:20:14', '$2y$10$yzOBzTVRia4DvqrZiuIxTOXEW/Wm2ep3tTkUp1pQ8cGrZkTvoOsUu', 'User', 'rxCj7GpNcN', '2024-03-20 15:20:14', '2024-03-20 15:20:14'),
(18, 'Mrs. Alysha Heaney', 'odessa.stroman@example.org', '2024-03-20 15:20:14', '$2y$10$LNzBDSBBvHYWROZmpQl5QeW9Gx43cO26ag6IoiGdod/n9g/D7MPly', 'User', '4CGjC99MgI', '2024-03-20 15:20:14', '2024-03-20 15:20:14'),
(19, 'Kassandra Labadie DDS', 'stiedemann.destinee@example.org', '2024-03-20 15:20:14', '$2y$10$HqoylT6xDwE4Cqscu0sW7OUzAEbvFbBcigANFrFN8MYcpQ5D9GWiq', 'User', 'FQgTiq4bLv', '2024-03-20 15:20:14', '2024-03-20 15:20:14'),
(20, 'Mr. Hayley Crooks I', 'ortiz.felix@example.org', '2024-03-20 15:20:14', '$2y$10$XgYVpdZn458HeMEWt0b5FOQ4eewnKmcHK0nWKuL51idNhGmYk0Icu', 'User', 'l9Nn49vWm7InM1vB7tC95TTlKAWzOA3GWfKNDQmGNCf7Bnjl0ZPnh3V2yq5Y', '2024-03-20 15:20:14', '2024-03-20 15:20:14'),
(21, 'Kennith Stamm', 'xhyatt@example.com', '2024-03-20 15:20:14', '$2y$10$JFTp7gRyS7/vm7w8XZPneOOMO8wXCPoECcy6wuox7Uml2KB45qLAa', 'Admin', 'jStJxq33lw', '2024-03-20 15:20:14', '2024-03-20 15:20:14');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_course_id_foreign` (`course_id`);

--
-- Indici per le tabelle `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_instructor_id_foreign` (`instructor_id`);

--
-- Indici per le tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indici per le tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indici per le tabelle `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_activity_id_foreign` (`activity_id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT per la tabella `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la tabella `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT per la tabella `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
