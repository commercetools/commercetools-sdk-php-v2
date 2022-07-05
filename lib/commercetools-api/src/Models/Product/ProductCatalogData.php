<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductCatalogData extends JsonObject
{
    public const FIELD_PUBLISHED = 'published';
    public const FIELD_CURRENT = 'current';
    public const FIELD_STAGED = 'staged';
    public const FIELD_HAS_STAGED_CHANGES = 'hasStagedChanges';

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

    /**
     * @param ?bool $published
     */
    public function setPublished(?bool $published): void;

    /**
     * @param ?ProductData $current
     */
    public function setCurrent(?ProductData $current): void;

    /**
     * @param ?ProductData $staged
     */
    public function setStaged(?ProductData $staged): void;

    /**
     * @param ?bool $hasStagedChanges
     */
    public function setHasStagedChanges(?bool $hasStagedChanges): void;
}
