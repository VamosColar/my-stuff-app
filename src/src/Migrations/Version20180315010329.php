<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180315010329 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE videos (id_video INT AUTO_INCREMENT NOT NULL, cod_genero INT DEFAULT NULL, cod_video_tipo INT DEFAULT NULL, vide_titulo VARCHAR(255) NOT NULL, videDescricao VARCHAR(255) NOT NULL, vide_ano VARCHAR(255) NOT NULL, vide_duracao VARCHAR(255) NOT NULL, vide_imagem_diretorio VARCHAR(255) NOT NULL, vide_temporada_numero INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, deleted_at DATETIME NOT NULL, created_by DATETIME NOT NULL, updated_by DATETIME NOT NULL, deleted_by DATETIME NOT NULL, INDEX IDX_29AA6432CA7E87F6 (cod_genero), INDEX IDX_29AA64325CA68A26 (cod_video_tipo), PRIMARY KEY(id_video)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE videos ADD CONSTRAINT FK_29AA6432CA7E87F6 FOREIGN KEY (cod_genero) REFERENCES genero (id_genero)');
        $this->addSql('ALTER TABLE videos ADD CONSTRAINT FK_29AA64325CA68A26 FOREIGN KEY (cod_video_tipo) REFERENCES video_tipo (id_video_tipo)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE videos');
    }
}
