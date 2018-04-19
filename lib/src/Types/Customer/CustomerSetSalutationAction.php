<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

interface CustomerSetSalutationAction extends CustomerUpdateAction
{
    const FIELD_SALUTATION = 'salutation';

    /**
     * @return string
     */
    public function getSalutation();

    /**
     * @param string $salutation
     * @return $this
     */
    public function setSalutation(string $salutation);

}
