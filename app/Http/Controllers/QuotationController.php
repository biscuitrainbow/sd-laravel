<?php

namespace App\Http\Controllers;

use App\Condition;
use App\Document;
use App\DocumentHasMaterial;
use DB;
use Illuminate\Http\Request;


class QuotationController extends Controller {
    public function indexQuotation() {
        $inquiries = Document::with('customer')->where('document_type_id', '1')->get();
        return view('presale.quotation.quotation-create', compact('inquiries'));
    }

    public function createQuotationForm($id) {
        $items = DocumentHasMaterial::with('material')->where('document_id', $id)->get();
        $inquiry = Document::with('customer')->where('id', $id)->where('document_type_id', '1')->first();
        $generalCondition = Condition::where('condition_type_id', 1)->get();

        $conditions = DB::select(
            "select *
             from condition_material
             join conditions
             on(conditions.id = condition_material.condition_id)
             join materials
             on (condition_material.material_id = materials.id)
             join document_has_materials
             on (document_has_materials.material_id = materials.id)
             join documents
             on (document_has_materials.document_id = documents.id)
             where documents.id = '$id'
            "
        );

        return view('presale.quotation.quotation-create-form', compact('conditions', 'inquiry', 'items', 'generalCondition'));

    }

    public function displayQuotation() {
        return view('presale.quotation.quotation-display');
    }

    public function create(Request $request) {

        $quotation = new Document();
        $quotation->document_type_id = 2;
        $quotation->condition_id = $request->input('condition_id');
        $quotation->document_id = $request->input('inquiry_id');
        $quotation->customer_id = $request->input('customer_id');
        $quotation->request_date = $request->input('request_date');
        $quotation->description = $request->input('description');
        $quotation->save();
        $quotation->id;


        for ($i = 0; $i < sizeof($request->input('materials')); $i++) {
            $document_has_material = new DocumentHasMaterial();
            $document_has_material->document_id = $quotation->id;
            $document_has_material->material_id = $request->input('materials')[$i];
            $document_has_material->quantity = $request->input('quantity')[$i];
            $document_has_material->save();
        }

        return $request->all();
    }
}
