<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionModel;

use Commercetools\Types\Common\LocalizedString;

class DiscountCodeSetNameActionModel extends DiscountCodeUpdateActionModel implements DiscountCodeSetNameAction {
    const DISCRIMINATOR_VALUE = 'setName';

    /**
     * @var LocalizedString
     */
    protected $name;

    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(DiscountCodeSetNameAction::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

}
