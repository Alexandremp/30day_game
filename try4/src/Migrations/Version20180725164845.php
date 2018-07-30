<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180725164845 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE planets (id INT AUTO_INCREMENT NOT NULL, solar_system_id_id INT DEFAULT NULL, name VARCHAR(200) NOT NULL, xaxis INT NOT NULL, yaxis INT NOT NULL, img_type INT NOT NULL, INDEX IDX_BDDA8B06E19174F6 (solar_system_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE galaxy (id INT AUTO_INCREMENT NOT NULL, img_type INT NOT NULL, name VARCHAR(200) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE technology_manager (id INT AUTO_INCREMENT NOT NULL, distribution_center INT NOT NULL, cartography INT NOT NULL, merchant_roads INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE solar_system (id INT AUTO_INCREMENT NOT NULL, galaxy_id_id INT DEFAULT NULL, name VARCHAR(200) NOT NULL, xaxis INT NOT NULL, yaxis INT NOT NULL, number_of_planets INT NOT NULL, img_type INT NOT NULL, INDEX IDX_28893917747DB7BC (galaxy_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE planets ADD CONSTRAINT FK_BDDA8B06E19174F6 FOREIGN KEY (solar_system_id_id) REFERENCES solar_system (id)');
        $this->addSql('ALTER TABLE solar_system ADD CONSTRAINT FK_28893917747DB7BC FOREIGN KEY (galaxy_id_id) REFERENCES galaxy (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE solar_system DROP FOREIGN KEY FK_28893917747DB7BC');
        $this->addSql('ALTER TABLE planets DROP FOREIGN KEY FK_BDDA8B06E19174F6');
        $this->addSql('DROP TABLE planets');
        $this->addSql('DROP TABLE galaxy');
        $this->addSql('DROP TABLE technology_manager');
        $this->addSql('DROP TABLE solar_system');
    }
}
