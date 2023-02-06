-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 10 jan. 2023 à 11:23
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID_A` varchar(11) NOT NULL,
  `mdp_A` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID_A`, `mdp_A`) VALUES
('12345', 'Sitd'),
('Sitd', 'Sitd');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `Id_C` int(11) NOT NULL,
  `Email_C` varchar(50) NOT NULL,
  `Nom_C` varchar(30) NOT NULL,
  `Tele_C` int(11) NOT NULL,
  `Mdp_C` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`Id_C`, `Email_C`, `Nom_C`, `Tele_C`, `Mdp_C`) VALUES
(75, 'rajawi2001@gmail.com', 'bennani', 630615203, 'raja1949'),
(155, 'bennani.fst@uhp.ac.ma', 'Bennani ELmehdi', 630615103, '12345');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `ID_CO` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `dateco` date NOT NULL,
  `prix_f` float NOT NULL,
  `ID_P` int(11) NOT NULL,
  `ID_C` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`ID_CO`, `quantite`, `dateco`, `prix_f`, `ID_P`, `ID_C`) VALUES
(26, 0, '2023-01-10', 26, 13, 75),
(27, 0, '2023-01-10', 26, 13, 75);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `Id_P` int(11) NOT NULL,
  `Nom_P` varchar(30) NOT NULL,
  `Prix_P` float NOT NULL,
  `Description_P` text NOT NULL,
  `Image_P` text NOT NULL,
  `prix_PF` int(11) NOT NULL,
  `Couleur` varchar(50) NOT NULL,
  `Shipping` enum('free','purshase') NOT NULL,
  `available` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`Id_P`, `Nom_P`, `Prix_P`, `Description_P`, `Image_P`, `prix_PF`, `Couleur`, `Shipping`, `available`) VALUES
(13, 'TWS Écouteurs', 26, 'Edifier X2 TWS Écouteurs Écouteurs sans fil Bluetooth 5.1 Assistant vocal Pilote 13 mm Contrôle tactile Jusqu\'à 28 heures de jeu Mode de jeu', '3.jpg', 0, 'white', 'free', 'yes'),
(14, ' Casque Sans Fil', 22, 'Écouteurs magnétiquesHaute qualité sonoreRésistance aux éclaboussures et à la sueur', '1.jpg', 0, 'white', 'free', 'No'),
(15, 'Jvc Ecouteurs sport', 28, '\nCes écouteurs clip sport JVC HA-EBR25 aux lignes épurées sont dotés d\'une commande à distance d\'un bouton et d\'un microphone pour une utilisation en mains libres optimale durant toutes vos séances sportives', '3.jpg', 0, 'white', 'free', 'No'),
(16, 'realme Narzo 50A', 45, 'e realme narzo 50A apporte la caméra 50MP pour la première fois dans le segment. Doté d\'un objectif macro 2MP et d\'un objectif portrait aux côtés de l\'appareil photo principal 50MP, le realme narzo 50A est entièrement équipé pour vous offrir une expérience photographique polyvalente et époustouflante.', '4.jpg', 0, 'red', 'free', 'Yes'),
(24, 'XIAOMI Redmi 9A 6.53', 228, 'Une faible lumière bleue pour une expérience visuelle confortable\r\n\r\nAvec la certification de protection contre la lumière bleue, vos yeux seront préservés,même après avoir passé de longues heures au téléphone', '6.jpg', 0, 'white', 'free', 'Yes'),
(25, 'Huawei Y5P 5.45', 98, 'HUAWEI Y5p offre 32 Go de stockage en mémoire et une conception à 3 emplacements pouvant accueillir 2 cartes nano SIM et une carte SD (jusqu&#039;à 512 Go), offrant amplement d&#039;espace pour vos applications, photos et vidéos. Vous pouvez stocker tout ce dont vous avez besoin dans un téléphone pratique et être prêt à partir à l&#039;aventure.', '7.jpg', 0, 'black', 'free', 'Yes'),
(27, 'Montre connectée ', 45, 'Rappel sédentaire: il est temps de bouger et de changer votre mode de vie. Moniteur de sommeil: enregistrez et analysez votre état de sommeil scientifiquement et quantitativement', '9.jpg', 0, 'white', 'free', 'Yes'),
(28, 'Huawei Band 4e', 78, 'En portant le bracelet écologique et léger à votre poignet, il vous sera proposé un suivi d&#039; activité , une surveillance du sommeil et des fonctionnalités plus intelligentes pour vous faciliter la vie', '10.jpg', 0, 'black', 'free', 'Yes'),
(29, 'Huawei FreeBuds 4', 20, 'Retrouvez tout le savoir-faire HUAWEI dans le design exceptionnel des HUAWEI FreeBuds 4i. Avec un boitier de forme ovale tombant parfaitement dans la paume de votre main et des écouteurs aux finitions sublimes, ils sauront parfaitement s&#039;adapter à votre style jour après jour.', '11.jpg', 0, 'black', 'free', 'Yes'),
(31, 'MARS GAMING Lunettes Réalité', 15, 'Applications de Réalité Virtuelle En tapant &#039;VR&#039; sur le Playstore/Appstore vous pourrez télécharger les différentes apps compatibles avec le casque.\r\nAvec cet accessoire vous allez jouer de manière active à des jeux, en tournant la tête ou en bougeant il sera possible de découvrir l&#039;univers virtuel qui vous entoure', '13.jpg', 0, 'white', 'free', 'Yes');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_A`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Id_C`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`ID_CO`),
  ADD KEY `fk_name` (`ID_P`),
  ADD KEY `fk_name1` (`ID_C`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`Id_P`),
  ADD UNIQUE KEY `prix_O` (`Id_P`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `Id_C` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `ID_CO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `Id_P` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_name` FOREIGN KEY (`ID_P`) REFERENCES `produits` (`id_P`),
  ADD CONSTRAINT `fk_name1` FOREIGN KEY (`ID_C`) REFERENCES `clients` (`id_C`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
