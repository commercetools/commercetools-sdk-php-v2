<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductCatalogData extends JsonObject
{
    const FIELD_PUBLISHED = 'published';
    const FIELD_CURRENT = 'current';
    const FIELD_STAGED = 'staged';
    const FIELD_HAS_STAGED_CHANGES = 'hasStagedChanges';

    /**
     * @return null|bool
     */
    public function getPublished();

    /**
     * @return null|ProductData
     */
    public function getCurrent();

    /**
     * @return null|ProductData
     */
    public function getStaged();

    /**
     * @return null|bool
     */
    public function getHasStagedChanges();

    public function setPublished(?bool $published): void;

    public function setCurrent(?ProductData $current): void;

    public function setStaged(?ProductData $staged): void;

    public function setHasStagedChanges(?bool $hasStagedChanges): void;
}
