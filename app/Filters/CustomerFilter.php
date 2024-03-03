<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter{
    
    // Parametros para filtrar los modelos
    protected $safeParams = [
        'name'       => ['eq'],
        'type'       => ['eq'],
        'email'      => ['eq'],
        'address'    => ['eq'],
        'city'       => ['eq'],
        'state'      => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt']
    ];
    // Mapear columnas como queremos que se filtren
    protected $columnMap  = [
        'postalCode'    => 'postal_code'
    ];
    // Crear los mapeos de los operadores
    protected $operatorMap = [
        'eq'    => '=',
        'lt'    => '<',
        'lte'   => '<=',
        'gt'    => '>',
        'gte'   => '=>'
    ];
    
}

?>