<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class ContactController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'tds';
    }
    public function index()
    {
        $tds = $this->database->getReference($this->tablename)->getValue();
        return view('firebase.contact.index', compact('tds'));
    }
}
