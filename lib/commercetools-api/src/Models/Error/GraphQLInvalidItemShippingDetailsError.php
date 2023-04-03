<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLInvalidItemShippingDetailsError extends GraphQLErrorObject
{
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_ITEM_ID = 'itemId';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;LineItem&quot;</code> or <code>&quot;CustomLineItem&quot;</code></p>
     *

     * @return null|string
     */
    public function getSubject();

    /**
     * <p>Unique identifier of the Line Item or Custom Line Item.</p>
     *

     * @return null|string
     */
    public function getItemId();

    /**
     * @param ?string $subject
     */
    public function setSubject(?string $subject): void;

    /**
     * @param ?string $itemId
     */
    public function setItemId(?string $itemId): void;
}
