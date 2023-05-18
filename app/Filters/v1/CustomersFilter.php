<?php

namespace App\Filters;

use Illuminate\Http\Request;

class CustomersFilter extends ApiFilter
{
    protected $safeparams = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postal_code' => ['eq', 'gt', 'lt']
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<' | '=',
        'gt' => '>',
        'gte' => '>' | '=',
    ];

    public function transform(Request $request)
    {
        $eloQuery = [];

        foreach ($this->safeparams as $parm => $operators) {
            $query = $request->query($parm);

            if (!isset($query)) {
                continue;
            }
        }
    }
}
