<?php  
  
namespace App\Traits;  
  
use Illuminate\Database\Eloquent\Model;
  
trait ApiResponser  
{  
	 protected function successResponse($data, $message = null, $code = 200)  
	 {  
		 return response()->json(
		 	[
		 		'data' => $data,
		 		'error' => null,
		 		'message' => $message,
		 		'code' => $code
		 	], $code);  
	 }  
	 protected function errorResponse($err, $code)  
	 {  
		 return response()->json(
		 	[
		 		'data' => null,
		 		'error' => $err,
		 		'message' => '',
		 		'code' => $code
		 	], $code);  
	 }  

	 protected function showAll(Collection $collection, $code = 200)  
	 {  
		 return $this->succesResponse(['data' => $collection], $code);  
	 }  
	 protected function showOne(Model $instance, $code = 200)  
	 {  
		 return $this->succesResponse(['data' => $instance], $code);  
	 }
}