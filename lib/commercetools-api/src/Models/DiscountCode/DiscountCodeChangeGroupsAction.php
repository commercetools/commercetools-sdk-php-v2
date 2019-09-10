<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

interface DiscountCodeChangeGroupsAction extends DiscountCodeUpdateAction
{
    const FIELD_GROUPS = 'groups';

    /**
     * @return null|array
     */
    public function getGroups();

    public function setGroups(?array $groups): void;
}
