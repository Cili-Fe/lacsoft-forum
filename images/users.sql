-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 13 fév. 2021 à 15:35
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
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'cc', 'cvcc', 'cc@gmail.com', '123'),
(2, 'vvv', 'vv', 'vv@gmail.com', '456'),
(3, 'feli', 'cc', 'fer@gmail.com', '$2y$12$ottGvJEtcWbiHPKtcaD.QeJh4mMCqonKp0DPhetCyLIf6NmuWZkWW'),
(4, 'gg', 'ggf', 'gg@gmail.com', '$2y$12$a7uhISCr120m8p4ApGbdiOaytLPEZUcET3OzS2vQ.Vw16r8RTx6ye'),
(5, 'tt', 'ttt', 'tt@gmail.com', '$2y$12$ICeC2lrTi7zzsrUF9sq3T.obpBTVRYR1OYdO2SVRbiWxIX3NQxu8K'),
(6, 'xx', 'xxx', 'xx@gmail.com', '$2y$12$LE/rUV22dj2UYAe2sVBgTePXkxd43B4uiHXmOWIyU25sWLNzTvLNO'),
(7, 'tg', 'tgh', 'tgh@gmail.com', '$2y$12$wlaE.ZXrtKkZpsMnnz4knu2vNGh9q7301cfdLUGkkvokU.aP3pYW6'),
(8, 'feli', 'felie', 'feli@gmail.com', '$2y$12$7IjiwUCkGI1/97/KImUNzubcqDX4D0VeCqjPBHPqr4WVtHyO/46xS'),
(9, 'ff', 'ee', 'bb@gmail.com', '$2y$12$iSxbMWXELEn3snMejrPzY.lkP8CU0M/HHCUYVOrD8qBBN7g0tYrYG'),
(10, 'gg', 'hh', 'nn@gmail.com', '$2y$12$ATeGPoKIPZcPniwLi8T3T.xz/olL4v..bDlKYpR5lTLeQ5Rji6D1u'),
(11, 'ggdd', 'ddd', 'dedfrgt@gmail.com', '$2y$12$mVtSDMVuxQHbeKgZow0lC.C9LNBhFGfXr5J5cfBHTkUGozWFMrHRq'),
(12, 'gg', 'dfe', 'hg@mail.com', '$2y$12$JCr98guDBl4XNVbNrm.oY.jRESUprNYLig7wOFtX.ZvDJz6AUH6IS'),
(13, 'hg', 'hg', 'hg@gamil.com', '$2y$12$jQP1rb8ikXvS0FKzD2w.cuMbp15iPNq.mp2TzRnfwWHmnPcOddy3G'),
(14, 'gu', 'dftg', 'fgh@gmail.com', '$2y$12$Z6HugI8xzBuH6O10GS7PR.iYuWJ16oOK7pyrKzBevoJbHXsRwrw7a'),
(15, 'zou', 'davy', 'bague@gmail.com', '$2y$12$JNBrLIb2XzImVxgfZvoTUu4g0KYlm6DpRlhn5bYDf9Z8u41TXSOhS'),
(16, 'Bagué', 'Anasse', 'g@hotmail.com', '$2y$12$veh1miDd086yX5qSvL.dbO5EeQYUVKJEK9tWZQmJ1sHlEhs0PHHLq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
