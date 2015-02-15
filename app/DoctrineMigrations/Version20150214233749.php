<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150214233749 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql("INSERT INTO restaurants(id, name, address, locality, city, country, rating)
            VALUES(1, 'Tasty Bytes', '300, Jayanagar', 'Jayanagar', 'Bangaluru', 'India', 4)");

        $this->addSql("INSERT INTO restaurants(id, name, address, locality, city, country, rating)
            VALUES(2, 'Dominos', '300, Indiaranagar', 'Indiaranagar', 'Bangaluru', 'India', 3)");

        $this->addSql("INSERT INTO restaurants(id, name, address, locality, city, country, rating)
            VALUES(3, 'Pizza Hut', '300, Jayanagar', 'Jayanagar', 'Bangaluru', 'India', 2)");

        $this->addSql("INSERT INTO restaurants(id, name, address, locality, city, country, rating)
            VALUES(4, 'Tacco Bell', '300, Indiaranagar', 'Indiaranagar', 'Bangaluru', 'India', 3.5)");
    }

    public function down(Schema $schema)
    {
        $this->addSql('DELETE FROM restaurants WHERE id in (1, 2, 3, 4) ');

    }
}
