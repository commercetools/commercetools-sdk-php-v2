<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

interface CustomerCompanyNameSetMessage extends Message
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
