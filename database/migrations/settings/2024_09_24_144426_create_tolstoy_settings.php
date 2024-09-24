<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('tolstoy.enabled', false);
        $this->migrator->add('tolstoy.key');
    }

    public function down()
    {
        $this->migrator->delete('tolstoy.enabled');
        $this->migrator->delete('tolstoy.key');
    }
};
