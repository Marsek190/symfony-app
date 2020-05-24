<?php

declare(strict_types=1);

namespace DoctrineMigrations;


use Core\Type\Point;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200523155808_CreateTableCountry extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $table = $schema->createTable('country');

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
        $table->addColumn('capital', 'string', [
            'notnull' => true,
        ]);
        $table->addColumn('legislature', 'string', [
            'length' => 255,
            'notnull' => true,
        ]);
        $table->addColumn('flag', 'string', [
            'length' => 255,
            'notnull' => true,
        ]);
        $table->addColumn('largest_city', 'string', [
            'length' => 255,
            'notnull' => true,
        ]);
        $table->addColumn('national_language', 'string', [
            'length' => 255,
            'notnull' => true,
        ]);
        $table->addColumn('coordinates', Point::POINT, [
            'notnull' => true,
        ]);
        $table->addUniqueIndex(['id']);

        $table->setPrimaryKey(['id']);
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
