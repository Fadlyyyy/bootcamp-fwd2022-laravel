<?php

namespace App\Models\ManagementAcces;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
   //use HasFactory;
   use SoftDeletes;
    
   //declare table
   public $table = 'permission_role';

   //this file must type date yyyy-mm-dd hh:mm:ss
   protected $dates = [
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   //declare fillable
   protected $fillable = [

       'permission_id',
       'role_id',
       'created_at',
       'updated_at',
       'deleted_at',

   ];
}
