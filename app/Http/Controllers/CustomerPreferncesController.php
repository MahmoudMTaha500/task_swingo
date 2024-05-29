<?php

namespace App\Http\Controllers;

use App\Http\Repo\CustomerPreferencesRepo;
use App\Models\CustomerPrefernces;
use App\Http\Requests\StoreCustomerPreferncesRequest;
use App\Http\Requests\UpdateCustomerPreferncesRequest;
use App\Http\Resources\customerPrefernces as customerPrefRecourse;

class CustomerPreferncesController extends Controller
{

    protected $preferences;
    public function __construct(CustomerPreferencesRepo $customerPrefernce)
    {
        $this->preferences = $customerPrefernce;
    }


    public function store(StoreCustomerPreferncesRequest $request)
    {

        $dataRequest =    $request->validated();
        $data =   $this->preferences->create($dataRequest);
       return $this->response(__('created_successfully'),$data);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $data =  $this->preferences->all($id);
        return $this->response(__('success'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerPreferncesRequest $request,$id)
    {

        $data =$request->validated();
        $res=$this->preferences->update($id,$data);
        return $this->response(__('updated_successfully'),$res);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $this->preferences->delete($id);
            return $this->response(__('delete_successfully'));
        }catch (Exception $e){
         return   $this->notFoundResponse(__('wrong'));
        }

    }
}
