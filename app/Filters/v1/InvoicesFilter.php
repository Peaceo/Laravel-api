<?php 
namespace App\Filters\v1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class InvoicesFilter extends ApiFilter {
    protected $safeparams = [
        'customer_id' => ['eq'],
        'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status' => ['eq', 'ne'],
        'billed_date' => ['eq'],
        'paid_date' => ['eq']
            
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<' | '=',
        'gt' => '>',
        'gte' => '>' | '=',
        'ne' => '!='  
    ];
}