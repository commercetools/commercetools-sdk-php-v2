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

interface ProductSetMetaKeywordsAction extends ProductUpdateAction
{
    public const FIELD_META_KEYWORDS = 'metaKeywords';
    public const FIELD_STAGED = 'staged';

    /**

     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?LocalizedString $metaKeywords
     */
    public function setMetaKeywords(?LocalizedString $metaKeywords): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
