<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220621091454 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bien_loc ADD price DOUBLE PRECISION DEFAULT NULL, ADD comments VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE resa ADD comments_id INT DEFAULT NULL, ADD nbre_voyageur INT DEFAULT NULL, CHANGE nbre_de_personnes price_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE resa ADD CONSTRAINT FK_90C9C53BD614C7E7 FOREIGN KEY (price_id) REFERENCES bien_loc (id)');
        $this->addSql('ALTER TABLE resa ADD CONSTRAINT FK_90C9C53B63379586 FOREIGN KEY (comments_id) REFERENCES bien_loc (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_90C9C53BD614C7E7 ON resa (price_id)');
        $this->addSql('CREATE INDEX IDX_90C9C53B63379586 ON resa (comments_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bien_loc DROP price, DROP comments');
        $this->addSql('ALTER TABLE resa DROP FOREIGN KEY FK_90C9C53BD614C7E7');
        $this->addSql('ALTER TABLE resa DROP FOREIGN KEY FK_90C9C53B63379586');
        $this->addSql('DROP INDEX UNIQ_90C9C53BD614C7E7 ON resa');
        $this->addSql('DROP INDEX IDX_90C9C53B63379586 ON resa');
        $this->addSql('ALTER TABLE resa ADD nbre_de_personnes INT DEFAULT NULL, DROP price_id, DROP comments_id, DROP nbre_voyageur');
    }
}
