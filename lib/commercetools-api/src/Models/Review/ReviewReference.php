<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded Review. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Reviews.</p>
     *
     * @return null|Review
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:Review">Review</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?Review $obj
     */
    public function setObj(?Review $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
