<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150214215052 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE restaurant_dishes (
            id INT AUTO_INCREMENT NOT NULL,
            restaurant_id INT DEFAULT NULL,
            name VARCHAR(255) NOT NULL,
            price DOUBLE PRECISION NOT NULL,
            category_veg_nonveg VARCHAR(255) NOT NULL,
            INDEX IDX_A9D32CACE692CC50 (restaurant_id),
            PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');

        $this->addSql('CREATE TABLE restaurant_details (
            id INT AUTO_INCREMENT NOT NULL,
            restaurant_id INT DEFAULT NULL,
            cost_for_2 NUMERIC(10,0) NOT NULL,
            opening_time TIME NOT NULL,
            closing_time TIME NOT NULL,
            delivery_time TIME NOT NULL,
            min_order NUMERIC(10, 0) NOT NULL,
            UNIQUE INDEX UNIQ_B86D57FFB1E7706E (restaurant_id),
            PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');

        $this->addSql('CREATE TABLE restaurant_ratings (
            id INT AUTO_INCREMENT NOT NULL,
            user_id INT DEFAULT NULL,
            restaurant_id INT DEFAULT NULL,
            rating_out_of_5 DOUBLE PRECISION NOT NULL,
            INDEX IDX_4FD5BBCA76ED395 (user_id),
            INDEX IDX_4FD5BBCB1E7706E (restaurant_id),
            PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');

        $this->addSql('CREATE TABLE user_profiles (
            id INT AUTO_INCREMENT NOT NULL,
            name VARCHAR(255) NOT NULL,
            city VARCHAR(255) NOT NULL,
            email_id VARCHAR(255) NOT NULL,
            phone_number VARCHAR(255) NOT NULL,
            PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');

        $this->addSql('CREATE TABLE user_likes (
            id INT AUTO_INCREMENT NOT NULL,
            user_profile_id INT DEFAULT NULL,
            restaurant_id INT DEFAULT NULL,
            INDEX IDX_AB08B5256B9DD454 (user_profile_id),
            INDEX IDX_AB08B525B1E7706E (restaurant_id),
            PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');

        $this->addSql('CREATE TABLE restaurants (id INT AUTO_INCREMENT NOT NULL,
            name VARCHAR(255) NOT NULL,
            address VARCHAR(255) NOT NULL,
            longitude INT NOT NULL,
            lattitude INT NOT NULL,
            city VARCHAR(255) NOT NULL,
            country VARCHAR(255) NOT NULL,
            locality VARCHAR(255) NOT NULL,
            cuisines VARCHAR(255) NOT NULL,
            rating DOUBLE PRECISION NOT NULL,
            PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');

        $this->addSql('ALTER TABLE restaurant_dishes 
            ADD CONSTRAINT FK_A9D32CACE692CC50 FOREIGN KEY (restaurant_id) REFERENCES restaurants (id)');

        $this->addSql('ALTER TABLE restaurant_details
            ADD CONSTRAINT FK_B86D57FFB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurants (id)');

        $this->addSql('ALTER TABLE restaurant_ratings
            ADD CONSTRAINT FK_4FD5BBCA76ED395 FOREIGN KEY (user_id) REFERENCES user_profiles (id)');

        $this->addSql('ALTER TABLE restaurant_ratings
            ADD CONSTRAINT FK_4FD5BBCB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurants (id)');

        $this->addSql('ALTER TABLE user_likes
            ADD CONSTRAINT FK_AB08B5256B9DD454 FOREIGN KEY (user_profile_id) REFERENCES user_profiles (id)');

        $this->addSql('ALTER TABLE user_likes
            ADD CONSTRAINT FK_AB08B525B1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurants (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE restaurant_ratings DROP FOREIGN KEY FK_4FD5BBCA76ED395');
        $this->addSql('ALTER TABLE user_likes DROP FOREIGN KEY FK_AB08B5256B9DD454');
        $this->addSql('ALTER TABLE restaurant_dishes DROP FOREIGN KEY FK_A9D32CACE692CC50');
        $this->addSql('ALTER TABLE restaurant_details DROP FOREIGN KEY FK_B86D57FFB1E7706E');
        $this->addSql('ALTER TABLE restaurant_ratings DROP FOREIGN KEY FK_4FD5BBCB1E7706E');
        $this->addSql('ALTER TABLE user_likes DROP FOREIGN KEY FK_AB08B525B1E7706E');
        $this->addSql('DROP TABLE restaurant_dishes');
        $this->addSql('DROP TABLE restaurant_details');
        $this->addSql('DROP TABLE restaurant_ratings');
        $this->addSql('DROP TABLE user_profiles');
        $this->addSql('DROP TABLE user_likes');
        $this->addSql('DROP TABLE restaurants');
    }
}
