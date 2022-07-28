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
     * <p><code>true</code> if the Product is published.</p>
     *

     * @return null|bool
     */
    public function getPublished();

    /**
     * <p>Current (published) data of the Product.</p>
     *

     * @return null|ProductData
     */
    public function getCurrent();

    /**
     * <p>Staged (unpublished) data of the Product.</p>
     *

     * @return null|ProductData
     */
    public function getStaged();

    /**
     * <p><code>true</code> if the <code>staged</code> data is different from the <code>current</code> data.</p>
     *

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
