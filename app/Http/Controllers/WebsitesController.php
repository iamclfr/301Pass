<?php

namespace App\Http\Controllers;

use App\Models\Websites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class WebsitesController extends Controller
{
    public function index()
    {
        return view('web-sites.index', [
           'websites' => Websites::all()
                ->where('userId', '==', auth()->id())
                ->sortBy('siteName')
        ]);
    }

    public function show(Websites $website)
    {
        return view('web-sites.show', [
            'website' => $website,
            'webSitePassword' => Crypt::decryptString($website->sitePassword)
        ]);
    }

    public function store() {
        $attributes = request()->validate([
            'siteName' => 'required',
            'siteType' => 'required',
            'siteUrl' => 'required',
            'siteEmail' => 'required',
            'siteImage' => 'required|file|image',
        ]);

        $attributes['userid'] = auth()->id();
        $attributes['siteSlug'] = Str::random(30);
        $attributes['sitePassword'] = Crypt::encryptString(request('sitePassword'));

        if (request('siteComment') == null) {
            $attributes['siteComment'] = '';
        } else {
            $attributes['siteComment'] = request('siteComment');
        }

        $attributes['siteImage'] = request()->file('siteImage')->store('webSitesImages');

        Websites::create($attributes);

        return redirect('/web-sites')->with('success', 'Succès ! Votre accès a bien était enregistée.');
    }
}
