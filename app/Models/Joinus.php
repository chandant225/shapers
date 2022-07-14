<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Joinus extends Model
{
    use HasFactory;

    protected $fillable = ['fullname','date_of_birth','gender','preffered_pronouns','identify_as_a_person','email','phone','social_media','name_of_organization','expertise','best_skills','get_to_know_about','involved_in_other_group','join_our_community','chance_to_lead_a_project','hours_per_week','cv_file'];

    protected $casts = [
    'identify_as_a_person' => 'array'
];

public static function getFormData() {
    $records = DB::table('joinuses')->select('id','fullname','date_of_birth','gender','preffered_pronouns','identify_as_a_person','email','phone','social_media','name_of_organization','expertise','best_skills','get_to_know_about','involved_in_other_group','join_our_community','chance_to_lead_a_project','hours_per_week')->get()->toArray();
    return $records;
}
}


