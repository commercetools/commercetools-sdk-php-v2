<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

interface CustomerSetCompanyNameAction extends CustomerUpdateAction
{
    const FIELD_COMPANY_NAME = 'companyName';

    /**
     * <p>If not defined, the company name is unset.</p>
     *
     * @return null|string
     */
    public function getCompanyName();

    public function setCompanyName(?string $companyName): void;
}
