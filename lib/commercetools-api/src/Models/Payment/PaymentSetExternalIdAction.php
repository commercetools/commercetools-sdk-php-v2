<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentSetExternalIdAction extends PaymentUpdateAction
{
    public const FIELD_EXTERNAL_ID = 'externalId';

    /**
     * @return null|string
     */
    public function getExternalId();

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;
}
