<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter
{
    protected $safeparams = [];

    protected $columnMap = [];

    protected $operatorMap = [];

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
