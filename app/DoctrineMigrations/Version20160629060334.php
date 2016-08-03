<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use LoLApi\ApiClient;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160629060334 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $table = $schema->createTable('regions');
        $table->addColumn('id', 'integer')->setNotnull(true)->setAutoincrement(true);
        $table->addColumn('region', 'string')->setNotnull(true);
        $table->setPrimaryKey(['id']);
    }
    public function postUp(Schema $schema)
    {
        parent::postUp($schema);
        $this->connection->insert('regions', ['region' => ApiClient::REGION_RU]);
        $this->connection->insert('regions', ['region' => ApiClient::REGION_BR]);
        $this->connection->insert('regions', ['region' => ApiClient::REGION_EUNE]);
        $this->connection->insert('regions', ['region' => ApiClient::REGION_EUW]);
        $this->connection->insert('regions', ['region' => ApiClient::REGION_KR]);
        $this->connection->insert('regions', ['region' => ApiClient::REGION_LAN]);
        $this->connection->insert('regions', ['region' => ApiClient::REGION_LAS]);
        $this->connection->insert('regions', ['region' => ApiClient::REGION_NA]);
        $this->connection->insert('regions', ['region' => ApiClient::REGION_OCE]);
        $this->connection->insert('regions', ['region' => ApiClient::REGION_TR]);
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $schema->dropTable('regions');
    }
}
