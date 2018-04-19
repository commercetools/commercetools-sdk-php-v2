<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Customer\CustomerUpdateActionModel;

class CustomerSetLastNameActionModel extends CustomerUpdateActionModel implements CustomerSetLastNameAction
{
    const DISCRIMINATOR_VALUE = 'setLastName';

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @return string
     */
    public function getLastName()
    {
        if (is_null($this->lastName)) {
            $value = $this->raw(CustomerSetLastNameAction::FIELD_LAST_NAME);
            $value = (string)$value;
            $this->lastName = $value;
        }
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = (string)$lastName;

        return $this;
    }

}
