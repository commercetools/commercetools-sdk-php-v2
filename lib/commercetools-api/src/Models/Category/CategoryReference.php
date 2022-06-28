<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategoryReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded Category. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Categories.</p>
     *
     * @return null|Category
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:Category">Category</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?Category $obj
     */
    public function setObj(?Category $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
