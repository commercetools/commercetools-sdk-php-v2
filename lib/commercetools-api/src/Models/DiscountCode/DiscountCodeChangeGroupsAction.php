<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;

interface DiscountCodeChangeGroupsAction extends DiscountCodeUpdateAction
{
    
    const FIELD_GROUPS = 'groups';

    /**
     *
     * @return array|null
     */
    public function getGroups();
    public function setGroups(?array $groups): void;
}