<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180612235101 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE building_todo (id INT AUTO_INCREMENT NOT NULL, number_of_tasks INT DEFAULT NULL, number_of_free_tasks INT NOT NULL, task_remaing_time DATETIME DEFAULT NULL, task_remaing_time2 DATETIME DEFAULT NULL, task1 INT DEFAULT NULL, task2 INT DEFAULT NULL, task3 INT DEFAULT NULL, task4 INT DEFAULT NULL, task5 INT DEFAULT NULL, task6 INT DEFAULT NULL, task7 INT DEFAULT NULL, task8 INT DEFAULT NULL, task9 INT DEFAULT NULL, task10 INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE building_todo');
    }
}
