<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220315094414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, ent_rs VARCHAR(50) NOT NULL, ent_ville VARCHAR(50) NOT NULL, ent_pays VARCHAR(50) NOT NULL, ent_adresse VARCHAR(70) NOT NULL, ent_cp VARCHAR(5) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprise_personne (entreprise_id INT NOT NULL, personne_id INT NOT NULL, INDEX IDX_5D1ECF6AA4AEAFEA (entreprise_id), INDEX IDX_5D1ECF6AA21BD112 (personne_id), PRIMARY KEY(entreprise_id, personne_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fonction (id INT AUTO_INCREMENT NOT NULL, fon_libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, per_nom VARCHAR(38) NOT NULL, per_prenom VARCHAR(38) NOT NULL, per_mail VARCHAR(50) DEFAULT NULL, per_tel VARCHAR(10) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, pro_type VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialite (id INT AUTO_INCREMENT NOT NULL, spe_libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, uti_login VARCHAR(50) NOT NULL, uti_mdp VARCHAR(50) NOT NULL, uti_admin TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entreprise_personne ADD CONSTRAINT FK_5D1ECF6AA4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entreprise_personne ADD CONSTRAINT FK_5D1ECF6AA21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entreprise_personne DROP FOREIGN KEY FK_5D1ECF6AA4AEAFEA');
        $this->addSql('ALTER TABLE entreprise_personne DROP FOREIGN KEY FK_5D1ECF6AA21BD112');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE entreprise_personne');
        $this->addSql('DROP TABLE fonction');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE specialite');
        $this->addSql('DROP TABLE utilisateur');
    }
}
