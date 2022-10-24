<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSetExternalIdAction extends CustomerUpdateAction
{
    public const FIELD_EXTERNAL_ID = 'externalId';

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getExternalId();

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;
}
