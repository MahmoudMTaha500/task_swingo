<?php

namespace App\Http\Repo\Interface;

interface BaseRepoInterface
{
    public function create(array $data);
    public function all(int $id);
    public function findById(int $id);
    public function update( $id, array $data);
    public function delete( int $id);
}
