<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter {
    protected $safeParms = [
        'id' => ['eq', 'gt', 'lt'],
        'name' => ['eq'],
        'type' => ['eq'],
        'email'=> ['eq'],
        'nation' => ['eq'],
    ];

    protected $columnMap =[
        'id_customer' => 'id'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt'=> '>',
        'gte'=> '>=',
    ];
}
