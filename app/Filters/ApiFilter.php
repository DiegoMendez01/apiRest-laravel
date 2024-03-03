<?php

namespace App\Filters;
use Illuminate\Http\Request;

class ApiFilter{
    
    // Parametros para filtrar los modelos
    protected $safeParams = [];
    // Mapear columnas como queremos que se filtren
    protected $columnMap  = [];
    // Crear los mapeos de los operadores
    protected $operatorMap = [];
    
    public function transform(Request $request)
    {
        $eloQuery = [];
        foreach($this->safeParams as $parm => $operators){
            $query = $request->query($parm);
            if(!isset($query)){
                continue;
            }
            $column = $this->columnMap[$parm] ?? $parm;
            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $eloQuery;
    }
}

?>