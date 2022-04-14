  create table users(
    id_user int primary key auto_increment,
    nom_user varchar(30) not null,
    prenom_user varchar(30) not null,
    naissance_user date not null,
    photo_user varchar(30) not null,
    email_user varchar(30) not null,
    motdepasse varchar(30) not null,
    telephone int not null
  );

  create table materiel (
    id_materiel int primary key auto_increment ,
    nom_materiel varchar(200) not null,
    quantite_materiel int(200) not null,
    matricule_materiel varchar(200) not null,
    poids_materiel double not null,
    description_materiel text not null
  );

  create table produit (
    id_produit int primary key auto_increment,
    nom_produit varchar(200) not null,
    quantite_produit int(200) not null,
    matricule_produit varchar(200) not null,
    poids_produit double not null,
    description_produit text not null
  );

  CREATE TABLE  personnel (
  id_personnel int PRIMARY KEY auto_increment,
  matricule varchar(50) NOT NULL,
  nom_personnel varchar(50) NOT NULL,
  prenom_personnel varchar(100) NOT NULL,
  naissance_personnel date NOT NULL,
  date_embauche date NOT NULL,
  genre varchar(50) NOT NULL,
  nationalite varchar(50) NOT NULL,
  email_personnel varchar(50) NOT NULL,
  type_personnel varchar(50) NOT NULL,
  salaire_personnel double NOT NULL,
  photo_personnel varchar(50) NOT NULL,
  tel_personnel int NOT NULL,
  situation varchar(50) NOT NULL,
  enfant varchar(50) NOT NULL
  ) ;

CREATE TABLE  fournisseur (
  id_fournisseur int NOT NULL  PRIMARY KEY AUTO_INCREMENT,
  nom_fournisseur varchar(50) NOT NULL,
  tel_fournisseur int NOT NULL,
  email_fournisseur varchar(50) NOT NULL,
  siteweb varchar(50) NOT NULL
) ;

CREATE TABLE  livraison (
  id_livraison int NOT NULL PRIMARY KEY  AUTO_INCREMENT,
  num_livraison varchar(50) NOT NULL,
  id_commande int NOT NULL,
  id_fournisseur int NOT NULL,
  livraison date NOT NULL,
   ADD CONSTRAINT livraison_ibfk_1 FOREIGN KEY (id_fournisseur) REFERENCES fournisseur (id_fournisseur),
  ADD CONSTRAINT livraison_ibfk_2 FOREIGN KEY (id_commande) REFERENCES commande (id_commande)

) ;


CREATE TABLE  commande (
  id_commande int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  num_commande varchar(50) NOT NULL,
  quantite_commande int NOT NULL,
  date_commande date NOT NULL,
  id_produit int NOT NULL,
  id_personnel int NOT NULL,
  poidscommande double not null,
  constraint id_produit_fk foreign key (id_produit) references produit (id_produit),
  constraint id_personnel foreign key (id_personnel) references personnel (id_personnel)
  
) ;
