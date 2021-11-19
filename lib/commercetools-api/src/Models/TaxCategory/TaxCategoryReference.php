<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TaxCategoryReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded TaxCategory. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for TaxCategory.</p>
     *
     * @return null|TaxCategory
     */
    public function getObj();

    /**
     * <p>Unique ID of the referenced <a href="ctp:api:type:TaxCategory">TaxCategory</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?TaxCategory $obj
     */
    public function setObj(?TaxCategory $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
