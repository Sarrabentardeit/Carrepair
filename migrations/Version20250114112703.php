<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250114112703 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vehicule_compatible (id INT AUTO_INCREMENT NOT NULL, marque_id INT NOT NULL, modele_id INT NOT NULL, motorisation_id INT NOT NULL, INDEX IDX_970EEAD54827B9B2 (marque_id), INDEX IDX_970EEAD5AC14B70A (modele_id), INDEX IDX_970EEAD5A3B5A725 (motorisation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vehicule_compatible ADD CONSTRAINT FK_970EEAD54827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('ALTER TABLE vehicule_compatible ADD CONSTRAINT FK_970EEAD5AC14B70A FOREIGN KEY (modele_id) REFERENCES modele (id)');
        $this->addSql('ALTER TABLE vehicule_compatible ADD CONSTRAINT FK_970EEAD5A3B5A725 FOREIGN KEY (motorisation_id) REFERENCES motorisation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule_compatible DROP FOREIGN KEY FK_970EEAD54827B9B2');
        $this->addSql('ALTER TABLE vehicule_compatible DROP FOREIGN KEY FK_970EEAD5AC14B70A');
        $this->addSql('ALTER TABLE vehicule_compatible DROP FOREIGN KEY FK_970EEAD5A3B5A725');
        $this->addSql('DROP TABLE vehicule_compatible');
    }
}
