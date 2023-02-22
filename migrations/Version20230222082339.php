<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222082339 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(75) NOT NULL, meta_title VARCHAR(100) NOT NULL, slug VARCHAR(100) NOT NULL, summary LONGTEXT NOT NULL, type SMALLINT NOT NULL, sku VARCHAR(100) DEFAULT NULL, price DOUBLE PRECISION NOT NULL, discount DOUBLE PRECISION DEFAULT NULL, quantity SMALLINT NOT NULL, shop VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', published_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', starts_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', end_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', content LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD email VARCHAR(180) NOT NULL, ADD password VARCHAR(255) NOT NULL, ADD registred_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP registered_at, CHANGE vendor vendor VARCHAR(255) DEFAULT NULL, CHANGE last_login last_login DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE intro intro VARCHAR(1) DEFAULT NULL, CHANGE profile profile LONGTEXT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON `user`');
        $this->addSql('ALTER TABLE `user` ADD registered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP email, DROP password, DROP registred_at, CHANGE vendor vendor VARCHAR(1) DEFAULT NULL, CHANGE last_login last_login DATETIME DEFAULT NULL, CHANGE intro intro VARCHAR(255) DEFAULT NULL, CHANGE profile profile VARCHAR(255) DEFAULT NULL');
    }
}
