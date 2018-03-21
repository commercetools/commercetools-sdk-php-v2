<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionModel;

class CustomerSetMiddleNameActionModel extends CustomerUpdateActionModel implements CustomerSetMiddleNameAction {
    const DISCRIMINATOR_VALUE = 'setMiddleName';

    /**
     * @var string
     */
    protected $middleName;

    /**
     * @return string
     */
    public function getMiddleName()
    {
        if (is_null($this->middleName)) {
            $value = $this->raw(CustomerSetMiddleNameAction::FIELD_MIDDLE_NAME);
            $value = (string)$value;
            $this->middleName = $value;
        }
        return $this->middleName;
    }

    /**
     * @param string $middleName
     * @return $this
     */
    public function setMiddleName(string $middleName)
    {
        $this->middleName = (string)$middleName;

        return $this;
    }

}
