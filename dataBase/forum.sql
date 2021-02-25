-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 fév. 2021 à 20:01
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `categories` varchar(40) NOT NULL,
  `technos` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `id_pub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `categories` varchar(40) NOT NULL,
  `technos` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `id_comment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id`, `nom`, `prenom`, `categories`, `technos`, `message`, `date`, `id_comment`) VALUES
(1, 'ouedra', 'FARA', 'BACKEND', 'PYTHON', 'SARE', '2021-02-24 16:24:47', 0),
(2, 'ouedra', 'FARA', 'BACKEND', 'PYTHON', 'SARE', '2021-02-24 16:24:48', 0),
(3, 'OUIYA', 'Ismael', 'BACKEND', 'PHP', 'XAVA', '2021-02-24 16:25:06', 0),
(4, 'OUIYA', 'Ismael', 'BACKEND', 'SPRING BOOT', 'Spring boot est génial', '2021-02-24 16:36:06', 0),
(5, 'OUIYA', 'Ismael', 'BACKEND', 'PHP', 'sss', '2021-02-24 16:53:24', 0),
(6, 'OUIYA', 'Ismael', 'BACKEND', 'PHP', 'sss', '2021-02-24 16:53:25', 0),
(7, 'OUIYA', 'Ismael', 'BACKEND', 'PHP', 'sss', '2021-02-24 16:53:25', 0),
(8, 'OUIYA', 'Ismael', 'BACKEND', 'PHP', 'sss', '2021-02-24 16:53:25', 0),
(9, 'OUIYA', 'Ismael', 'BACKEND', 'PHP', 'sss', '2021-02-24 16:53:26', 0),
(10, 'OUIYA', 'Ismael', 'BACKEND', 'PHP', 'sss', '2021-02-24 16:53:26', 0),
(11, 'OUIYA', 'Ismael', 'BACKEND', 'PHP', 'sss', '2021-02-24 16:53:26', 0),
(12, 'ouedra', 'Ismael', 'FRONTEND', 'JAVASCRIPT', 'ver', '2021-02-24 16:56:19', 0),
(13, 'ouedra', 'Ismael', 'FRONTEND', 'JAVASCRIPT', 'ver', '2021-02-24 16:56:20', 0),
(14, 'ouedra', 'Ismael', 'FRONTEND', 'JAVASCRIPT', 'ver', '2021-02-24 16:57:48', 0),
(15, 'OUEDRA', 'AIME', 'BACKEND', 'C++', 'C\'est très super!', '2021-02-24 17:22:33', 0),
(16, 'OUEDRA', 'AIME', 'BACKEND', 'C++', 'C\'est très super!', '2021-02-24 17:22:33', 0),
(17, 'OUEDRA', 'AIME', 'BACKEND', 'C++', 'C\'est très super!', '2021-02-24 17:22:55', 0),
(18, 'GUIGMA', 'Alain', 'FRONTEND', 'HTML5', 'Comment trouves-tu HTML5 ?', '2021-02-24 17:31:34', 0),
(19, 'GUIGMA', 'Alain', 'FRONTEND', 'HTML5', 'Comment trouves-tu HTML5 ?', '2021-02-24 17:31:34', 0),
(20, 'OUEDRAOGO', 'Victorien', 'BACKEND', 'JAVA', 'JAVA c\'est la vie', '2021-02-25 00:19:01', 0),
(21, 'NANA', 'Abdoul Razack', 'BACKEND', 'PYTHON', 'Intelligence artificielle', '2021-02-25 00:23:20', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(2, 'wiyasftgyh', 'ismayuijk', 'isma@gmail.com', '$2y$12$K7B1vxpyq4TvkVnVO.z2k.xGzIPODymkU6s2qWLZfgTaCJT40ADi2'),
(3, 'Felifgy', 'felicia', 'kfeli@gmail.com', '$2y$12$netwwek05tsDcCYsKcughek6k1rBWTNI/mQTBKjmNtSzeRRHspmLW'),
(4, 'dcgfvhb', 'dfg', 'fgvhb@gmail.com', '$2y$12$sx3uZaPXDLm5Rl8gEkuMredxVNpjFf3TAGFa3M2Z7MrmvBhL9kWAa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
