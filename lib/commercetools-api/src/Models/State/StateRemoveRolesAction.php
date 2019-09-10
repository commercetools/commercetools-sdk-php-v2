<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\State;

use Commercetools\Base\JsonObject;

interface StateRemoveRolesAction extends StateUpdateAction
{
    
    const FIELD_ROLES = 'roles';

    /**
     *
     * @return array|null
     */
    public function getRoles();
    public function setRoles(?array $roles): void;
}