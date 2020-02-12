<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InvalidItemShippingDetailsError extends ErrorObject
{
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_ITEM_ID = 'itemId';

    /**
     * @return null|string
     */
    public function getSubject();

    /**
     * @return null|string
     */
    public function getItemId();

    public function setSubject(?string $subject): void;

    public function setItemId(?string $itemId): void;
}
