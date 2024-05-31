<?php

namespace App\Http\Repo;
use App\Http\Repo\Interface\BaseRepoInterface;
use App\Models\CustomerPrefernces;
use App\Http\Resources\customerPrefernces as customerPrefRecourse;
use App\Traits\ApiResponse;
use Exception;

class CustomerPreferencesRepo implements BaseRepoInterface
{
    use ApiResponse;
    /*
     * @method to create new data into  db
     * @param Array data
     * */
    public function create(Array $data)
    {

//        $data['notification_settings'] = json_encode($data['notification_settings']);

        $customerPrefernces = CustomerPrefernces::create($data);
        return $customerPrefernces;
    }
/*
 * @method to get all data from db by customer_id
 * @ param customer id
 * */
    public function all($customer_id){
    return   customerPrefRecourse::collection(CustomerPrefernces::where('customer_id',$customer_id)->get());
    }
    /*
 * @method to get  data from db by id
 * */
    public function findById(int $id) {
        return CustomerPrefernces::find($id);

    }
    /*
 * @method to update data from db
 * */
    public function update( $id, array $data){
//        $data['notification_settings'] = json_encode($data['notification_settings']);
        $customerPrefernces = CustomerPrefernces::find($id);

        $customerPrefernces->update($data);
        return $customerPrefernces;

    }
    /*
 * @method to delete,customer id all data from db
 * */
    public function delete($id){
        $customerPrefernces = CustomerPrefernces::find($id);

        try {
            if ($customerPrefernces) {
                 $customerPrefernces->delete();
                return $this->response(__('messages.delete_successfully'));
            } else {
                return $this->notFoundResponse(__('messages.wrong')); // Or a more appropriate message
            }
        } catch (Exception $e) {
            // Handle other unexpected exceptions (optional)
            return $this->notFoundResponse(__('messages.unexpected_error'));
        }


    }

}
