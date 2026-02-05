-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 05 fév. 2026 à 14:41
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
-- Base de données : `audelanding`
--

-- --------------------------------------------------------

--
-- Structure de la table `aude_cities`
--

CREATE TABLE `aude_cities` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `zip_code` varchar(5) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `aude_cities`
--

INSERT INTO `aude_cities` (`id`, `slug`, `display_name`, `zip_code`, `description`, `image`) VALUES
(1, 'argeliers', 'Argeliers', '11120', 'Berceau de la révolte des vignerons de 1907.', 'argeliers.jpg'),
(2, 'bram', 'Bram', '11150', 'Plus grande ville circulaire (circulade) d\'Europe.', 'bram.jpg'),
(3, 'carcassonne', 'Carcassonne', '11000', 'Célèbre pour sa cité médiévale et son festival.', 'carcassonne.jpg'),
(4, 'castelnaudary', 'Castelnaudary', '11400', 'Capitale mondiale du cassoulet et port du Canal du Midi.', 'castelnaudary.jpg'),
(5, 'conques-sur-orbiel', 'Conques-sur-Orbiel', '11600', 'Village historique situé au nord de Carcassonne.', 'conques-sur-orbiel.jpg'),
(6, 'coursan', 'Coursan', '11110', 'Ancienne villa gallo-romaine au bord de l\'Aude.', 'coursan.jpg'),
(7, 'cuxac-d-aude', 'Cuxac-d\'Aude', '11590', 'Village de plaine au patrimoine riche.', 'cuxacdaude.jpg'),
(8, 'esperaza', 'Espéraza', '11260', 'Célèbre pour son musée des dinosaures et son marché.', 'esperaza.jpg'),
(9, 'fleury-d-aude', 'Fleury-d\'Aude', '11560', 'Commune entre massif de la Clape et Méditerranée.', 'fleurydaude.jpg'),
(10, 'gruissan', 'Gruissan', '11430', 'Station balnéaire connue pour ses chalets sur pilotis.', 'gruissan.jpg'),
(11, 'la-palme', 'La Palme', '11480', 'Village entre étangs et salins.', 'la-palme.jpg'),
(12, 'leucate', 'Leucate', '11370', 'Haut lieu du kitesurf et de la glisse.', 'leucate.jpg'),
(13, 'lezignan-corbieres', 'Lézignan-Corbières', '11200', 'Capitale des Corbières et ville de tradition viticole.', 'lezignan-corbieres.jpg'),
(14, 'limoux', 'Limoux', '11300', 'Ville de la Blanquette et du plus long carnaval du monde.', 'limoux.jpg'),
(15, 'montreal', 'Montréal', '11290', 'Ancienne collégiale dominant la plaine de la Malepère.', 'montreal.jpg'),
(16, 'narbonne', 'Narbonne', '11100', 'Ville d\'art et d\'histoire, première colonie romaine.', 'narbonne.jpg'),
(17, 'ouveillan', 'Ouveillan', '11590', 'Village dominant la plaine narbonnaise.', 'ouveillan.jpg'),
(18, 'palaja', 'Palaja', '11570', 'Village paisible niché dans la pinède.', 'palaja.jpg'),
(19, 'pennautier', 'Pennautier', '11610', 'Connu pour son château surnommé le petit Versailles.', 'pennautier.jpg'),
(20, 'port-la-nouvelle', 'Port-la-Nouvelle', '11210', 'Port de commerce et longue plage de sable fin.', 'port-la-nouvelle.jpg'),
(21, 'quillan', 'Quillan', '11500', 'Au pied des Pyrénées, idéal pour les sports d\'eaux vives.', 'quillan.jpg'),
(22, 'salleles-d-aude', 'Sallèles-d\'Aude', '11590', 'Village carrefour des trois canaux.', 'sallelesdaude.jpg'),
(23, 'salles-d-aude', 'Salles-d\'Aude', '11110', 'Village viticole au cœur du massif de la Clape.', 'sallesdaude.jpg'),
(24, 'sigean', 'Sigean', '11130', 'Réputée pour sa réserve africaine unique.', 'sigean.jpg'),
(25, 'trebes', 'Trèbes', '11800', 'Port fluvial dynamique sur le Canal du Midi.', 'trebes.jpg'),
(26, 'villegailhenc', 'Villegailhenc', '11600', 'Village de la vallée de l\'Orbiel.', 'villegailhenc.jpg'),
(27, 'villemoustaussou', 'Villemoustaussou', '11620', 'Commune dynamique limitrophe de Carcassonne.', 'villemoustaussou.jpg'),
(28, 'vinassan', 'Vinassan', '11110', 'Village typique au pied de la montagne de la Clape.', 'vinassan.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `aude_cities`
--
ALTER TABLE `aude_cities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `aude_cities`
--
ALTER TABLE `aude_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
