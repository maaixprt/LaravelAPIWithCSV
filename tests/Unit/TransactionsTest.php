<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\ApiController\FilmsController;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TransactionsTest extends TestCase
{
    /**
     * A test for Json Response. It will return true or false
     *
     * @return void
     */
    public function testJsonResponseTest()
    {  
        $response = $this->json('GET', '/api/v1/transactions');
        $response->assertStatus(200);
    }

    /**
     * A test for verify sucess code 200
     *
     * @return void
     */
    public function testSuccessResponseTest()
    { 
        $data = array();
        try { 
            
            // We can call api in this way too... 
            $response = file_get_contents('http://localhost/xfilms-test/api/v1/transactions');  
            $data = json_decode($response, true);
        } catch (Exception $e) {
            $data = 'Caught exception: '.  $e->getMessage();
        }
 
		if (is_array($data) && isset($data['code']) ) {

		   //"it's confirmed success code of 200" 
           $this->assertEquals( 
            200, 
            $data['code'], 
            "actual value is equals to expected"
            ); 
		} else {
            $this->assertEquals( 
                200, 
                $data, 
                "actual value is not equals to expected"
                ); 
         }
        
    }
}
