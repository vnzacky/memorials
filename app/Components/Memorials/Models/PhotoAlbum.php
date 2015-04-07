<?php namespace App\Components\Memorials\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PhotoAlbum extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'granit_photo_albums';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['mem_id', 'title', 'description', 'created_by', 'state'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function memorial()
    {
        return $this->belongsTo(Memorial::class, 'mem_id', 'id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photoItems()
    {
        return $this->hasMany(PhotoItem::class, 'album_id', 'id');
    }

}