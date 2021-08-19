<?php

namespace OleAass\Categories;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use OleAass\Categories\Models\Category;

trait Categorizable
{
	public function categories(): MorphToMany
	{
		return $this->morphToMany(Category::class, 'model', 'categorizables');
	}
}
