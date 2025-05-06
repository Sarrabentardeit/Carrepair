-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 jan. 2025 à 08:17
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `carservice`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `vehicule_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` longtext NOT NULL,
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `appointment`
--

INSERT INTO `appointment` (`id`, `client_id`, `date`, `name`, `statut`, `vehicule_id`, `email`, `phone`, `message`, `service`) VALUES
(1, 12, '2024-12-13 11:00:00', 'sarra', 'validé', 2, 'bentardeit.sarra2000@gmail.com', '92231211', 'rr', 'Car Paint'),
(2, 12, '2024-12-13 11:04:00', 'sarra', 'validé', 2, 'bentardeit.sarra2000@gmail.com', '92231211', 'derf', 'Car Wash'),
(3, 12, '2024-12-13 11:04:00', 'sarra', 'validé', 2, 'bentardeit.sarra2000@gmail.com', '92231211', 'derf', 'Car Wash'),
(4, 12, '2024-12-12 09:36:00', 'sarra', 'validé', 2, 'bentardeit.sarra2000@gmail.com', '92231211', 'g', 'Car Paint'),
(9, 20, '2024-12-20 12:40:00', 'rihem', 'validé', 9, 'rihem@gmail.com', '5678912', 'ee', 'Car Repair'),
(10, 19, '2025-01-15 11:01:00', 'arfaoui ahmed', 'validé', 10, 'ahmed@gmail.com', '92231211', 'ff', 'Car Repair'),
(11, 19, '2025-01-15 11:09:00', 'arfaoui ahmed', 'En attente', 10, 'ahmed@gmail.com', '92231211', 'xx', 'Car Wash'),
(12, 19, '2025-01-16 11:22:00', 'ben tardeit sarra', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'gh', 'Car Paint'),
(13, 19, '2025-01-16 11:22:00', 'ben tardeit sarra', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'gh', 'Car Repair'),
(14, 19, '2025-01-16 11:22:00', 'ben tardeit sarra', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'gh', 'Car Repair'),
(15, 19, '2025-01-16 11:22:00', 'ben tardeit sarra', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'gh', 'Car Repair'),
(16, 19, '2025-01-16 11:22:00', 'ben tardeit sarra', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'gh', 'Car Repair'),
(17, 19, '2025-01-16 11:39:00', 'ben tardeit sarra', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'jj', 'Car Wash'),
(18, 19, '2025-01-18 11:39:00', 'ben tardeit sarra', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'jjf', 'Car Wash'),
(19, 19, '2025-01-18 11:39:00', 'ben tardeit sarra', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'jjf', 'Car Wash'),
(20, 19, '2025-01-18 11:39:00', 'asma asma', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'jjf', 'Car Paint'),
(21, 19, '2025-01-18 11:39:00', 'asma asma', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'jjf', 'Car Paint'),
(22, 19, '2025-01-18 11:39:00', 'asma asma', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'jjf', 'Car Paint'),
(23, 19, '2025-01-18 11:39:00', 'asma asma', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'jjfrr', 'Car Paint'),
(24, 19, '2025-01-18 11:39:00', 'asma asma', 'En attente', 10, 'bentardeit.sarra2000@gmail.com', '92231211', 'jjfrr', 'Car Paint');

-- --------------------------------------------------------

