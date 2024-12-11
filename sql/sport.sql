

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `activites` (
  `id_activite` int(11) NOT NULL,
  `nom_activite` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `capacite` int(11) DEFAULT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `disponibilite` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `member` (`id`, `nom`, `prenom`, `email`, `telephone`) VALUES
(15, 'Est dolorum molesti', 'Neque natus officia ', 'hacariti@mailinator.com', 'Adrienne'),
(17, 'Quos placeat aut cu', 'Nostrum cumque delec', 'roze@mailinator.com', 'Carissa'),
(19, 'Molestiae labore dol', 'Dolores eiusmod ut e', 'buboko@mailinator.com', 'Rajah'),
(20, 'Ex magni praesentium', 'Adipisci rerum solut', 'fetol@mailinator.com', 'Illana');





CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `id_member` int(11) DEFAULT NULL,
  `date_reservation` datetime DEFAULT NULL,
  `statut` enum('confirme','annulee') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `activites`
  ADD PRIMARY KEY (`id_activite`);

ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `nn`
  ADD PRIMARY KEY (`id_activite`);

ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);


ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;


