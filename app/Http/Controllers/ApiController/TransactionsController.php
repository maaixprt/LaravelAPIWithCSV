<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Http\Requests;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Resources\Json\Resource;

class TransactionsController extends Controller
{
     
    public function index()
    {
		$returnData = array();  
        return response()->json([
            'code' => 200, // for security reasons using 200 as code of success
            'data' => $returnData 
        ]); 
         
    }

    /*
    Function for get all transactions from CSV file
    */
    public function transactions(){

        //$csvString = file_get_contents(base_path('resources/data/transactions.csv'));
        $data = $this->csvToArray(base_path('resources/data/transactions.csv'));
        $returnData = array(1,2,3);
        return response()->json([
            'code' => 200, // for security reasons using 200 as code of success
            'data' => $data,
            'status' => 200
        ]); 
    }

    private function csvToArray($filename = '', $delimiter = ',')
    {
    if (!file_exists($filename) || !is_readable($filename))
        return false;

    $header = null;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== false)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
        {
            if (!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }

    return $data;
    }
}
