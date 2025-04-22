<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string|null $contact
 * @property string $email
 * @property string $password
 * @property int $role
 * @property int $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'role' => 'int',
		'is_active' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'contact',
		'email',
		'password',
		'role',
		'is_active'
	];
}
