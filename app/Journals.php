<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\SoftDeletes;

class Journals extends Model
{
    use SoftDeletes;
    protected $table = 'journal';
    //Primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamps = true;

    protected $fillable = ['title','description','field','user_id','link','country','institution','price','image','status'];
    public function articles(){
        // return $this->hasMany('articles','journal_id','id');
        return $this->hasMany('App\Articles', 'journal_id', 'id');
    }
}
