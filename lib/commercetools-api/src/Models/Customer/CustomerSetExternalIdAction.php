<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

interface CustomerSetExternalIdAction extends CustomerUpdateAction
{
    const FIELD_EXTERNAL_ID = 'externalId';

    /**
     * <p>If not defined, the external ID is unset.</p>
     *
     * @return null|string
     */
    public function getExternalId();

    public function setExternalId(?string $externalId): void;
}
