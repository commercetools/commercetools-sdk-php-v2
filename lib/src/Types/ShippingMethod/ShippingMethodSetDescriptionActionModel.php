<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionModel;

class ShippingMethodSetDescriptionActionModel extends ShippingMethodUpdateActionModel implements ShippingMethodSetDescriptionAction
{
    const DISCRIMINATOR_VALUE = 'setDescription';

    /**
     * @var string
     */
    protected $description;

    /**
     * @return string
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(ShippingMethodSetDescriptionAction::FIELD_DESCRIPTION);
            $value = (string)$value;
            $this->description = $value;
        }
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description = (string)$description;

        return $this;
    }

}
