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
     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**
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
