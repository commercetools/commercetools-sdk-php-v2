<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Customer\CustomerUpdateActionModel;

class CustomerSetFirstNameActionModel extends CustomerUpdateActionModel implements CustomerSetFirstNameAction {
    const DISCRIMINATOR_VALUE = 'setFirstName';

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @return string
     */
    public function getFirstName()
    {
        if (is_null($this->firstName)) {
            $value = $this->raw(CustomerSetFirstNameAction::FIELD_FIRST_NAME);
            $value = (string)$value;
            $this->firstName = $value;
        }
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = (string)$firstName;

        return $this;
    }

}
