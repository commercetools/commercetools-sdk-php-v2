<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionModel;

class CustomerSetVatIdActionModel extends CustomerUpdateActionModel implements CustomerSetVatIdAction {
    const DISCRIMINATOR_VALUE = 'setVatId';

    /**
     * @var string
     */
    protected $vatId;

    /**
     * @return string
     */
    public function getVatId()
    {
        if (is_null($this->vatId)) {
            $value = $this->raw(CustomerSetVatIdAction::FIELD_VAT_ID);
            $value = (string)$value;
            $this->vatId = $value;
        }
        return $this->vatId;
    }

    /**
     * @param string $vatId
     * @return $this
     */
    public function setVatId(string $vatId)
    {
        $this->vatId = (string)$vatId;

        return $this;
    }

}
