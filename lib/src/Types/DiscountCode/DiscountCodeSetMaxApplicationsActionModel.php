<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionModel;

class DiscountCodeSetMaxApplicationsActionModel extends DiscountCodeUpdateActionModel implements DiscountCodeSetMaxApplicationsAction {
    const DISCRIMINATOR_VALUE = 'setMaxApplications';

    /**
     * @var int
     */
    protected $maxApplications;

    /**
     * @return int
     */
    public function getMaxApplications()
    {
        if (is_null($this->maxApplications)) {
            $value = $this->raw(DiscountCodeSetMaxApplicationsAction::FIELD_MAX_APPLICATIONS);
            $value = (int)$value;
            $this->maxApplications = $value;
        }
        return $this->maxApplications;
    }

    /**
     * @param int $maxApplications
     * @return $this
     */
    public function setMaxApplications(int $maxApplications)
    {
        $this->maxApplications = (int)$maxApplications;

        return $this;
    }

}
