<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Joinus;
// use Livewire\WithPagination;
use App\Exports\FormDataExport;
use Excel;


class FormDataList extends Component

{
    // use WithPagination;
    
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
