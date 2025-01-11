<?php
class mobilni
{
    public $ID ;
    public $proizvodjac ;
    public $model ;
    public $cena ;
    public $godinaProizvodnje ;
    public $dateTime ;

    public function __construct($ID, $proizvodjac, $model, $cena, $godinaProizvodnje, $dateTime)
    {
        $this->ID = $ID ;
        $this->proizvodjac = $proizvodjac ;
        $this->model = $model ;
        $this->cena = $cena ;
        $this->godinaProizvodnje = $godinaProizvodnje ;
        $this->dateTime = $dateTime ;
    }


    //PRIKAZ SVIH TELEFONA

    public static function getAll(){

        $sql="SELECT * FROM mobilni";

        $row=DB::select($sql);
        if (count($row)>0){

            return $row;
        }

        return 0;

    }

    //KREIRANJE NOVOG


    public static function create($data){

        $p=$data['p'];
        $m=$data['m'];
        $g=(int)$data['g'];
        $c=(float)$data['c'];
        $d=$data['d'];



        $sql="INSERT INTO mobilni(proizvodjac,model,cena,godinaProizvodnje,dateTim) values('$p','$m',$c,$g,'$d')";

        $row=DB::insert($sql);

        if($row)
        {
            $response_array = array("Success" => "true");
        }
        else
        {
            $response_array = array("Success" => "false", "msg" => "Došlo je do greške.");
        }

        return $response_array;

    }



    

   

    //BRISANJE TELEFONA

 public static function brisi($id)
    {
        $sql = "DELETE FROM mobilni WHERE id=$id" ;

        $row=DB::delete($sql) ;

        if($row)
        {
            $response_array = array("Success" => "true");
        }
        else
        {
            $response_array = array("Success" => "false", "msg" => "Došlo je do greške.");
        }

        return $response_array;


        
    }

    
}



?>
