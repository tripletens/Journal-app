<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Articles extends Model
{
    //
    use SoftDeletes;
    protected $table = 'articles';
    //Primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamps = true;


    protected $fillable = ['title', 'body', 'author_id', 'journal_id', 'page_start', 'page_end', 'body', 'current_volume', 'file_name'];
    public function journal()
    {
        return $this->belongsTo('App\Journal','journal_id','id');
    }
}
