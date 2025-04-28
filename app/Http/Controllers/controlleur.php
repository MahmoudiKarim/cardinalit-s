<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\employe;
use App\Models\cnss;
use App\Models\conge;


use App\Models\etudiant;
use App\Models\evaluer;
use App\Models\matiere;


class controlleur extends Controller
{
    public function oneToOne(){

        try{
            DB::beginTransaction();
            $e= new employe();
            $e->cin= "EE361118";
            $e->nom= "hakim";
            $e->prenom= "mohamed";
            $e->salaire= 10000;
            $e->date_emb= "2019-10-10";
            $e->save();

            $c=new cnss();
            $c->mat="cn123";
            $c->date_mat="2019-12-12";
            $e->CNSS()->save($c);
                DB::commit();
            } catch(\PDOException $e) {
                DB::rollback();
            }
        }

    public function OneToMany(){
        try{
            DB::beginTransaction();
            $r=employe::where('cin','EE361118')->first();
            $c1=new conge();
            $c1->duree=4;
            $c1->date_conge='2025-01-01';

            $c2=new conge();
            $c2->duree=12;
            $c2->date_conge='2025-04-17';
            $r->CONGE()->saveMany([$c1, $c2]);
            DB::commit();
        }
        catch(\PDOException $e) {
            DB::rollback();
        }
        
        


    }

    public function ManyTOMany(){
        try{
            DB::beginTransaction();
            $e=new etudiant();
            $e->numE=1;
            $e->nomE='Khalil';
            $e->prenomE='imaran';
            $e->save();

            $m1=new matiere();
            $m1->codeM=1;
            $m1->nomM='java';
            $m1->coeff=3;

            $m2=new matiere();
            $m2->codeM=2;
            $m2->nomM='python';
            $m2->coeff=5;


            $e->MATIERE()->saveMany([$m1, $m2], [['note'=>14], ['note'=>16]]);

            DB::commit();
        } catch(\PDOException $e) {
            DB::rollback();
        }

    }

    public function ManytoMany1(){

        try{
            DB::beginTransaction();
            $e= etudiant::where('numE', 2)->first();
            $e->MATIERE()->attach([1=>['note'=>15], 2=>['note'=>17]]);
            DB::commit();
        }
        catch(\PDOException $e) {
            DB::rollback();
        }

    }

    

}












//l'expressions des besoins. merise, ach ste3melti. les screenshots a les parties importantes 
    
    

