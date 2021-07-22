<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210722000245 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planning ADD days LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD hours LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', DROP time, DROP week');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planning ADD time TIME NOT NULL, ADD week DATETIME NOT NULL, DROP days, DROP hours');
    }
}
