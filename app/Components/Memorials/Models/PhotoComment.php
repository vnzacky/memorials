<?php namespace App\Components\Memorials\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PhotoComment extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'granit_photo_comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['photo_id', 'user_id', 'text', 'like', 'parent_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photoItem()
    {
        return $this->belongsTo(PhotoItem::class, 'photo_id', 'id');
    }

}