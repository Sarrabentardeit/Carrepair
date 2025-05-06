<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250103142235 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE modele_motorisations (modele_id INT NOT NULL, motorisation_id INT NOT NULL, INDEX IDX_2AC7A3CAC14B70A (modele_id), INDEX IDX_2AC7A3CA3B5A725 (motorisation_id), PRIMARY KEY(modele_id, motorisation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE modele_motorisations ADD CONSTRAINT FK_2AC7A3CAC14B70A FOREIGN KEY (modele_id) REFERENCES modele (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE modele_motorisations ADD CONSTRAINT FK_2AC7A3CA3B5A725 FOREIGN KEY (motorisation_id) REFERENCES motorisation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE motorisation DROP FOREIGN KEY FK_40F7E0FAAC14B70A');
        $this->addSql('DROP INDEX IDX_40F7E0FAAC14B70A ON motorisation');
        $this->addSql('ALTER TABLE motorisation DROP modele_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE modele_motorisations DROP FOREIGN KEY FK_2AC7A3CAC14B70A');
        $this->addSql('ALTER TABLE modele_motorisations DROP FOREIGN KEY FK_2AC7A3CA3B5A725');
        $this->addSql('DROP TABLE modele_motorisations');
        $this->addSql('ALTER TABLE motorisation ADD modele_id INT NOT NULL');
        $this->addSql('ALTER TABLE motorisation ADD CONSTRAINT FK_40F7E0FAAC14B70A FOREIGN KEY (modele_id) REFERENCES modele (id)');
        $this->addSql('CREATE INDEX IDX_40F7E0FAAC14B70A ON motorisation (modele_id)');
    }
}
