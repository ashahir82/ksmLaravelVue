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
        //
        $documents = Document::paginate(10);
        return view('documents.index', [
            'page' => 'Documents Page Index',
            'subpage' => 'Senarai dokumendokumen Jabatan',
            'documents' => $documents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('documents.create', [
            'page' => 'New Document',
            'subpage' => 'Tambah senarai dokumen baru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentRequest $request)
    {
        //
        $document = new Document();
        $document->name = $request->name;
        $document->nama_penulis = $request->nama_penulis;
        $document->tarikh_diterbitkan = $request->tarikh_diterbitkan;
        $document->nama_pelulus = $request->nama_pelulus;
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
        //
        return view('documents.edit', [
            'page' => 'Edit Document',
            'subpage' => 'Kemaskini maklumat dokumen',
            'document' => $document,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        //
        $document->name = $request->get('name');
        $document->nama_penulis = $request->get('nama_penulis');
        $document->tarikh_diterbitkan = $request->get('tarikh_diterbitkan');
        $document->nama_pelulus = $request->get('nama_pelulus');
        $document->tarikh_disahkan = $request->get('tarikh_disahkan');
        $document->save();

        return to_route('documents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
        $document->delete();
        return redirect()->route('documents.index');
    }
}
