<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Storage;
use Kreait\Firebase\Storage\UploadBuilder;
use Google\Cloud\Storage\StorageClient;
use Kreait\Firebase\Auth\SignInResult\SignInResult;
use Kreait\Firebase\Exception\FirebaseException;
use Google\Cloud\Firestore\FirestoreClient;
use Session;
 class FirebaseController extends Controller
{
    private $database;

    public function __construct()
    {
        // $this->database = $database;
        $this->tablename = 'Books';
        $this->database = \App\Services\FirebaseService::connect();
    }
     
    public function index() 
    {        

     $data=  $this->database->getReference('Books')->getValue();
     $categories =  $this->database->getReference('category_book')->getValue();
     return view('index')->with(['data'=> $data, 'categories' =>$categories]);
    //     // return view('index',compact('data'));

     }

     public function getOrders() 
    {
        $data=  $this->database->getReference('Orders')->getValue();
        return view('show_orders')->with(['data'=> $data]);


    }

     
    public function create() {
        return view('addbook');
    }
    public function add_cat() {
        return view('add_cat');
    }
    public function store_cat(Request $request) {
        $file = $request->file('image');
        $tempFilePath = $file->getPathname();
            $storagePath = 'images/' . $file->getClientOriginalName();
    
        $storage = new StorageClient([
            'projectId' => 'booklibrary-9dc9c',
            'keyFilePath' => 'storage/laravelfirebase.json',
        ]);
            $bucket = $storage->bucket('booklibrary-9dc9c.appspot.com');
            $bucket->upload(
            fopen($file->getPathname(), 'r'),
            [
                'name' => $storagePath,
            ]
        );  
        $publicUrl = $bucket->object($storagePath)->signedUrl(new \DateTime('tomorrow'));
        $postData = [
            'id' => $request->input('id') ,
            'cat_name' => $request->input('cat_name'),
            'image'=>$publicUrl
          ];
     
        
        $postRef = $this->database->getReference('category_book')->push($postData);
         if($postRef){
            return redirect('Books')->with('status','Categoty Added Successfully');
         }   
         else{
            return redirect('Books')->with('status','Categoty Not Successfully');
    
         }
     }
    
    public function store(Request $request) {
        $file = $request->file('image');
    $tempFilePath = $file->getPathname();
    $storagePath = 'images/' . $file->getClientOriginalName();
    $storage = new StorageClient([
        'projectId' => 'booklibrary-9dc9c',
        'keyFilePath' => 'storage/laravelfirebase.json',
    ]);
    $bucket = $storage->bucket('booklibrary-9dc9c.appspot.com');
    $bucket->upload(
        fopen($file->getPathname(), 'r'),
        [
            'name' => $storagePath,
        ]
    );
    $publicUrl = $bucket->object($storagePath)->signedUrl(new \DateTime('tomorrow'));

    $postData = [
                'name' => $request->input('name') ,
                'cat_book' => $request->input('cat_book'),
                'name_auther' => $request->input('name_auther'),
                'count' => $request->input('count') ,
                'pages' => $request->input('pages') ,
                 'price' => $request->input('price') ,
                'description' => $request->input('description') ,
                'image'=>$publicUrl
             ];
         
            
            $postRef = $this->database->getReference('Books')->push($postData);
             if($postRef){
                return redirect('Books')->with('status','Book Added Successfully');
             }   
             else{
                return redirect('Books')->with('status','Book Not Successfully');
        
             }
        }
        public function view($id) 
        {
             $key=$id;
            $editdata = $this->database->getReference('Books')->getChild($key)->getValue();
            $categories =  $this->database->getReference('category_book')->getValue();
            if($editdata){
                 return view('view',compact('editdata','key'))->with('categories', $categories);
            }   
             else{
                return redirect('Books')->with('status','Book ID Not Found');    
            }
        }  
        public function send($id)
        {
           $key=$id;
           $keyPath = "/Orders/$key/state";
             $data = $this->database->getReference($keyPath);
             $newStateValue = 'قيد الارسال'; // Replace this with the new value you want to set
            $data->set($newStateValue);
            $Orders = $this->database->getReference('Orders')->getValue();

            return view('show_orders')->with('data', $Orders);

 
   
        }
      public function edit($id) 
{
    $key=$id;
    $editdata = $this->database->getReference('Books')->getChild($key)->getValue();
    $categories =  $this->database->getReference('category_book')->getValue();
    if($editdata){
         return view('edit',compact('editdata','key'))->with('categories', $categories);
 
    }   
     else{
        return redirect('Books')->with('status','Book ID Not Found');    
    }
}             
        public $tempImage;

    public function update(Request $request, $id)
    {
   
        if ($request->hasFile('image')) { 

            $file = $request->file('image');

            // Get the temporary path of the uploaded file
            $tempFilePath = $file->getPathname();
        
            // Set the desired path to store the image in Firebase Storage
            $storagePath = 'images/' . $file->getClientOriginalName();
        
            $storage = new StorageClient([
                'projectId' => 'booklibrary-9dc9c',
                'keyFilePath' => 'storage/laravelfirebase.json',
            ]);
        
            // Get the bucket object
            $bucket = $storage->bucket('booklibrary-9dc9c.appspot.com');
        
            // Upload the file to the bucket
            $bucket->upload(
                fopen($file->getPathname(), 'r'),
                [
                    'name' => $storagePath,
                ]
            );
        
            // Optionally, you can retrieve the public URL of the uploaded image
            $publicUrl = $bucket->object($storagePath)->signedUrl(new \DateTime('tomorrow'));

            $updateData = [
                'name' => $request->input('name') ,
                'cat_book' => $request->input('cat_book'),
                'name_auther' => $request->input('name_auther'),
                'count' => $request->input('count') ,
                'pages' => $request->input('pages') ,
                 'price' => $request->input('price') ,
                'description' => $request->input('description') ,
                'image'=>$publicUrl
             ];
        }else{
            $updateData = [
            'name' => $request->input('name') ,
            'cat_book' => $request->input('cat_book'),
            'name_auther' => $request->input('name_auther'),
            'count' => $request->input('count') ,
            'pages' => $request->input('pages') ,
             'price' => $request->input('price') ,
            'description' => $request->input('description') ,
         ];
        }
       
        $key=$id;
        
        // $imagePath = $request['image']->store('user_images', 'public');
         $res_updated = $this->database->getReference($this->tablename.'/'.$key)->update($updateData);
         if($res_updated){

            return redirect('Books')->with('status','Book updated Successfully');
        }   
         else{
            return redirect('Books')->with('status','Book Not updated Successfully');
         }
     }
 
     public function destroy($id)
{
    $key=$id;

   $del_data = $this->database
        ->getReference($this->tablename.'/'.$key)
        ->remove();

        if($del_data){
            return redirect('Books')->with('status','Book deleted Successfully');
        }   
         else{
            return redirect('Books')->with('status','Book Not deleted ');
    
         }
        }
 
   
    }
 



   