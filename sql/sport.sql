

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
) 





CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL
) 





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

  FOREIGN KEY (id_membre) REFERENCES membres(id), 
  FOREIGN KEY (id_activite) REFERENCES activites(id),
) 





INSERT INTO membres (nom, prenom, email, telephone, )
VALUES ('John ', 'Doe','john.doe@example.com', '1234567890');

INSERT INTO activites (nom, description)
VALUES ('Yoga', 'Cours de yoga pour tous les niveaux');

INSERT INTO reservation (id_membre, id_reservation,  date_reservation, statut)
VALUES (1, 1,'2024-12-01 10:00:00', 'confirmée');




UPDATE membre
SET nom= 'Jhon'
WHERE id = 1;



DELETE FROM membre
WHERE id = 1;



SELECT membre.nom AS nom, activites.nom AS nom_activite, reservation.date_reservation, reservation.statut
FROM reservation
JOIN member ON reservation.id_membre = member.id
JOIN activites ON reservation.id_activite = activites.id;







