<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirebaseModel extends Model
{
    use HasFactory;
    // private $database;

    // public function __construct()
    // {
    //     $this->database = app('firebase.database');
    // }

    // public function getAll()
    // {
    //     $reference = $this->database->getReference('Book');
    //     $snapshot = $reference->getSnapshot();

    //     return $snapshot->getValue();
    // }

    // public function add($data)
    // {
    //     $reference = $this->database->getReference('Book')->push($data);

    //     return $reference->getKey();
    // }

    // public function update($id, $data)
    // {
    //     $reference = $this->database->getReference('Book/' . $id);
    //     $reference->update($data);
    // }

    // public function delete($id)
    // {
    //     $reference = $this->database->getReference('Book/' . $id);
    //     $reference->remove();
    // }
}
