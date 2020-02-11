<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetCustomerEmailAction extends StagedOrderUpdateAction
{

    public const FIELD_EMAIL = 'email';

    /**
     * @return null|string
     */
    public function getEmail();

    public function setEmail(?string $email): void;
}
