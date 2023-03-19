<?php

declare(strict_types=1);

namespace Tests\Feature;

use Aranyasen\LaravelAdminer\AdminerAutologinController;
use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase;

class AdminerTest extends TestCase
{
    // Check if /adminer route loads
    // Add a new table using laravel migrations, assert if it shows
    // Add a few rows, assert those show
    // remove the new table, assert if it doesn't show
    // Add a table, column, data using adminer
    // Test cookie

    /**
     * @test
     */
    public function does_adminer_route_load_properly(): void
    {
        self::markTestIncomplete("Test fails with session error. Need to be fixed");
        Route::any('adminer', [AdminerAutologinController::class, 'index']);

        $this
            // ->startSession()
            ->get('adminer')
            ->assertOk();
    }
}
