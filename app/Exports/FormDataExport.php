<?php

namespace App\Exports;

use App\Models\Joinus;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FormDataExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
               'Id',
               'Fullname',
               'Date_of_birth',
               'Gender',
               'Preffered Pronouns',
               'Identify as a person',
               'Email',
               'Phone',
               'Social media',
               'Name_of_organization',
               'Expertise',
               'Best_skills',
               'Get_to_know_about',
               'Involved_in_other_group',
               'Join_our_community',
               'Chance_to_lead_a_project',
               'Hours_per_week'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return AppModelsJoinus::all();
        return collect(Joinus::getFormData());

    }
}
