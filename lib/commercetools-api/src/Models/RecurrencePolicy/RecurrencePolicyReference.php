<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurrencePolicyReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded RecurrencePolicy.
     * Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for RecurrencePolicies.</p>
     *

     * @return null|RecurrencePolicy
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:RecurrencePolicy">RecurrencePolicy</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * @param ?RecurrencePolicy $obj
     */
    public function setObj(?RecurrencePolicy $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
