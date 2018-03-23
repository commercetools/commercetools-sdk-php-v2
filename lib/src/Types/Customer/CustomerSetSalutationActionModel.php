<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionModel;

class CustomerSetSalutationActionModel extends CustomerUpdateActionModel implements CustomerSetSalutationAction {
    const DISCRIMINATOR_VALUE = 'setSalutation';

    /**
     * @var string
     */
    protected $salutation;

    /**
     * @return string
     */
    public function getSalutation()
    {
        if (is_null($this->salutation)) {
            $value = $this->raw(CustomerSetSalutationAction::FIELD_SALUTATION);
            $value = (string)$value;
            $this->salutation = $value;
        }
        return $this->salutation;
    }

    /**
     * @param string $salutation
     * @return $this
     */
    public function setSalutation(string $salutation)
    {
        $this->salutation = (string)$salutation;

        return $this;
    }

}
