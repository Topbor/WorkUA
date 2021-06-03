<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
  
    public function home() {
        return view('home');
    }

    public function new() {
        return view('new');
    }
    public function get() {
        return view('getstarted');
    }
    public function login() {
        return view('login');
    }
    public function register() {
        return view('register');
    }
    public function Logination() {     
        try{  
            $u=\DB::table('emploers')->where('username',request('login'))->get();
                if($u==[]){
                    return view('loginfail');
                }
                else{
                    foreach ($u as $i) {
                        
                        if($i->password==request('pass')){
                            
                            return view('new'); 
                        }
                        else{
                            
                            return view('loginfail');
                        }
                    }
                }    
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX);
            return view('loginfail'); 
        }
    }

    public function Registration() {     
        try{  
            $passHash = password_hash( request('pass'),PASSWORD_DEFAULT);
            $u=\DB::table('emploers')->where('username',request('login'))->get();
            $email =filter_var(request('mail'), FILTER_VALIDATE_EMAIL);
            if(request('login')==""||request('mail')==""||request('tel')==""||request('pass')==""){
                return view('registerfail2'); 
            }
                if (!$email) {
                    return view('registerfail3');
                }
                if($u->isEmpty()){
                    \DB::insert('insert into emploers (username, email, phonenumber, password) values (?, ?, ?, ?)', [request('login'), request('mail'), request('tel'), request('pass')]);
                    return view('registerdone');
                    
                }
                else{
                    return view('registerfail');
                }    
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX);
            return view('registerfail2'); 
        }
    }
    public function Vacations() {
        try{  
            \DB::insert('insert into vacations (title, company, description, type, price) values (?, ?, ?, ?, ?)', [request('title'), request('comp'), request('disc'), request('type'),request('price')]);
            return view('vacations.store');
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX);
            return view('vacations.err'); 
        }
    }
    public function VacationsCreated() {
        return view('vacations.created');
    }
    public function VacationsShowAll() {
        $i=\DB::table('vacations')->get();
        //dd($i);
    return view('vacations.show.all', [
        'items'=>$i
    ]);
    }
    public function VacationsShowTypeC() {
        $i=\DB::table('vacations')->whereIn('type', ['C#', 'C++'])->get();
        return view('vacations.show.c', [
            'items'=>$i
        ]);
    }
    public function VacationsShowTypeJS() {
        $i=\DB::table('vacations')->whereIn('type', ['Java Script', 'React','Angular'])->get();
        return view('vacations.show.js', [
            'items'=>$i
        ]);
    }
    public function VacationsShowTypePHP() {
        $i=\DB::table('vacations')->whereIn('type', ['PHP', 'Ruby'])->get();
    return view('vacations.show.php', [
        'items'=>$i 
    ]);
    }
    public function VacationsShowTypeOther() {
        $i=\DB::table('vacations')->whereIn('type', ['Pyton', 'Assembler'])->get();
        return view('vacations.show.other', [
            'items'=>$i
        ]);
    }
    public function VacShow($id) {
        $i=\DB::table('vacations')->where('id',$id)->get();
        return view('vacations.show.vacshow', [
            'items'=>$i
        ]);
    }
}
