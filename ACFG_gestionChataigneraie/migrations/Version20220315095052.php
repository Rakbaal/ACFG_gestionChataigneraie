<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220315095052 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entreprise_specialite (entreprise_id INT NOT NULL, specialite_id INT NOT NULL, INDEX IDX_4841672AA4AEAFEA (entreprise_id), INDEX IDX_4841672A2195E0F0 (specialite_id), PRIMARY KEY(entreprise_id, specialite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entreprise_specialite ADD CONSTRAINT FK_4841672AA4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entreprise_specialite ADD CONSTRAINT FK_4841672A2195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE entreprise_specialite');
    }
}
