<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

interface CustomerSetCompanyNameAction extends CustomerUpdateAction
{
    const FIELD_COMPANY_NAME = 'companyName';

    /**
     * @return string
     */
    public function getCompanyName();

    /**
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName(string $companyName);

}
