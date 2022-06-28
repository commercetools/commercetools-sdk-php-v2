<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded Customer. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Customers.</p>
     *
     * @return null|Customer
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:Customer">Customer</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?Customer $obj
     */
    public function setObj(?Customer $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
