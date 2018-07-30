<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180725192412 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE dungeons (id INT AUTO_INCREMENT NOT NULL, land_mass_id_id INT DEFAULT NULL, name VARCHAR(200) NOT NULL, xaxis INT NOT NULL, yaxis INT NOT NULL, img_type INT NOT NULL, INDEX IDX_EB3EA650212DBC4E (land_mass_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE land_mass (id INT AUTO_INCREMENT NOT NULL, planet_id_id INT DEFAULT NULL, name VARCHAR(200) NOT NULL, xaxis INT NOT NULL, yaxis INT NOT NULL, land_type INT NOT NULL, INDEX IDX_FFF760AF6B47FF93 (planet_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dungeons ADD CONSTRAINT FK_EB3EA650212DBC4E FOREIGN KEY (land_mass_id_id) REFERENCES planets (id)');
        $this->addSql('ALTER TABLE land_mass ADD CONSTRAINT FK_FFF760AF6B47FF93 FOREIGN KEY (planet_id_id) REFERENCES planets (id)');
        $this->addSql('ALTER TABLE city_manager ADD land_mass_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE city_manager ADD CONSTRAINT FK_476C9BEB212DBC4E FOREIGN KEY (land_mass_id_id) REFERENCES land_mass (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_476C9BEB212DBC4E ON city_manager (land_mass_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE city_manager DROP FOREIGN KEY FK_476C9BEB212DBC4E');
        $this->addSql('DROP TABLE dungeons');
        $this->addSql('DROP TABLE land_mass');
        $this->addSql('DROP INDEX UNIQ_476C9BEB212DBC4E ON city_manager');
        $this->addSql('ALTER TABLE city_manager DROP land_mass_id_id');
    }
}
