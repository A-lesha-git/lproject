<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Simples extends Model
{
    protected $fillable = [
        'title',
        'name',
        'desc',
        'published_at'
    ]; 
    
    // setNameAttribute
    public function setPublishedAtAttribute($date){
        // устанавливает дату  гг-мм-дд 
        //$this->attributes['published_at'] = Carbon::parse($date)
        // данный метод устанавливает более точную дату гг-мм-дд чч:мм:сс
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }
    
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());    
    }
    
    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>', Carbon::now());    
    }
            
    }
