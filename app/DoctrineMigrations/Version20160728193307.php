<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160728193307 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $matches = $schema->createTable('matches');
        $matches->addColumn('match_id', 'bigint')->setNotnull(true);
        $matches->addColumn('map_id', 'integer')->setNotnull(true);
        $matches->addColumn('match_duration', 'bigint')->setNotnull(true);
        $matches->addColumn('match_mode', 'string')->setNotnull(true);
        $matches->addColumn('match_type', 'string')->setNotnull(true);
        $matches->addColumn('match_version', 'string')->setNotnull(true);
        $matches->addColumn('queue_type', 'string')->setNotnull(true);
        $matches->addColumn('region', 'string')->setNotnull(true);
        $matches->addColumn('season', 'string')->setNotnull(true);
        $matches->addColumn('team_win', 'integer')->setNotnull(true);
        $matches->addColumn('player_1_sid', 'bigint')->setNotnull(true);
        $matches->addColumn('player_1_champ', 'integer')->setNotnull(true);
        $matches->addColumn('player_1_team_id', 'integer')->setNotnull(true);
        $matches->addColumn('player_2_sid', 'bigint')->setNotnull(true);
        $matches->addColumn('player_2_champ', 'integer')->setNotnull(true);
        $matches->addColumn('player_2_team_id', 'integer')->setNotnull(true);
        $matches->addColumn('player_3_sid', 'bigint')->setNotnull(true);
        $matches->addColumn('player_3_champ', 'integer')->setNotnull(true);
        $matches->addColumn('player_3_team_id', 'integer')->setNotnull(true);
        $matches->addColumn('player_4_sid', 'bigint')->setNotnull(true);
        $matches->addColumn('player_4_champ', 'integer')->setNotnull(true);
        $matches->addColumn('player_4_team_id', 'integer')->setNotnull(true);
        $matches->addColumn('player_5_sid', 'bigint')->setNotnull(true);
        $matches->addColumn('player_5_champ', 'integer')->setNotnull(true);
        $matches->addColumn('player_5_team_id', 'integer')->setNotnull(true);
        $matches->addColumn('player_6_sid', 'bigint')->setNotnull(true);
        $matches->addColumn('player_6_champ', 'integer')->setNotnull(true);
        $matches->addColumn('player_6_team_id', 'integer')->setNotnull(true);
        $matches->addColumn('player_7_sid', 'bigint')->setNotnull(true);
        $matches->addColumn('player_7_champ', 'integer')->setNotnull(true);
        $matches->addColumn('player_7_team_id', 'integer')->setNotnull(true);
        $matches->addColumn('player_8_sid', 'bigint')->setNotnull(true);
        $matches->addColumn('player_8_champ', 'integer')->setNotnull(true);
        $matches->addColumn('player_8_team_id', 'integer')->setNotnull(true);
        $matches->addColumn('player_9_sid', 'bigint')->setNotnull(true);
        $matches->addColumn('player_9_champ', 'integer')->setNotnull(true);
        $matches->addColumn('player_9_team_id', 'integer')->setNotnull(true);
        $matches->addColumn('player_10_sid', 'bigint')->setNotnull(true);
        $matches->addColumn('player_10_champ', 'integer')->setNotnull(true);
        $matches->addColumn('player_10_team_id', 'integer')->setNotnull(true);
        $matches->setPrimaryKey(['match_id']);
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $schema->dropTable('matches');
    }
}
