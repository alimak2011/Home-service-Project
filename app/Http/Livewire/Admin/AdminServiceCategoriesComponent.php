<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ServiceCategory;
use Livewire\WithPagination;

class AdminServiceCategoriesComponent extends Component
{
    

    use WithPagination;

    public function deleteServiceCategory($id){
        $scategory = ServiceCategory::find($id);
        if($scategory->image){
            unlink('images/categories'.'/'.$scategory->image);
        }
        $scategory->delete();
        session()->flash('message',"service category has been deleted successfully");


    }
    public function render()
    {
        $scategories = ServiceCategory::paginate(10);
        return view('livewire.admin.admin-service-categories-component',['scategories'=>$scategories])->layout('layouts.base');
    }
}
