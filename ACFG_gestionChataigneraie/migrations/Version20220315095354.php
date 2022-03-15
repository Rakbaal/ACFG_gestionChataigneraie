<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220315095354 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE personne_profil (personne_id INT NOT NULL, profil_id INT NOT NULL, INDEX IDX_D2AC8A7AA21BD112 (personne_id), INDEX IDX_D2AC8A7A275ED078 (profil_id), PRIMARY KEY(personne_id, profil_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne_fonction (personne_id INT NOT NULL, fonction_id INT NOT NULL, INDEX IDX_CAD2D4F8A21BD112 (personne_id), INDEX IDX_CAD2D4F857889920 (fonction_id), PRIMARY KEY(personne_id, fonction_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE personne_profil ADD CONSTRAINT FK_D2AC8A7AA21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE personne_profil ADD CONSTRAINT FK_D2AC8A7A275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE personne_fonction ADD CONSTRAINT FK_CAD2D4F8A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE personne_fonction ADD CONSTRAINT FK_CAD2D4F857889920 FOREIGN KEY (fonction_id) REFERENCES fonction (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE personne_profil');
        $this->addSql('DROP TABLE personne_fonction');
    }
}
