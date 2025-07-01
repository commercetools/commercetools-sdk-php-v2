<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded PaymentMethod. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for PaymentMethods.</p>
     *

     * @return null|PaymentMethod
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:PaymentMethod">PaymentMethod</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * @param ?PaymentMethod $obj
     */
    public function setObj(?PaymentMethod $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
