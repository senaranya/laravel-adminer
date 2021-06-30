<?php

declare(strict_types=1);

namespace Aranyasen\LaravelAdminer;

use Illuminate\Support\Facades\Config;

/**
 * Autologin with current Laravel database credentials
 */
class AdminerAutologinController extends AdminerController
{
    public function index(): void
    {
        if (! isset($_GET['db'])) {
            $databaseConnection = Config::get('database.default');

            $databaseDriver = Config::get("database.connections.$databaseConnection.driver");
            if ($databaseDriver === "mysql") {
                $databaseDriver = "server";
            }

            $_POST['auth']['driver'] = $databaseDriver;
            $_POST['auth']['server'] = Config::get("database.connections.$databaseConnection.host") . ':' .
                Config::get("database.connections.$databaseConnection.port");
            $_POST['auth']['db'] = Config::get("database.connections.$databaseConnection.database");
            $_POST['auth']['username'] = Config::get("database.connections.$databaseConnection.username");
            $_POST['auth']['password'] = Config::get("database.connections.$databaseConnection.password");
        }

        parent::index();
    }
}
