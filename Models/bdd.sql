-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Dim 24 Décembre 2017 à 15:22
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Ydays`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `mail`, `password`) VALUES
(1, 'admin@admin.fr', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `glasses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`id`, `ref`, `user_id`, `glasses_id`) VALUES
(1, 'test1', 1, 11);

-- --------------------------------------------------------

--
-- Structure de la table `glasses`
--

CREATE TABLE `glasses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `glasses`
--

INSERT INTO `glasses` (`id`, `name`, `marque`, `price`, `size`, `type`, `ref`, `sexe`, `image`) VALUES
(2, 'Pilote', 'RayBan', '150', '10', 'Solaire', 'RB1345', 'Homme', ''),
(3, 'Pilote', 'RayBan', '150', '10', 'Solaire', 'RB1345', 'Homme', ''),
(4, 'Pilote', 'RayBan', '150', '10', 'Solaire', 'RB1345', 'Homme', ''),
(8, 'hh', 'h', 'h', 'h', 'Solaire', 'hh', 'Femme', ''),
(9, 'tt', 't', 't', 't', 'Solaire', 'tt', 'Homme', ''),
(10, 'tet', 't', 't', 't', 'Solaire', 'ytt', 'Femme', 'Views/images/upload/12291712_1693889184212303_23729183212508149_o.jpg'),
(11, 'test1', 't', 'r', 'e', 'Solaire', '1456789', 'Mixte', 'Views/images/upload/12291712_1693889184212303_23729183212508149_o (1).jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `mail`, `password`, `street`, `zip_code`, `city`, `country`, `phone`) VALUES
(1, 'Bill', 'Gate', 'b@b.fr', '$2a$07$302838711915bef2db65cOvA0sPu..ni2bSXouy62nYC87SNrHt0q', '15-17 RUE LOUIS BLANC', '75020', 'PARIS ', 'France', '06128767677'),
(2, 'tes', 'tes', 't', '$2a$07$302838711915bef2db65cOVl78FpEwYHlFGRuCaamrZGzTy0KCUK.', 't', 'r', 'r', 'r', '234'),
(3, 'tet', 't', 't', '$2a$07$302838711915bef2db65cOVl78FpEwYHlFGRuCaamrZGzTy0KCUK.', 't', 't', 't', 't', '11');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `glasses_id` (`glasses_id`);

--
-- Index pour la table `glasses`
--
ALTER TABLE `glasses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `glasses`
--
ALTER TABLE `glasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;