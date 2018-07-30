<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180723020440 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE city_manager (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, city_name VARCHAR(200) NOT NULL, INDEX IDX_476C9BEB9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE building_manager (id INT AUTO_INCREMENT NOT NULL, cityid_id INT NOT NULL, control_hq INT NOT NULL, drilling_rig INT NOT NULL, warehouse INT NOT NULL, hunters_lodge INT NOT NULL, barracks INT NOT NULL, laboratory INT NOT NULL, UNIQUE INDEX UNIQ_CDECA893C12FD324 (cityid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_manager (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(200) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE city_manager ADD CONSTRAINT FK_476C9BEB9D86650F FOREIGN KEY (user_id_id) REFERENCES user_manager (id)');
        $this->addSql('ALTER TABLE building_manager ADD CONSTRAINT FK_CDECA893C12FD324 FOREIGN KEY (cityid_id) REFERENCES city_manager (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE building_manager DROP FOREIGN KEY FK_CDECA893C12FD324');
        $this->addSql('ALTER TABLE city_manager DROP FOREIGN KEY FK_476C9BEB9D86650F');
        $this->addSql('DROP TABLE city_manager');
        $this->addSql('DROP TABLE building_manager');
        $this->addSql('DROP TABLE user_manager');
    }
}
