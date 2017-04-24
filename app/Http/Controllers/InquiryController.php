<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Document;
use App\DocumentHasMaterial;
use App\Inquiry;
use App\Material;
use Illuminate\Http\Request;

class InquiryController extends Controller {
    public function showCreate() {
        $customers = Customer::all();
        $materials = Material::all();
        return view('presale.inquiry.inquiry-create', compact('materials', 'customers'));
    }

    public function create(Request $request) {

        $inquiry = new Document();
        $inquiry->document_type_id = 1;
        $inquiry->customer_id = $request->input('customer_id');
        $inquiry->save();
        $inquiry->id;

        foreach ($request->input('materials') as $material) {
            $document_has_material = new DocumentHasMaterial();
            $document_has_material->document_id = $inquiry->id;
            $document_has_material->material_id = $material;
            $document_has_material->save();
        }


//        $inquiry->save();
//
//        $status = "Create Successfully";
//        return view('material . material - status', compact('status'));
    }

    public function displayInquiries() {
        return view('presale . inquiry . inquiry - display');
    }
}
