<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded Cart. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Carts.</p>
     *
     * @return null|Cart
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:Cart">Cart</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?Cart $obj
     */
    public function setObj(?Cart $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
