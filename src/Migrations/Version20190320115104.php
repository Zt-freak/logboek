<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190320115104 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE logboek ADD truck_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE logboek ADD CONSTRAINT FK_13847B9AFE9F2F8D FOREIGN KEY (truck_id_id) REFERENCES truck (id)');
        $this->addSql('CREATE INDEX IDX_13847B9AFE9F2F8D ON logboek (truck_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE logboek DROP FOREIGN KEY FK_13847B9AFE9F2F8D');
        $this->addSql('DROP INDEX IDX_13847B9AFE9F2F8D ON logboek');
        $this->addSql('ALTER TABLE logboek DROP truck_id_id');
    }
}
