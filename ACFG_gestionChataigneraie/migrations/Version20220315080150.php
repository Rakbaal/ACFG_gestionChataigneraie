<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220315080150 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entreprise (ent_id INT AUTO_INCREMENT NOT NULL, ent_rs VARCHAR(50) NOT NULL, ent_ville VARCHAR(50) NOT NULL, ent_pays VARCHAR(42) NOT NULL, ent_adresse VARCHAR(70) NOT NULL, ent_cp CHAR(5) NOT NULL, PRIMARY KEY(ent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fonction (fon_id INT AUTO_INCREMENT NOT NULL, fon_libelle VARCHAR(50) NOT NULL, PRIMARY KEY(fon_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (per_id INT AUTO_INCREMENT NOT NULL, per_nom VARCHAR(40) NOT NULL, per_prenom VARCHAR(40) NOT NULL, per_email VARCHAR(255) DEFAULT NULL, per_tel VARCHAR(10) DEFAULT NULL, PRIMARY KEY(per_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (pro_id INT AUTO_INCREMENT NOT NULL, pro_type VARCHAR(50) NOT NULL, PRIMARY KEY(pro_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialite (spe_id INT AUTO_INCREMENT NOT NULL, spe_libelle VARCHAR(50) NOT NULL, PRIMARY KEY(spe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (uti_id INT AUTO_INCREMENT NOT NULL, uti_login VARCHAR(50) NOT NULL, uti_mdp VARCHAR(50) NOT NULL, uti_admin TINYINT(1) NOT NULL, PRIMARY KEY(uti_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE fonction');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE specialite');
        $this->addSql('DROP TABLE utilisateur');
    }
}
