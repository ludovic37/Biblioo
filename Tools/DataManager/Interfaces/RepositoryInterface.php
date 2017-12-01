<?php
/**
 * Created by PhpStorm.
 * User: jeep
 * Date: 01/12/2017
 * Time: 15:41
 */

interface RepositoryInterface
{
    public function createObject($entity);

    public function updateObject($entity, $id);

    public function deleteObject($entity, $id);

    public function selectObect($entity);
}