<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoiceFilter extends ApiFilter{
    
    // Parametros para filtrar los modelos
    protected $safeParams = [
        'customerId'    => ['eq'],
        'amount'        => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'status'        => ['eq', 'ne'],
        'billedDate'    => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'paidDate'      => ['eq', 'gt', 'gte', 'lt', 'lte'],
    ];
    // Mapear columnas como queremos que se filtren
    protected $columnMap  = [
        'customerId'    => 'customer_id',
        'billedDate'    => 'billed_dated',
        'paidDate'      => 'paid_dated'
    ];
    // Crear los mapeos de los operadores
    protected $operatorMap = [
        'eq'    => '=',
        'lt'    => '<',
        'lte'   => '<=',
        'gt'    => '>',
        'gte'   => '=>',
        'ne'    => '!='
    ];
    
}

?>