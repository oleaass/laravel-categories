<?php

namespace OleAass\Categories\Tests;

use Illuminate\Support\Facades\Schema;

class CategoryDatabaseTest extends TestCase
{
	/** @test */
	public function create_categories_table(): void
	{
		$this->assertTrue(Schema::hasTable('categories'));
	}

	/** @test */
	public function create_categorizables_table(): void
	{
		$this->assertTrue(Schema::hasTable('categorizables'));
	}

	/** @test */
	public function categories_table_has_expected_columns(): void
	{
		$this->assertTrue(Schema::hasColumns('categories', ['id', 'name', 'slug', 'created_at', 'updated_at']));
	}

	/** @test */
	public function categorizables_table_has_expected_columns(): void
	{
		$this->assertTrue(Schema::hasColumns('categorizables', ['category_id', 'model_id', 'model_type']));
	}
}
