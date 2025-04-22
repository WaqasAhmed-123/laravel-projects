<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string $task_name
 * @property Carbon|null $start_time
 * @property Carbon|null $end_time
 * @property string|null $description
 * @property string|null $file_path
 * @property int $is_active
 * @property Carbon|null $created_at
 *
 * @package App\Models
 */
class Task extends Model
{
	protected $table = 'tasks';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'is_active' => 'int'
	];

	protected $dates = [
		'start_time',
		'end_time'
	];

	protected $fillable = [
		'user_id',
		'task_name',
		'start_time',
		'end_time',
		'description',
		'file_path',
		'is_active'
	];
}
