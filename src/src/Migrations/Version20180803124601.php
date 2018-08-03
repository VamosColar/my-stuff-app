<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180803124601 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE videos DROP FOREIGN KEY FK_29AA64325CA68A26');
        $this->addSql('CREATE TABLE genero_videos (cod_videos INT NOT NULL, cod_genero INT NOT NULL, INDEX IDX_6302F61D43D46BFE (cod_videos), INDEX IDX_6302F61DCA7E87F6 (cod_genero), PRIMARY KEY(cod_videos, cod_genero)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video_formato (id_video_formato INT AUTO_INCREMENT NOT NULL, vide_for_nome VARCHAR(255) NOT NULL, PRIMARY KEY(id_video_formato)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE genero_videos ADD CONSTRAINT FK_6302F61D43D46BFE FOREIGN KEY (cod_videos) REFERENCES videos (id_videos)');
        $this->addSql('ALTER TABLE genero_videos ADD CONSTRAINT FK_6302F61DCA7E87F6 FOREIGN KEY (cod_genero) REFERENCES genero (id_genero)');
        $this->addSql('DROP TABLE video_tipo');
        $this->addSql('ALTER TABLE episodios ADD epis_titulo VARCHAR(255) NOT NULL, ADD epis_titulo_original VARCHAR(255) DEFAULT NULL, ADD epis_temporada VARCHAR(255) DEFAULT NULL, DROP epis_nome_traduzido, DROP epis_nome_original, CHANGE epis_descricao epis_descricao VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_29AA64325CA68A26 ON videos');
        $this->addSql('ALTER TABLE videos ADD cod_video_formato INT DEFAULT NULL, ADD vide_series TINYINT(1) DEFAULT NULL, DROP cod_video_tipo, DROP vide_temporada_numero, CHANGE vide_imagem_diretorio vide_imagem_diretorio VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE videos ADD CONSTRAINT FK_29AA643214C2013D FOREIGN KEY (cod_video_formato) REFERENCES video_formato (id_video_formato)');
        $this->addSql('CREATE INDEX IDX_29AA643214C2013D ON videos (cod_video_formato)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE videos DROP FOREIGN KEY FK_29AA643214C2013D');
        $this->addSql('CREATE TABLE video_tipo (id_video_tipo INT AUTO_INCREMENT NOT NULL, vide_tip_nome VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id_video_tipo)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE genero_videos');
        $this->addSql('DROP TABLE video_formato');
        $this->addSql('ALTER TABLE episodios ADD epis_nome_original VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP epis_titulo_original, DROP epis_temporada, CHANGE epis_descricao epis_descricao VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE epis_titulo epis_nome_traduzido VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('DROP INDEX IDX_29AA643214C2013D ON videos');
        $this->addSql('ALTER TABLE videos ADD vide_temporada_numero INT DEFAULT NULL, DROP vide_series, CHANGE vide_imagem_diretorio vide_imagem_diretorio VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE cod_video_formato cod_video_tipo INT DEFAULT NULL');
        $this->addSql('ALTER TABLE videos ADD CONSTRAINT FK_29AA64325CA68A26 FOREIGN KEY (cod_video_tipo) REFERENCES video_tipo (id_video_tipo)');
        $this->addSql('CREATE INDEX IDX_29AA64325CA68A26 ON videos (cod_video_tipo)');
    }
}
