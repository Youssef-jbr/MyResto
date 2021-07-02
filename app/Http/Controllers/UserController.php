<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function adresseForm() {
        $user = User::find(auth()->user()->id);
        if (isset($user->rue) && isset($user->cp) && isset($user->ville) && isset($user->telephone)) {
            return redirect()->route('commandes.livraison');
        }
        else {
            return view('commandes.livraison.index');
        }
    }

    public function storeAdresseForm(Request $request) {

        $user = User::find(auth()->user()->id);
        $user->rue = $request->rue;
        $user->cp = $request->cp;
        $user->ville = $request->ville;
        $user->telephone = $request->telephone;
        $user->save();

        return redirect()->route('commandes.livraison');
    }
}
