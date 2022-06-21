<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
<<<<<<<< HEAD:migrations/Version20220621055849.php
final class Version20220621055849 extends AbstractMigration
========
final class Version20220621072505 extends AbstractMigration
>>>>>>>> 704c58cee335c02e4ed4b012bf86840306b9c9a8:migrations/Version20220621072505.php
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bien_loc ADD image VARCHAR(255) NOT NULL, ADD title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user_registration ADD choix VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bien_loc DROP image, DROP title');
        $this->addSql('ALTER TABLE user_registration DROP choix');
    }
}
