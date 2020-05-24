<?php

declare(strict_types=1);

namespace DoctrineMigrations;


use Core\Type\Point;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Types\Types;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200523161759_CreateCityTable extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $table = $schema->createTable('city');

        $table->addColumn('id', 'integer', [
            'autoincrement' => true,
        ]);
        $table->addColumn('title', 'string', [
            'length' => 255,
            'notnull' => true,
        ]);
        $table->addColumn('population', Types::FLOAT, [
            'notnull' => true,
            'default' => 0.0,
        ]);
        $table->addColumn('area', Types::FLOAT, [
            'notnull' => true,
            'default' => 0.0,
        ]);
        $table->addColumn('established', Types::DATE_MUTABLE, [
            'notnull' => true,
        ]);
        $table->addColumn('coordinates', Point::POINT, [
            'notnull' => true,
        ]);
        $table->addColumn('country_id', 'integer', [
            'notnull' => true,
        ]);
        $table->addColumn('region_id', 'integer', [
            'notnull' => true,
        ]);
        $table->addForeignKeyConstraint(
            'country',
            ['country_id'],
            ['id'],
            ['onUpdate' => 'CASCADE', 'onDelete' => 'CASCADE']);
        $table->addForeignKeyConstraint(
            'region',
            ['region_id'],
            ['id'],
            ['onUpdate' => 'CASCADE', 'onDelete' => 'CASCADE']);
        $table->addUniqueIndex(['id']);
        $table->addIndex(['region_id', 'country_id']);

        $table->setPrimaryKey(['id']);
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
