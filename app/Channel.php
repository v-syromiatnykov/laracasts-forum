<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Channel
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Thread[] $threads
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Channel extends Model
{
	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function threads()
	{
		return $this->hasMany(Thread::class);
	}
}
