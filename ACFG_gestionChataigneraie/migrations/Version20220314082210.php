<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220314082210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ENTREPRISE (id INT AUTO_INCREMENT NOT NULL, ent_raison_sociale VARCHAR(40) NOT NULL, ent_ville VARCHAR(50) NOT NULL, ent_pays VARCHAR(42) NOT NULL, ent_adresse VARCHAR(60) NOT NULL, ent_code_postal CHAR(5) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE FONCTION (id INT AUTO_INCREMENT NOT NULL, fon_libelle VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE PERSONNE (id INT AUTO_INCREMENT NOT NULL, per_nom VARCHAR(40) NOT NULL, per_prenom VARCHAR(40) NOT NULL, per_mail VARCHAR(254) DEFAULT NULL, per_telephone VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE PROFIL (id INT AUTO_INCREMENT NOT NULL, pro_libelle VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE SPECIALITE (id INT AUTO_INCREMENT NOT NULL, spe_libelle VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE UTILISATEUR (id INT AUTO_INCREMENT NOT NULL, uti_login VARCHAR(40) NOT NULL, uti_mot_de_passe VARCHAR(40) NOT NULL, uti_admin TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE ENTREPRISE');
        $this->addSql('DROP TABLE FONCTION');
        $this->addSql('DROP TABLE PERSONNE');
        $this->addSql('DROP TABLE PROFIL');
        $this->addSql('DROP TABLE SPECIALITE');
        $this->addSql('DROP TABLE UTILISATEUR');
    }
}
