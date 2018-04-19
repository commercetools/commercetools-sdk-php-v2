<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

interface CustomerSetVatIdAction extends CustomerUpdateAction
{
    const FIELD_VAT_ID = 'vatId';

    /**
     * @return string
     */
    public function getVatId();

    /**
     * @param string $vatId
     * @return $this
     */
    public function setVatId(string $vatId);

}
