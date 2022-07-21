<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Joinus;
// use Livewire\WithPagination;
use App\Exports\FormDataExport;
use Excel;
use File;
use ZipArchive;


class FormDataList extends Component

{
    // use WithPagination;
   public function downloadZip()
    {
        $zip = new ZipArchive;
   
        $fileName = 'documents.zip';
   
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
            $files = File::files(public_path('file'));
   
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
             
            $zip->close();
        }
    
        return response()->download(public_path($fileName));
    }
    public function deleteItem($id) {
        $getItem = Joinus::where('id', $id)->first();
        $getItem->delete();
        // $this->dataList = $this->dataList->except($id);
        session()->flash('message',"form deleted successfully");
    }

        public function exportIntoExcel() {
        return Excel::download(new FormDataExport,'joinUsFormList.xlsx');
    }

    public function render()
    {
        return view('livewire.form-data-list',[
            'dataList'=> Joinus::latest()->paginate(20)
        ]);
    }
}
