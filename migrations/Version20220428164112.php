<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220428164112 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE concerne (id INT AUTO_INCREMENT NOT NULL, quantite INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE concerne_produit (concerne_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_E9514A566406FEF1 (concerne_id), INDEX IDX_E9514A56F347EFB (produit_id), PRIMARY KEY(concerne_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE concerne_produit ADD CONSTRAINT FK_E9514A566406FEF1 FOREIGN KEY (concerne_id) REFERENCES concerne (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE concerne_produit ADD CONSTRAINT FK_E9514A56F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concerne_produit DROP FOREIGN KEY FK_E9514A566406FEF1');
        $this->addSql('DROP TABLE concerne');
        $this->addSql('DROP TABLE concerne_produit');
    }
}
