<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionModel;

class DiscountCodeChangeGroupsActionModel extends DiscountCodeUpdateActionModel implements DiscountCodeChangeGroupsAction {
    const DISCRIMINATOR_VALUE = 'changeGroups';

    /**
     * @var array
     */
    protected $groups;

    /**
     * @return array
     */
    public function getGroups()
    {
        if (is_null($this->groups)) {
            $value = $this->raw(DiscountCodeChangeGroupsAction::FIELD_GROUPS);
            $value = (array)$value;
            $this->groups = $value;
        }
        return $this->groups;
    }

    /**
     * @param $groups
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;

        return $this;
    }

}
