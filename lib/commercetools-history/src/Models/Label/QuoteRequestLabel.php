<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\Reference;

interface QuoteRequestLabel extends Label
{

    public const FIELD_KEY = 'key';
    public const FIELD_CUSTOMER = 'customer';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getKey();

    /**

     * @return null|Reference
     */
    public function getCustomer();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?Reference $customer
     */
    public function setCustomer(?Reference $customer): void;
}
