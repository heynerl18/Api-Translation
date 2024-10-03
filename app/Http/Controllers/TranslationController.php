<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get only projects with tokens
        try {
            $projects = DB::table('projects as pj')
              ->join('project_has_tokens as pht', 'pj.id', 'pht.project_id')
              ->select('pj.id', 'pj.title')
              ->distinct()
              ->get();
            return response()->json($projects);
        } catch (\Exception $e) {
            return response()->json(['error' => 'projects not found'], 404);
        }
    }

    public function getLocales(){
        // Get all locales
        try {
            $locales = DB::table('locales')
                ->select('code')
                ->get();
    
            return response()->json($locales);
        } catch (\Exception $e) {
            return response()->json(['error' => 'locales not found'], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $projectId)
    {
        // show if the project has tokens
        try {
            $projectTokens = DB::table('project_has_tokens as pht')
                ->join('tokens as t', 'pht.token_id', '=', 't.id')
                ->select('t.id', 't.token')
                ->where('pht.project_id', $projectId)
                ->get();

            return response()->json($projectTokens, 200);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Project_has_tokens not found'], 404);
        }
    }

    public function translate(Request $request){

        /*$request->validate([
            'project_id' => 'required|uuid',
            'token_id' => 'required|string',
            'locale' => 'required|string',
        ]);*/

        $projectId = $request->input('project_id');
        $tokenId = $request->input('token_id');
        $localeCode = $request->input('locale');

        // Check if the requested location is available for the project
        $localeAvailable = DB::table('project_has_locales')
           ->where('project_id', $projectId)
           ->where('locale_code', $localeCode)
           ->exists();

         // If locale is not available, look for base locale (language_base = true)
        if(!$localeAvailable){
            $fallbackLocale = DB::table('project_has_locales')
              ->where('project_id', $projectId)
              ->where('language_base', true)
              ->first();

            // If a base locale is not found, return an error
            if(!$fallbackLocale){
                return response()->json(['message' => '¡Base location not available!'], 404);
            }

            // Using base locale as fallback
            $localeCode = $fallbackLocale->locale_code;
        }

        // Search for translation with Query Builder
        $translation = DB::table('translations')
            ->where('project_id', $projectId)
            ->where('token_id', $tokenId)
            ->where('locale_code', $localeCode)
            ->first();
        
        if($translation){
            return response()->json(['translation' => $translation->translation]);
        }
         
        // If no translation exists, return an error
        return response()->json(['translation' => 'Translation not available'], 404);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
