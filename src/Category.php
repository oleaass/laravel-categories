<?php

namespace OleAass\Categories;

use Illuminate\Database\Eloquent\Model;
use OleAass\Sluggable\Sluggable;

class Category extends Model
{
	use Sluggable;

	protected $fillable = ['name', 'slug'];

	public function getSlugOptions(): array
	{
		return [
			'source' => 'name'
		];
	}
}
