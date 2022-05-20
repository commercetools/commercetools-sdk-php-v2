<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSelectionReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Platform-generated unique identifier of the referenced <a href="ctp:api:type:ProductSelection">ProductSelection</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Contains the representation of the expanded ProductSelection. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for ProductSelections.</p>
     *
     * @return null|ProductSelection
     */
    public function getObj();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?ProductSelection $obj
     */
    public function setObj(?ProductSelection $obj): void;
}
