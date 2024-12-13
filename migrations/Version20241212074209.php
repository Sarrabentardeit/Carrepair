<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241212074209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment ADD email VARCHAR(255) NOT NULL, ADD phone VARCHAR(20) NOT NULL, ADD message LONGTEXT NOT NULL, ADD service VARCHAR(255) NOT NULL, CHANGE date_rendez_vous date DATETIME NOT NULL, CHANGE service_demande name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment ADD service_demande VARCHAR(255) NOT NULL, DROP name, DROP email, DROP phone, DROP message, DROP service, CHANGE date date_rendez_vous DATETIME NOT NULL');
    }
}
