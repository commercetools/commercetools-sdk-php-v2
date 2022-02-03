<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StateReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded State. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for State.</p>
     *
     * @return null|State
     */
    public function getObj();

    /**
     * <p>Unique ID of the referenced <a href="ctp:api:type:State">State</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?State $obj
     */
    public function setObj(?State $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
