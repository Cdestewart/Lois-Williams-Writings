<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Articles::all()->get();

        return view('writings.articles.index', $articles);
    }

    // public function create(CreateRequest $request)
    // {
    //     return view('seo.grass_photo_allocation.create');
    // }

    // public function store(StoreRequest $request)
    // {
    //     $input = $request->all();
    //     $input['weight'] = round($input['weight']) / 100;
    //     $input['created_user_id'] = $request->user()->id;

    //     $seoGrassPhotoAllocation = SeoGrassPhotoAllocation::create($input);

    //     return redirect('/seo/grass-photo-allocations');
    // }

    // public function edit(EditRequest $request, $seoGrassPhotoAllocationId)
    // {
    //     $seoGrassPhotoAllocation = SeoGrassPhotoAllocation::find($seoGrassPhotoAllocationId);
    //     if (!$seoGrassPhotoAllocation) {
    //         return redirect('/seo/grass-photo-allocations');
    //     }

    //     return view('seo.grass_photo_allocation.edit', [
    //         'seoGrassPhotoAllocation' => $seoGrassPhotoAllocation,
    //     ]);
    // }

    // public function update(UpdateRequest $request, $seoGrassPhotoAllocationId)
    // {
    //     $seoGrassPhotoAllocation = SeoGrassPhotoAllocation::find($seoGrassPhotoAllocationId);

    //     if ($seoGrassPhotoAllocation) {
    //         $input = $request->all();
    //         $input['weight'] = round($input['weight']) / 100;
    //         $input['updated_user_id'] = $request->user()->id;
    //         $seoGrassPhotoAllocation->update($input);
    //     }

    //     return redirect('/seo/grass-photo-allocations');
    // }

    // public function destroy(DeleteRequest $request, $seoGrassPhotoAllocationId)
    // {
    //     $seoGrassPhotoAllocation = SeoGrassPhotoAllocation::find($seoGrassPhotoAllocationId);
    //     if (!$seoGrassPhotoAllocation) {
    //         return redirect('/seo/grass-photo-allocations');
    //     }

    //     $seoGrassPhotoAllocation->deleted_user_id = $request->user()->id;
    //     $seoGrassPhotoAllocation->deleted_at = Carbon::now();
    //     $seoGrassPhotoAllocation->save();

    //     return redirect('/seo/grass-photo-allocations');
    // }
}
