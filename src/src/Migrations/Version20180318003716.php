<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180318003716 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE elenco (id_elenco INT AUTO_INCREMENT NOT NULL, cod_funcao INT DEFAULT NULL, elen_nome VARCHAR(255) NOT NULL, INDEX IDX_685500B04A0FEF1 (cod_funcao), PRIMARY KEY(id_elenco)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE elenco ADD CONSTRAINT FK_685500B04A0FEF1 FOREIGN KEY (cod_funcao) REFERENCES funcao (id_funcao)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE elenco');
    }
}
