<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180321032150 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE elenco_videos (cod_videos INT NOT NULL, cod_elenco INT NOT NULL, INDEX IDX_FE8D534643D46BFE (cod_videos), INDEX IDX_FE8D534622B0F7C (cod_elenco), PRIMARY KEY(cod_videos, cod_elenco)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE elenco_videos ADD CONSTRAINT FK_FE8D534643D46BFE FOREIGN KEY (cod_videos) REFERENCES videos (id_videos)');
        $this->addSql('ALTER TABLE elenco_videos ADD CONSTRAINT FK_FE8D534622B0F7C FOREIGN KEY (cod_elenco) REFERENCES elenco (id_elenco)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE elenco_videos');
    }
}
