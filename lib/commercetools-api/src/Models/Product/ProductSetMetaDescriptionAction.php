<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetMetaDescriptionAction extends ProductUpdateAction
{
    public const FIELD_META_DESCRIPTION = 'metaDescription';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**
     * <p>If <code>true</code>, only the staged <code>metaDescription</code> is updated. If <code>false</code>, both the current and staged <code>metaDescription</code> are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?LocalizedString $metaDescription
     */
    public function setMetaDescription(?LocalizedString $metaDescription): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
