<?php namespace Alerts\Repositories\Interfaces;

use \Alerts\Models;

interface Users
{
    /**
     * Get a user based on Id.
     *
     * @param integer $userId
     * @return Models\User or null
     */
    public function getById($userId);

    /**
     * Get all users that match the specified filter.
     *
     * @param array $filters
     * @param int $count
     * @param int $start
     * @return Models\User[]
     */
    public function getAll(array $filters = [], $count = 10, $start = 0);

    /**
     * Creates or updates a user in a data source.
     *
     * @param Models\User &$user
     * @return bool
     */
    public function save(Models\User &$user);
}
