<?php

namespace OleAass\Categories\Tests;

use Illuminate\Support\Facades\File;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
	protected function defineDatabaseMigrations()
	{
		$this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
	}
}
