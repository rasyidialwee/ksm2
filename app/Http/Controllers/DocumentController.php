<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $documents = Document::paginate(50);
        $documents = Document::simplePaginate(10);

        return view('Document/index', [
            'documents' => $documents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Document/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentRequest $request)
    {
        // dd($request->all());
        $document = new Document();
        $document->nama = $request->nama;
        $document->tarikh_diterbitkan = $request->tarikh_diterbitkan;
        $document->nama_penulis = $request->nama_penulis;
        $document->disahkan_oleh = $request->disahkan_oleh;
        $document->tarikh_disahkan = $request->tarikh_disahkan;
        $document->save();

        return to_route('documents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('Document/edit', [
            'document' => $document
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        $document->nama = $request->nama;
        $document->tarikh_diterbitkan = $request->tarikh_diterbitkan;
        $document->nama_penulis = $request->nama_penulis;
        $document->disahkan_oleh = $request->disahkan_oleh;
        $document->tarikh_disahkan = $request->tarikh_disahkan;
        $document->save();

        return to_route('documents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return back();
    }
}
