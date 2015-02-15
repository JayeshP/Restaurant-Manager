<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150214220929 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE restaurant_details ADD lunch_start_time TIME NOT NULL, ADD lunch_close_time TIME NOT NULL, ADD dinner_start_time TIME NOT NULL, ADD dinner_close_time TIME NOT NULL, DROP opening_time, DROP closing_time');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE restaurant_details ADD opening_time TIME NOT NULL, ADD closing_time TIME NOT NULL, DROP lunch_start_time, DROP lunch_close_time, DROP dinner_start_time, DROP dinner_close_time');
    }
}
