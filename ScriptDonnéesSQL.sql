USE palaso;

INSERT INTO LOGIN(log_log, log_pwd)
	VALUES ('administrateur', 'admin000');
INSERT INTO LOGIN(log_log, log_pwd)
	VALUES ('secretariat', '12345678');
INSERT INTO LOGIN(log_log, log_pwd)
	VALUES ('employe1', '12345678');
INSERT INTO LOGIN(log_log, log_pwd)
	VALUES ('employe2', '12345678');
INSERT INTO LOGIN(log_log, log_pwd)
	VALUES ('user1', '12345678');
INSERT INTO LOGIN(log_log, log_pwd)
	VALUES ('user2', '12345678');
INSERT INTO LOGIN(log_log, log_pwd)
	VALUES ('ent1', '12345678');
INSERT INTO LOGIN(log_log, log_pwd)
	VALUES ('ent2', '12345678');

INSERT INTO CIVILITES(civ_code, civ_libelle)
	VALUES ('Mlle','Mademoiselle');
INSERT INTO CIVILITES(civ_code, civ_libelle)
	VALUES ('Mme', 'Madame');
INSERT INTO CIVILITES(civ_code, civ_libelle)
	VALUES ('Mr', 'Monsieur');

INSERT INTO ENTREPRISE(ent_siret, ent_raisonsociale, ent_adresse1, ent_adresse2, ent_CP, ent_ville, ent_telephone, ent_fax, ent_mail, ent_login)
	VALUES ('12345678912345', 'Ford', '9 rue Imaginaire', 'Impasse B', '33000', 'Bordeaux', '0568635458', '0568635459', 'ford@fake.com', 7);
INSERT INTO ENTREPRISE(ent_siret, ent_raisonsociale, ent_adresse1, ent_adresse2, ent_CP, ent_ville, ent_telephone, ent_fax, ent_mail, ent_login)
	VALUES ('98765432103214', 'Apple', '7 avenue Bastille', 'Rez de chaussée', '33000', 'Bordeaux', '0512245687', NULL , 'apple@fake.com', 8);

INSERT INTO FONCTION(fct_code, fct_libelle)
	VALUES ('1', 'ADMINISTRATEUR');
INSERT INTO FONCTION(fct_code, fct_libelle)
	VALUES ('2', 'EMPLOYE');
INSERT INTO FONCTION(fct_code, fct_libelle)
	VALUES ('3', 'SECRETAIRE');

INSERT INTO EMPLOYE(emp_nom, emp_prenom, emp_adresse1, emp_adresse2, emp_CP, emp_ville, emp_telephone, emp_mail, emp_fonction, emp_login)
	VALUES ('SOUAN', 'Edouard', '1 rue Coolzor', 'Appartement A1', '33000', 'Bordeaux', '0500102030', 'e.souanmarcelon@epsi.fr', '1', '1');
INSERT INTO EMPLOYE(emp_nom, emp_prenom, emp_adresse1, emp_adresse2, emp_CP, emp_ville, emp_telephone, emp_mail, emp_fonction, emp_login)
	VALUES ('PALLAS', 'Amandine', '3 rue Bobo', 'Appartement B1', '33000', 'Bordeaux', '0510203040', 'a.pallas@epsi.fr', '3', '2');
INSERT INTO EMPLOYE(emp_nom, emp_prenom, emp_adresse1, emp_adresse2, emp_CP, emp_ville, emp_telephone, emp_mail, emp_fonction, emp_login)
	VALUES ('LARRUE', 'Florent', '6 rue Blabla', 'Lieu-dit Very', '24700', 'Montpon', '0553807853', 'f.larrue@epsi.fr', '2', '3');

INSERT INTO METIER(met_code, met_libelle)
 	VALUES ('DEV', 'Developpeur');
INSERT INTO METIER(met_code, met_libelle)
 	VALUES ('ARC_RES', 'Architecture reseau');
INSERT INTO METIER(met_code, met_libelle)
 	VALUES ('ANA', 'Analyste');

 INSERT INTO EXPERIENCE(exp_code, exp_libelle)
 	VALUES ('1', '1 année');
 INSERT INTO EXPERIENCE(exp_code, exp_libelle)
 	VALUES ('2', '2 ans');
 INSERT INTO EXPERIENCE(exp_code, exp_libelle)
 	VALUES ('3', '3 ans');

