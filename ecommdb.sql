-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 fév. 2021 à 22:15
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
-- Base de données : `ecommdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `basket`
--

CREATE TABLE `basket` (
  `basket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delivery_city` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

CREATE TABLE `messages` (
  `id_message` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `keyo` text NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` text NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `keyo`, `price`, `photo`, `quantity`, `size`, `sub_category_id`, `description`) VALUES
(10101010, 0, 'clothes ', 'men, clothes, clothings', 49.99, 'images/t-shirt-1426871.jpeg', 100, 'S', 0, ''),
(90909090, 0, 'shoes', 'men, shoes', 99.99, 'images/sh1.jpeg', 100, '', 0, ''),
(121212121, 0, 'shoes', 'men, shoes', 99.99, 'images/shoes-1415245.jpeg', 100, '', 0, ''),
(123456789, 0, 'dress', 'dress, women, clothes, clothings', 99.99, 'images\\jose-martinez-Q76SMw8HVYk-unsplash.jpg', 3, '', 0, ''),
(132333121, 0, 'shoes', 'men, shoes', 29.99, 'images/sh6.jfif', 100, '', 0, ''),
(192837465, 0, 'short dress ', 'dress, women, clothes, clothings, pink', 299.99, 'images/kate-skumen-PJRabkuH3_Q-unsplash.jpg', 90, '', 0, ''),
(199191919, 0, 'shoes', 'men, shoes', 49.99, 'images/sh7.jfif', 100, '', 0, ''),
(321651237, 0, 'clothes ', 'men, clothes, clothings', 299.99, 'images/9.jfif', 100, '', 0, ''),
(324553598, 0, 'clothes ', 'men, clothes, clothings', 99.99, 'images/3.jpeg', 100, '', 0, ''),
(432411399, 0, 'clothes ', 'dress, women, clothes, clothings', 49.99, 'images/laura-chouette-aOuI0VEuBS8-unsplash.jpg', 100, '', 0, ''),
(434134132, 0, 'shoes', 'men, shoes', 49.99, 'images/sh6.jfif', 100, '', 0, ''),
(454554545, 0, 'shoes', 'men, shoes', 129.99, 'images/shoclow.jpeg', 100, '', 0, ''),
(542487123, 0, 'shoes type C', 'women, shoes', 299.99, 'images/WhatsApp Image 2020-12-31 at 00.43.32 (1).jpeg', 100, '', 0, ''),
(543216767, 0, 'shoes type B', 'women, shoes', 49.99, 'images/WhatsApp Image 2020-12-31 at 00.44.36.jpeg', 30, '', 0, ''),
(546372819, 0, 'long dress', 'dress, women, clothes, clothings, black', 129.99, 'images/valerie-elash-gsKdPcIyeGg-unsplash.jpg', 1, '', 0, ''),
(558764466, 0, 'clothes ', 'dress, women, clothes, clothings', 99.99, 'images/kate-skumen-PJRabkuH3_Q-unsplash (1).jpg', 100, '', 0, ''),
(567567567, 0, 'shoes', 'men, shoes', 99.99, 'images/man-s-legs-in-boots-1-1435635.jpeg', 100, '', 0, ''),
(576575657, 0, 'shoes', 'men, shoes', 99.99, 'images/sh5.jfif', 100, '', 0, ''),
(578732312, 0, 'shoes type A', 'women, shoes', 99.99, 'images/WhatsApp Image 2020-12-31 at 00.43.32.jpeg', 90, '', 0, ''),
(636363687, 0, 'dress', 'dress, women, clothes, clothings', 129.99, 'images/valerie-elash-gsKdPcIyeGg-unsplash.jpg', 100, '', 0, ''),
(645837093, 0, 'shoes', 'women, shoes', 299.99, 'images/WhatsApp Image 2020-12-31 at 00.43.32.jpeg', 100, '', 0, ''),
(674653846, 0, 'shoes', 'men, shoes', 99.99, 'images/sh7.jfif', 100, '', 0, ''),
(717171455, 0, 'clothes ', 'men, clothes, clothings', 99.99, 'images/7.jpeg', 100, '', 0, ''),
(738383123, 0, 'clothes ', 'dress, women, clothes, clothings', 49.99, 'images/laura-chouette-lyogsIO8cHE-unsplash.jpg', 100, '', 0, ''),
(746980645, 0, 'shoes', 'women, shoes', 129.99, 'images/WhatsApp Image 2020-12-31 at 00.43.32 (1).jpeg', 100, '', 0, ''),
(838383838, 0, 'clothes ', 'dress, women, clothes, clothings', 299.99, 'images/laura-chouette-aOuI0VEuBS8-unsplash.jpg', 100, '', 0, ''),
(983983993, 0, 'shoes', 'women, shoes', 99.99, 'images/WhatsApp Image 2020-12-31 at 00.43.33 (1).jpeg', 100, '', 0, ''),
(987654321, 0, 'long dress', 'dress, women, clothes, clothings, yellow', 49.99, 'images/nikhil-uttam-QrOdhsMAQw8-unsplash.jpg', 10, '', 0, ''),
(989078969, 0, 'clothes ', 'men, clothes, clothings', 299.99, 'images/11.jfif', 100, '', 0, ''),
(1532734534, 0, 'clothes ', 'men, clothes, clothings', 99.99, 'images/8.jfif', 100, '', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `sub_category_id` int(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `category_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `privilege` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `address`, `contact`, `username`, `privilege`) VALUES
(1, 'admin@mail.com', 'admin', '', '1234567890', '', ''),
(2, 'user1@mail.com', 'user1', '', '1234567890', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`basket_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `basket`
--
ALTER TABLE `basket`
  MODIFY `basket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `sub_category_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
