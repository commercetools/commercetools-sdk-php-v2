<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

interface DiscountCodeChangeGroupsAction extends DiscountCodeUpdateAction {
    const FIELD_GROUPS = 'groups';

    /**
     * @return array
     */
    public function getGroups();

    /**
     * @param array $groups
     * @return $this
     */
    public function setGroups($groups);

}