--
-- Structure de la table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(1, 'Vidang', '676abc430472d.png'),
(2, 'Freinage', '676aa9b961774.png'),
(3, 'Distribution', '676abc78dc642.png'),
(4, 'Suspension', '676abca433391.jpg'),
(5, 'Refroidissement', '676abcd669f9b.png'),
(7, 'Bornes de recharge', '676d07c06bbff.jpg'),
(9, 'Bornes de recharge', '676d1439e2d78.png');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `nom`) VALUES
(5, 'kia'),
(6, 'hundai'),
(7, 'Renault'),
(8, 'bmw'),
(9, 'mazda');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messenger_messages`
--

INSERT INTO `messenger_messages` (`id`, `body`, `headers`, `queue_name`, `created_at`, `available_at`, `delivered_at`) VALUES
(1, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:28:\\\"Symfony\\\\Component\\\\Mime\\\\Email\\\":6:{i:0;N;i:1;N;i:2;s:345:\\\"\n        <h1>Rendez-vous confirmé</h1>\n        <p>Bonjour ben tardeit,</p>\n        <p>Votre rendez-vous a été confirmé. Voici les détails :</p>\n        <ul>\n            <li><strong>Date :</strong> 12/12/2024 09:36</li>\n            <li><strong>Statut :</strong> Confirmé</li>\n        </ul>\n        <p>Merci de nous faire confiance.</p>\n    \\\";i:3;s:5:\\\"utf-8\\\";i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:22:\\\"noreply@yourdomain.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:30:\\\"bentardeit.sarra2000@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:27:\\\"Confirmation de rendez-vous\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2024-12-26 08:23:12', '2024-12-26 08:23:12', NULL),
(2, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:28:\\\"Symfony\\\\Component\\\\Mime\\\\Email\\\":6:{i:0;N;i:1;N;i:2;s:58:\\\"<p>This is a test email sent directly without a queue.</p>\\\";i:3;s:5:\\\"utf-8\\\";i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:22:\\\"noreply@yourdomain.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:21:\\\"recipient@example.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:10:\\\"Test Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2024-12-26 08:36:41', '2024-12-26 08:36:41', NULL),
(3, 'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:28:\\\"Symfony\\\\Component\\\\Mime\\\\Email\\\":6:{i:0;N;i:1;N;i:2;s:307:\\\"\n    <h1>Rendez-vous confirmé</h1>\n    <p>Bonjour sarra,</p>\n    <p>Votre rendez-vous a été confirmé. Voici les détails :</p>\n    <ul>\n        <li><strong>Date :</strong> 13/12/2024 11:04</li>\n        <li><strong>Statut :</strong> Confirmé</li>\n    </ul>\n    <p>Merci de nous faire confiance.</p>\n    \\\";i:3;s:5:\\\"utf-8\\\";i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:22:\\\"noreply@yourdomain.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:30:\\\"bentardeit.sarra2000@gmail.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:27:\\\"Confirmation de rendez-vous\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}', '[]', 'default', '2024-12-26 08:46:58', '2024-12-26 08:46:58', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE `modele` (
  `id` int(11) NOT NULL,
  `marque_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `modele`
--

INSERT INTO `modele` (`id`, `marque_id`, `nom`) VALUES
(7, 5, 'rio'),
(8, 5, 'picanto'),
(9, 5, 'i10'),
(10, 7, 'symbole'),
(11, 8, 'x5'),
(12, 9, 'x7');

-- --------------------------------------------------------

--
-- Structure de la table `modele_motorisations`
--

