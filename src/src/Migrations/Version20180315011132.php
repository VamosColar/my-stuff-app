<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180315011132 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE videos CHANGE videDescricao videDescricao VARCHAR(255) DEFAULT NULL, CHANGE vide_ano vide_ano VARCHAR(255) DEFAULT NULL, CHANGE vide_duracao vide_duracao VARCHAR(255) DEFAULT NULL, CHANGE vide_imagem_diretorio vide_imagem_diretorio VARCHAR(255) DEFAULT NULL, CHANGE vide_temporada_numero vide_temporada_numero INT DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE deleted_at deleted_at DATETIME DEFAULT NULL, CHANGE updated_by updated_by DATETIME DEFAULT NULL, CHANGE deleted_by deleted_by DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE videos CHANGE videDescricao videDescricao VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE vide_ano vide_ano VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE vide_duracao vide_duracao VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE vide_imagem_diretorio vide_imagem_diretorio VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE vide_temporada_numero vide_temporada_numero INT NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL, CHANGE deleted_at deleted_at DATETIME NOT NULL, CHANGE updated_by updated_by DATETIME NOT NULL, CHANGE deleted_by deleted_by DATETIME NOT NULL');
    }
}
