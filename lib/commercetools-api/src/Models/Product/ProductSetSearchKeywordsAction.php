<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetSearchKeywordsAction extends ProductUpdateAction
{
    public const FIELD_SEARCH_KEYWORDS = 'searchKeywords';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setSearchKeywords(?SearchKeywords $searchKeywords): void;

    public function setStaged(?bool $staged): void;
}
