<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerCompanyNameSetMessage extends Message
{
    public const FIELD_COMPANY_NAME = 'companyName';

    /**
     * <p>The <code>companyName</code> that was set during the <a href="ctp:api:type:CustomerSetCompanyNameAction">Set Company Name</a> update action.</p>
     *

     * @return null|string
     */
    public function getCompanyName();

    /**
     * @param ?string $companyName
     */
    public function setCompanyName(?string $companyName): void;
}
