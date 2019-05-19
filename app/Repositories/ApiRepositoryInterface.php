<?php

namespace App\Repositories;

interface ApiRepositoryInterface
{

    /**
     * Get's a service by it's ID
     *
     * @param int
     *
     * @return array
     */
    public function get($id);

    /**
     * Get's all services.
     *
     * @return array
     */
    public function all();
    
    /**
     * Get access data from the API.
     *
     * @param request
     *
     * @return array
     */
    public function getAccess($request);

}
