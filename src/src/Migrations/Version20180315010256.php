<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180315010256 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE genero (id_genero INT AUTO_INCREMENT NOT NULL, gene_nome VARCHAR(255) NOT NULL, PRIMARY KEY(id_genero)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario (id_usuario INT AUTO_INCREMENT NOT NULL, usua_nome VARCHAR(255) NOT NULL, usua_email VARCHAR(255) NOT NULL, usua_senha VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id_usuario)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video_tipo (id_video_tipo INT AUTO_INCREMENT NOT NULL, vide_tip_nome VARCHAR(255) NOT NULL, PRIMARY KEY(id_video_tipo)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE genero');
        $this->addSql('DROP TABLE usuario');
        $this->addSql('DROP TABLE video_tipo');
    }
}
