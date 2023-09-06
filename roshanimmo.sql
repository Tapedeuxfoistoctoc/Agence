-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 09 août 2023 à 13:00
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `roshanimmo`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacrequest`
--

DROP TABLE IF EXISTS `contacrequest`;
CREATE TABLE IF NOT EXISTS `contacrequest` (
  `request_id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contacrequest`
--

INSERT INTO `contacrequest` (`request_id`, `property_id`, `name`, `email`) VALUES
(1, 0, '(1, 1, \'John\', \'john@example.com\'),\r\n(2, 2, \'Jane\', \'jane@example.com\');', '');

-- --------------------------------------------------------

--
-- Structure de la table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `property_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `properties`
--

INSERT INTO `properties` (`property_id`, `title`) VALUES
(1, '(1, \'Villa de Luxe\'),\r\n(2, \'Appartement 3P\');');

-- --------------------------------------------------------

--
-- Structure de la table `propertydetails`
--

DROP TABLE IF EXISTS `propertydetails`;
CREATE TABLE IF NOT EXISTS `propertydetails` (
  `property_id` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `bedrooms` int NOT NULL,
  `bathrooms` int NOT NULL,
  `area` int NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `propertydetails`
--

INSERT INTO `propertydetails` (`property_id`, `price`, `bedrooms`, `bathrooms`, `area`) VALUES
(1, '0.00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `propertyimages`
--

DROP TABLE IF EXISTS `propertyimages`;
CREATE TABLE IF NOT EXISTS `propertyimages` (
  `property_id` int NOT NULL,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `propertyimages`
--

INSERT INTO `propertyimages` (`property_id`, `image_url`) VALUES
(0, '(1, \'img1.jpg\'),\r\n(1, \'img2.jpg\'),\r\n(2, \'img3.jpg\');');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
