-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Ven 15 Décembre 2017 à 14:00
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
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `glasses`
--

INSERT INTO `glasses` (`id`, `name`, `marque`, `price`, `size`, `type`, `ref`, `sexe`, `image`) VALUES
(1, 'test', 't', 't', 't', 't', 't', 't', ''),
(2, 'Pilote', 'RayBan', '150', '10', 'Solaire', 'RB1345', 'Homme', ''),
(3, 'Pilote', 'RayBan', '150', '10', 'Solaire', 'RB1345', 'Homme', ''),
(4, 'Pilote', 'RayBan', '150', '10', 'Solaire', 'RB1345', 'Homme', ''),
(5, 't', 't', 't', 't', 'Mixte', 'tt', 'tt', ''),
(6, 't', 't', 't', 't', 'Mixte', 'tt', 'tt', ''),
(7, 't', 't', 't', 't', 'Mixte', 'tt', 'tt', '');

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
(1, 'Bill', 'gate', 'b@b.fr', '$2a$07$302838711915bef2db65cO0u1RrG1.8x9wubJNk6RQGUQVbYY8iD2', '15-17 RUE LOUIS BLANC', '75010', 'PARIS ', 'France', '06128767677');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `glasses`
--
ALTER TABLE `glasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;