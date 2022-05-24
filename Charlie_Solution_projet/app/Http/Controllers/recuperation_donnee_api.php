<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Fact;
use Exception;
use Illuminate\Support\Facades\Redirect;

class recuperation_donnee_api extends Controller
{
    #Va chercher les données au format JSON de l'API
    #Les données sont stockées dans la varaiable $response
    #Return les données de l'API sous la forme d'un tableau
    public function recuperation_donnee()
    {

        try{
            $client = new Client(); //GuzzleHttp\Client
            $url = "https://dog-facts-api.herokuapp.com/api/v1/resources/dogs/all";


            $response = $client->request('GET', $url, [
                'verify'  => false,
            ]);

            $les_facts = json_decode($response->getBody());

            foreach($les_facts as $une_fact){
                // $myRequest = new \Illuminate\Http\Request();
                // $myRequest->setMethod('POST');
                // $myRequest->request->add(['fact' => $une_fact->fact]);
                FactController::ajout_donnee_api($une_fact->fact);
            }
        }
        catch(Exception){
            $erreur = 'test';
            return redirect()->route('erreur_api', compact('erreur'));

        }
        return redirect()->route('accueil');
    }
}
