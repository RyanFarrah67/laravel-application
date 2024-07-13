<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Controller
{
    public function index()
    {
        // Creating a collection from an array
        $collectionFromArray = collect([1, 2, 3, 4, 5]);

        // Creating a collection using the make method
        $collectionFromMake = Collection::make(['apple', 'banana', 'cherry']);

        // Creating an empty collection
        $emptyCollection = new Collection();

        // You can now work with these collections as needed
        // For example, to get the first item of $collectionFromArray:
        $firstItem = $collectionFromArray->first();

        return view('welcome');
    }
}