INSERT INTO DIPLOME(dip_code, dip_libelle)
	VALUES ('BAC S', 'Baccalaureat scientifique');
INSERT INTO DIPLOME(dip_code, dip_libelle)
	VALUES ('BAC ES', 'Baccalaureat sciences economiques');
INSERT INTO DIPLOME(dip_code, dip_libelle)
	VALUES ('BAC L', 'Baccalaureat litteraire');
INSERT INTO DIPLOME(dip_code, dip_libelle)
	VALUES ('BTS IG', 'BTS informatique de gestion');
INSERT INTO DIPLOME(dip_code, dip_libelle)
	VALUES ('BTS SIO', "BTS Services d'information aux organisations");
INSERT INTO DIPLOME(dip_code, dip_libelle)
	VALUES ('BAC+5', 'Ingénierie informatique');

INSERT INTO MOTIF_DE_RECOURS(mot_code, mot_libelle)
	VALUES ('A1', 'Urgence');
INSERT INTO MOTIF_DE_RECOURS(mot_code, mot_libelle)
	VALUES ('A2', 'Remplacement');

INSERT INTO TYPE_OFFRE(type_code, type_libelle)
	VALUES ('CDD', 'Contrat à durée déterminée');
INSERT INTO TYPE_OFFRE(type_code, type_libelle)
	VALUES ('CDI', 'Contrat à durée indéterminée');
INSERT INTO TYPE_OFFRE(type_code, type_libelle)
	VALUES ('SAI', 'Contrat saisonnier');

INSERT INTO OFFRE(off_libelle, off_dateDebutPrevisionnel, off_dateFinPrevisionnel, off_periodeEssaiJours, off_nombrePersonnes, off_motif, off_type, off_employe, off_entreprise, off_metier)
	VALUES ('Offre 1', '2012-12-01', '2013-02-01', '3', '1', '1', '1', '2', '1', '1');
INSERT INTO OFFRE(off_libelle, off_dateDebutPrevisionnel, off_dateFinPrevisionnel, off_periodeEssaiJours, off_nombrePersonnes, off_motif, off_type, off_employe, off_entreprise, off_metier) 
	VALUES ('Offre 2', '2012-12-15', '', '3', '1', '2', '2', '3', '2', '2');

INSERT INTO INTERIMAIRE(int_ss, int_nom, int_prenom, int_adr1, int_adr2, int_cp, int_ville, int_telephone, int_mobile, int_mail, int_metier, int_civilite, int_login)
	VALUES ('112233445566771', 'DUPOND', 'Alex', '1 rue Ok', 'Apt B', '33000', 'Bordeaux', '0532346564', '', 'a.dupond@test.fr', '1', 3, 5);
INSERT INTO INTERIMAIRE(int_ss, int_nom, int_prenom, int_adr1, int_adr2, int_cp, int_ville, int_telephone, int_mobile, int_mail, int_metier, int_civilite, int_login)
	VALUES ('221133445566772', 'VIAUD', 'Alice', '5 rue No', '', '33000', 'Pessac', '0514748798', '0612546563', 'a.viaud@lol.com', '3', 1, 6);

INSERT INTO DOCUMENTS(doc_code, doc_libelle)
	VALUES ('CV', 'Curriculum Vitae');
INSERT INTO DOCUMENTS(doc_code, doc_libelle)
	VALUES ('Doc2', 'Document 2');
INSERT INTO DOCUMENTS(doc_code, doc_libelle)
	VALUES ('Doc3', 'Document 3');

INSERT INTO DOSSIER(dos_date, dos_chemin, dos_interimaire, dos_document)
	VALUES ('2012-12-01', 'link', '1', '1');

INSERT INTO CONTRAT_DE_MISSION(cdm_date, cdm_dateDebut, cdm_dossier, cdm_offre)
	VALUES ('2012-11-30', '2012-12-01', '1', '1' );

INSERT INTO CDD(cdd_id, cdd_type, cdd_dureeMois)
	VALUES ('1','CDD', '2');