CREATE TABLE `modele_motorisations` (
  `modele_id` int(11) NOT NULL,
  `motorisation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `modele_motorisations`
--

INSERT INTO `modele_motorisations` (`modele_id`, `motorisation_id`) VALUES
(8, 12),
(9, 12),
(10, 12),
(11, 12),
(12, 13);

-- --------------------------------------------------------

--
-- Structure de la table `motorisation`
--

CREATE TABLE `motorisation` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `motorisation`
--

INSERT INTO `motorisation` (`id`, `nom`) VALUES
(12, 'Essence'),
(13, 'Diesel'),
(14, 'Électrique'),
(15, 'Hybride');

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `date_commande` datetime NOT NULL,
  `montant_total` double NOT NULL,
  `statut` varchar(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `produits_commande` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`produits_commande`)),
  `type_livraison` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order`
--

INSERT INTO `order` (`id`, `client_id`, `date_commande`, `montant_total`, `statut`, `nom`, `prenom`, `email`, `telephone`, `produits_commande`, `type_livraison`) VALUES
(16, 2, '2025-01-07 00:00:00', 8, 'En attente', 'nour', 'nourbentardeit', 'nour@gmail.com', '92231211', '[]', 'Livraison Aramex'),
(17, 2, '2025-01-07 00:00:00', 8, 'En attente', 'nour', 'nourbentardeit', 'nour@gmail.com', '92231211', '[]', 'Livraison Aramex'),
(18, 2, '2025-01-07 00:00:00', 120, 'Refusée', 'nour', 'nourbentardeit', 'nour@gmail.com', '92231211', '[{\"nom\":\"Bougie d\'allumage EUROREPAR 1625939480\",\"quantite\":1,\"prix\":120.0}]', 'Retrait au magasin'),
(19, 2, '2025-01-07 00:00:00', 128, 'En attente', 'sarra', 'ben tardeit', 'bentardeit.sarra2000@gmail.com', '92231211', '[{\"nom\":\"Bougie d\'allumage EUROREPAR 1625939480\",\"quantite\":1,\"prix\":120.0}]', 'Livraison Aramex'),
(20, 2, '2025-01-07 00:00:00', 8, 'En attente', 'nana', 'ben tardeit', 'bentardeit.sarra2000@gmail.com', '92231211', '[]', 'Livraison Aramex'),
(21, 2, '2025-01-08 00:00:00', 10, 'En attente', 'nana', 'ben tardeit', 'bentardeit.sarra2000@gmail.com', '92231211', '[{\"nom\":\"Bougie d\'allumage EUROREPAR 1625938380\",\"quantite\":1,\"prix\":10.0}]', 'Retrait au magasin'),
(22, 2, '2025-01-07 00:00:00', 120, 'En attente', 'sarra', 'ben tardeit', 'bentardeit.sarra2000@gmail.com', '92231211', '[{\"nom\":\"Bougie d\'allumage EUROREPAR 1625939480\",\"quantite\":1,\"prix\":120.0}]', 'Retrait au magasin'),
(23, 2, '2025-01-07 00:00:00', 0, 'En attente', 'sarra', 'ben tardeit', 'bentardeit.sarra2000@gmail.com', '92231211', '[]', 'Retrait au magasin'),
(24, 2, '2025-01-07 00:00:00', 10, 'En attente', 'asma', 'asma', 'asma@gmail.com', '92231211', '[{\"nom\":\"Bougie d\'allumage EUROREPAR 1625938380\",\"quantite\":1,\"prix\":10.0}]', 'Retrait au magasin'),
(25, 2, '2025-01-07 00:00:00', 48, 'En attente', 'sarra', 'ben tardeit', 'bentardeit.sarra2000@gmail.com', '92231211', '[{\"nom\":\"Bougie d\'allumage EUROREPAR 1625938380\",\"quantite\":4,\"prix\":10.0}]', 'Livraison Aramex'),
(26, 2, '2025-01-07 00:00:00', 11, 'En attente', 'sarra', 'ben tardeit', 'bentardeit.sarra2000@gmail.com', '92231211', '[{\"nom\":\"Bougie d\'allumage EUROREPAR 1625935580\",\"quantite\":1,\"prix\":11.0}]', 'Retrait au magasin'),
(27, 2, '2025-01-13 00:00:00', 99, 'En attente', 'wajih', 'kouba', 'wajih@gmail.com', '92231211', '[{\"nom\":\"Disque de frein LPR CC30029\",\"quantite\":3,\"prix\":33.0}]', 'Retrait au magasin'),
(28, NULL, '2025-01-14 00:00:00', 66, 'En attente', 'wajih', 'kouba', 'wajih@gmail.com', '92231211', '[{\"nom\":\"Disque de frein LPR CC30029\",\"quantite\":2,\"prix\":33.0}]', 'Retrait au magasin'),
(29, 2, '2025-01-14 00:00:00', 20, 'En attente', 'wajih', 'kouba', 'wajih@gmail.com', '92231211', '[{\"nom\":\"Bougie de pr\\u00e9chauffage EUROREPAR 1682251180\",\"quantite\":1,\"prix\":20.0}]', 'Retrait au magasin'),
(30, NULL, '2025-01-16 00:00:00', 251, 'En attente', 'khouloud', 'ben tardeit', 'khouloud@gmail.com', '92231211', '[{\"nom\":\"Bougie d\'allumage EUROREPAR 1625939480\",\"quantite\":2,\"prix\":120.0},{\"nom\":\"Bougie d\'allumage EUROREPAR 1625935580\",\"quantite\":1,\"prix\":11.0}]', 'Retrait au magasin'),
(31, NULL, '2025-01-16 00:00:00', 13, 'En attente', 'sarra', 'ben tardeit', 'bentardeit.sarra2000@gmail.com', '92231211', '[{\"nom\":\"Bougie d\'allumage EUROREPAR 1625938680\",\"quantite\":1,\"prix\":13.0}]', 'Retrait au magasin'),
(32, NULL, '2025-01-16 00:00:00', 21, 'En attente', 'asma', 'asma', 'asma@gmail.com', '92231211', '[{\"nom\":\"Bougie d\'allumage EUROREPAR 1625938680\",\"quantite\":1,\"prix\":13.0}]', 'Livraison Aramex');

-- --------------------------------------------------------

--
-- Structure de la table `order_products`
--

CREATE TABLE `order_products` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `prix` double NOT NULL,
  `description` longtext DEFAULT NULL,
  `quantite_en_stock` int(11) NOT NULL,
  `date_ajout` datetime NOT NULL,
  `seo_titre` varchar(255) DEFAULT NULL,
  `seo_description` longtext DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `mots_cles` longtext DEFAULT NULL,
  `texte_promotion` longtext DEFAULT NULL,
  `nom_image` varchar(255) DEFAULT NULL,
  `texte_alternatif` varchar(255) DEFAULT NULL,
  `titre_image` varchar(255) DEFAULT NULL,
  `description_image` longtext DEFAULT NULL,
  `indexable` tinyint(1) NOT NULL DEFAULT 1,
  `canonical_url` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `nom` longtext DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `prix`, `description`, `quantite_en_stock`, `date_ajout`, `seo_titre`, `seo_description`, `slug`, `mots_cles`, `texte_promotion`, `nom_image`, `texte_alternatif`, `titre_image`, `description_image`, `indexable`, `canonical_url`, `image`, `nom`, `category_id`, `sub_category_id`) VALUES
