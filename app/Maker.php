<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Maker extends Model
{
	protected $table = 'makers';

	protected $primaryKey = 'serie';

	protected $fillable = ['id', 'name', 'phone'];

	protected $hidden = ['serie', 'created_at', 'updated_at'];

	public function vehicles()
	{
		return $this->hasMany('App\Maker');
	}
}