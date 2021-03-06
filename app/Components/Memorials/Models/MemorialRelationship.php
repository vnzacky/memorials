<?php namespace App\Components\Memorials\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class MemorialRelationship extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'granit_memorial_relationships';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'avatar', 'birthday', 'death', 'biography', 'obituary', 'buried', 'lat', 'lng', 'created_by', 'timeline'];

    /**
     * Relationship with User table
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function memorial(){
        return $this->belongsTo(Memorial::class);
    }
}