(8, 120, 'g', 0, '2024-12-25 10:51:00', 'Filtre', 'g', 'gg', 'ht', 'ggg', NULL, 'gg', 'gg', 'gg', 1, 'gg', '676a8638b5626.jpg', 'Bougie d\'allumage EUROREPAR 1625939480', 1, 1),
(9, 33, 'Référence : CC30029\r\nMarque : LPR', -1, '2024-12-25 14:27:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '676ab6ca6f575.png', 'Disque de frein LPR CC30029', 2, 2),
(10, 10, 'Disponibilité : Disponible en Stock\r\nRéférence : 1625938380\r\nMarque : EUROREPAR', 0, '2025-01-02 13:56:00', 'zz', 'j,', 'dd', 'bggh', 'jj', NULL, 'ee', 'ee', 'jj', 1, 'ee', '67768d3635f45.jpg', 'Bougie d\'allumage EUROREPAR 1625938380', 1, 1),
(11, 11, 'Disponibilité : Disponible en Stock\r\nRéférence : 1625935580\r\nMarque : EUROREPAR', 0, '2025-01-09 15:00:00', 'zz', 'uju', 'dd', 'bggh', 'dd', NULL, 'ee', 'ee', 'jju', 1, 'ee', '67769c1dd7598.jpg', 'Bougie d\'allumage EUROREPAR 1625935580', 1, 1),
(12, 14, 'Disponibilité : Disponible en Stock\r\nRéférence : 1625938880\r\nMarque : EUROREPAR', 0, '2025-01-03 16:57:00', 'zz', 'dd', 'dd', 'bggh', 'dd', NULL, 'ee', 'ee', 'dd', 1, 'ee', '677809209d3b2.jpg', 'Bougie d\'allumage EUROREPAR 1625938880', 1, 1),
(13, 44, 'Ref: A1011P', 0, '2025-01-06 08:26:00', 'zz', 'mm', 'dd', 'bggh', ':kk', NULL, 'ee', 'ee', 'kk', 1, 'ee', '677b85e873d67.jpg', 'Disque de frein LPR A1011P', 2, 4),
(14, 13, 'Référence : 1625938680\r\nMarque : EUROREPAR', 1, '2025-01-14 10:05:00', 'zz', 'hht', 'tht', 'ht', 'thth', NULL, 'ee', 'Bougie d\'allumage EUROREPAR 1625938680', 'ff', 1, 'htt', '6786292cce680.jpg', 'Bougie d\'allumage EUROREPAR 1625938680', 1, 1),
(15, 17, 'h', 7, '2025-01-14 10:07:00', 'hh', 'hh', 'tht', 'ht', 'hh', NULL, 'ee', 'Bougie d\'allumage EUROREPAR 1625938680', 'ff', 1, 'htt', '67891190abf36.png', 'Bougie d\'allumage EUROREPAR 1625935680', 1, 1),
(17, 12, 'xx', 2, '2025-01-16 15:56:00', 'dd', 'xx', 'xx', 'xx', 'xx', NULL, 'xx', 'xx', 'xx', 1, 'xx', '67891e3f07bce.png', 'dd', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `product_motorisation`
--

CREATE TABLE `product_motorisation` (
  `product_id` int(11) NOT NULL,
  `motorisation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product_motorisation`
--

INSERT INTO `product_motorisation` (`product_id`, `motorisation_id`) VALUES
(8, 12),
(9, 12),
(10, 13),
(11, 12),
(12, 12),
(13, 12),
(14, 12),
(15, 12),
(17, 13);

-- --------------------------------------------------------

--
-- Structure de la table `stock_movement`
--

CREATE TABLE `stock_movement` (
  `id` int(11) NOT NULL,
  `produit_id` int(11) NOT NULL,
  `date_mouvement` datetime NOT NULL,
  `quantite` int(11) NOT NULL,
  `type_mouvement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`) VALUES
(1, 1, 'Bougie Allumage & Préchauffage'),
(2, 2, 'Disque de Frein Arrière'),
(3, 1, 'Filtre Climatiseur'),
(4, 2, 'Disque de Frein Avant');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(180) NOT NULL,
  `prenom` varchar(180) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nom`, `prenom`, `telephone`, `roles`) VALUES
(1, 'sarrabentardeit@gmail.com', '$2y$13$g1HbtTcfWWDomtrjSObv.OD4taEEsKKGzVB4aABNCsceJ9zGVaWEC', 'sarr', 'ben tardeit', NULL, '[\"ROLE_USER\"]'),
(2, 'admin@gmail.com', '$2y$13$l6UynHcuPrcM7w/t2t5BS.dyho.6FJqOK/U27detz3DwM.YKZViZK', 'admin', 'admin', NULL, '[\"ROLE_ADMIN\"]'),
(3, 'nourbentardeit@gmail.com', '$2y$13$UZVFefikfg7Y8O0.1VDfY.kB4qfYQmYYpSqoZI7IQClflNnh3eu2y', 'nour', 'bentardeit', NULL, '[\"ROLE_USER\"]'),
(4, 'admina@gmail.com', '$2y$13$VskU0fTDRSOyD2cI9PcyJ.i49p2XpHKrbOcUtN0oZOaA10FN3uRaK', 'admian', 'admina', NULL, '[\"ROLE_ADMIN\"]'),
(6, 'nour@gmail.com', '$2y$13$zcrmC/7dU6Jxgloi9Uoy4e84ysUZyAIGL7vnO/4/BfWlhcUkJ3xxe', 'nour', 'nourbentardeit', NULL, '[\"ROLE_ADMIN\"]'),
(7, 'asma@gmail.com', '$2y$13$al7BIbH.R6LEnH2u5NAd8OFCQ56/H5Ro85yj7Vfj63QWE/mtV07kG', 'asm', 'asma', NULL, '[\"ROLE_USER\"]'),
(9, 'imed@gmail.ccom', '$2y$13$Mq.lZF9rf82UYcY855K.MedXbtzxEmGxr2CUE.fndjp6Lm1T8W/wK', 'imed', 'brahmi', NULL, '[\"ROLE_USER\"]'),
(11, 'wajih@gmail.com', '$2y$13$Zdpp8J6cSom0yxfRv5o.dO4n7EznQQ/qgV3YTvlJxZVdDrc8wqVJW', 'wajih', 'wajih', NULL, '[\"ROLE_ADMIN\"]'),
(12, 'bentardeit.sarra2000@gmail.com', '$2y$13$VD5Zk9dkskYo8UCbPlCO..tTOTWy.FIcroi3.9xu71z5lbdhiBPBC', 'ben tardeit', 'sarra', NULL, '[\"ROLE_USER\"]'),
(14, 'sarra@gmail.com', '$2y$13$KZkK/mtzqM6rmVFR82MxzeK/cgEQZxDKRlA2s0WIVb8rZgRW0nfAq', 'sarra', 'ben tardeit', NULL, '[\"ROLE_ADMIN\"]'),
(15, 'nada@gmail.com', 'nada123', 'nada', 'nada', '92231211', '[]'),
(16, 'ahmed@gmail.com', '$2y$13$Qi/ztNRbHXp1ebICVueGFuVmMdw.hNmxQ8lXBaxwpRMvUbnD3qBP.', 'ahmed', 'arfaoui', NULL, '[]'),
(18, 'khouloud@gmail.com', '$2y$13$OjJSOJBFszv/Qb2dPGyZGu4G/WcfaCKcKzQJpWMrHYE2bZGEhLyga', 'khouloud', 'ben tardeit', NULL, '[]'),
(19, 'ahlem@gmail.com', '$2y$13$oQp3qjJgcjoQIUXAk536K.eGj/tfETbPdyKUOLPlyxnzwuS8ZSsyO', 'ahlem', 'beou', 'ahlem@gmail.com', '[\"ROLE_USER\"]'),
(20, 'rihem@gmail.com', '$2y$13$PFbzJ6iDLksGI2JZWiMLR.YD6kXBq1HioKI2x50NTgUXjukDn.HE6', 'riehem', 'taktak', NULL, '[\"ROLE_USER\"]'),
(21, 'admin22@gmail.com', '$2y$13$cldcxIJ5A/laImFcVgxUNuhZL3gUS4Q4rrpIturaRq8vPfBdqa4jS', 'ahmed', 'ben tardeit', NULL, '[\"ROLE_ADMIN\"]');

-- --------------------------------------------------------

--
-- Structure de la table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `proprietaire_id` int(11) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `motorisation` varchar(255) NOT NULL,
  `immatriculation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vehicle`
--

INSERT INTO `vehicle` (`id`, `proprietaire_id`, `marque`, `modele`, `motorisation`, `immatriculation`) VALUES
(1, 1, 'hdii', 'hsj', 'jhs', 'js'),
(2, 12, 'kia', 'ss', 'essence', '123456'),
(3, 12, 'kia', 'rio', 'essence', '123455454'),
(5, 12, 'bmw', 'x5', 'essence', '12354'),
(6, 12, 'mama', 'mama', 'mama', '12354'),
(7, 12, 'ee', 'zz', 'zz', '12354'),
(9, 20, 'kia', 'rioa', 'essence', '123456'),
(10, 19, 'hunda', 'i10', 'essence', '1235678');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FE38F84419EB6921` (`client_id`),
  ADD KEY `IDX_FE38F8444A4A3511` (`vehicule_id`);

--
-- Index pour la table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F0FE25274584665A` (`product_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_100285584827B9B2` (`marque_id`);

--
-- Index pour la table `modele_motorisations`
--
ALTER TABLE `modele_motorisations`
  ADD PRIMARY KEY (`modele_id`,`motorisation_id`),
  ADD KEY `IDX_2AC7A3CAC14B70A` (`modele_id`),
  ADD KEY `IDX_2AC7A3CA3B5A725` (`motorisation_id`);

--
-- Index pour la table `motorisation`
--
ALTER TABLE `motorisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F529939819EB6921` (`client_id`);

--
-- Index pour la table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `IDX_5242B8EB8D9F6D38` (`order_id`),
  ADD KEY `IDX_5242B8EB4584665A` (`product_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`),
  ADD KEY `IDX_D34A04ADF7BFE87C` (`sub_category_id`);

--
-- Index pour la table `product_motorisation`
--
ALTER TABLE `product_motorisation`
  ADD PRIMARY KEY (`product_id`,`motorisation_id`),
  ADD KEY `IDX_CD53C2914584665A` (`product_id`),
  ADD KEY `IDX_CD53C291A3B5A725` (`motorisation_id`);

--
-- Index pour la table `stock_movement`
--
ALTER TABLE `stock_movement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BB1BC1B5F347EFB` (`produit_id`);

--
-- Index pour la table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BCE3F79812469DE2` (`category_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Index pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1B80E48676C50E4A` (`proprietaire_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `modele`
--
ALTER TABLE `modele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `motorisation`
--
ALTER TABLE `motorisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `stock_movement`
--
ALTER TABLE `stock_movement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `FK_FE38F84419EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_FE38F8444A4A3511` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicle` (`id`);

--
-- Contraintes pour la table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `FK_F0FE25274584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `modele`
--
ALTER TABLE `modele`
  ADD CONSTRAINT `FK_100285584827B9B2` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`id`);

--
-- Contraintes pour la table `modele_motorisations`
--
ALTER TABLE `modele_motorisations`
  ADD CONSTRAINT `FK_2AC7A3CA3B5A725` FOREIGN KEY (`motorisation_id`) REFERENCES `motorisation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2AC7A3CAC14B70A` FOREIGN KEY (`modele_id`) REFERENCES `modele` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_F529939819EB6921` FOREIGN KEY (`client_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `FK_5242B8EB4584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5242B8EB8D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_D34A04ADF7BFE87C` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`);

--
-- Contraintes pour la table `product_motorisation`
--
ALTER TABLE `product_motorisation`
  ADD CONSTRAINT `FK_CD53C2914584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CD53C291A3B5A725` FOREIGN KEY (`motorisation_id`) REFERENCES `motorisation` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `stock_movement`
--
ALTER TABLE `stock_movement`
  ADD CONSTRAINT `FK_BB1BC1B5F347EFB` FOREIGN KEY (`produit_id`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `FK_BCE3F79812469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `FK_1B80E48676C50E4A` FOREIGN KEY (`proprietaire_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
