<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180317232337 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE episodios (id_episodios INT AUTO_INCREMENT NOT NULL, cod_videos INT DEFAULT NULL, epis_nome_traduzido VARCHAR(255) NOT NULL, epis_nome_original VARCHAR(255) NOT NULL, epis_duracao VARCHAR(255) NOT NULL, epis_descricao VARCHAR(255) NOT NULL, INDEX IDX_C7C100543D46BFE (cod_videos), PRIMARY KEY(id_episodios)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE episodios ADD CONSTRAINT FK_C7C100543D46BFE FOREIGN KEY (cod_videos) REFERENCES videos (id_videos)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE episodios');
    }
}
