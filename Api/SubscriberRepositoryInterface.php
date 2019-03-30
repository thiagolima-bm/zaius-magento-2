<?php

namespace Zaius\Engage\Api;


interface SubscriberRepositoryInterface
{
    /**
     * @param int|null $limit
     * @param int|null $offset
     * @return mixed
     */
    public function getList($limit = null, $offset = null);
}