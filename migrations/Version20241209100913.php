<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241209100913 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product ADD seo_titre VARCHAR(255) DEFAULT NULL, ADD seo_description LONGTEXT DEFAULT NULL, ADD slug VARCHAR(255) DEFAULT NULL, ADD mots_cles LONGTEXT DEFAULT NULL, ADD texte_promotion LONGTEXT DEFAULT NULL, ADD nom_image VARCHAR(255) DEFAULT NULL, ADD texte_alternatif VARCHAR(255) DEFAULT NULL, ADD titre_image VARCHAR(255) DEFAULT NULL, ADD description_image LONGTEXT DEFAULT NULL, ADD indexable TINYINT(1) DEFAULT 1 NOT NULL, ADD canonical_url VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP seo_titre, DROP seo_description, DROP slug, DROP mots_cles, DROP texte_promotion, DROP nom_image, DROP texte_alternatif, DROP titre_image, DROP description_image, DROP indexable, DROP canonical_url');
    }
}
