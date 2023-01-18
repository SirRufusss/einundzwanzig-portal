<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use JoeDixon\Translation\Language;
use JoeDixon\Translation\Translation;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $array = Language::query()
                         ->select('id', 'name', 'language')
                         ->orderBy('name')
                         ->when(
                             $request->search,
                             fn(Builder $query) => $query
                                 ->where('name', 'ilike', "%{$request->search}%")
                                 ->orWhere('language', 'ilike', "%{$request->search}%")
                         )
                         ->when(
                             $request->exists('selected'),
                             fn(Builder $query) => $query->whereIn('language', $request->input('selected', [])),
                             fn(Builder $query) => $query->limit(10)
                         )
                         ->get()
                         ->map(function ($language) {
                             $language->translatedCount = Translation::query()
                                                                ->where('language_id', $language['id'])
                                                                ->whereNotNull('value')
                                                                ->where('value', '<>', '')
                                                                ->count();
                             $language->toTranslate = Translation::query()
                                                                 ->where('language_id', $language['id'])
                                                                 ->count();
                             return $language;
                         })
                         ->toArray();
        foreach ($array as $key => $item) {
            $array[$key]['name'] =  empty($item['name']) ? $item['language'] : $item['name'];
            $array[$key]['description'] = $item['language'] === 'en'
                ? '100% translated'
                : round($item['translatedCount'] ?? 1 / $item['toTranslate'] * 100).'% translated';
        }

        return response()->json($array);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  $language
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $language
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Language $language)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $language
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        //
    }
}
