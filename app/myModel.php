<?php namespace App;


use Illuminate\Database\Eloquent\Model;

class myModel extends Model {

    /*ezek a mezők tömegesen hozzárendelhetők a modelhez*/
    protected $fillable=['name','phone','secretAttribute','Password'];
    /*ezek rejtve maradnak*/
    protected $hidden=['secretAttribute','Password'];
	//

}
