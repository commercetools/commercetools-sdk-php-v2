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
     * <p>Value to set.</p>
     *

     * @return null|SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * <p>If <code>true</code>, only the staged <code>searchKeywords</code> is updated. If <code>false</code>, both the current and staged <code>searchKeywords</code> are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?SearchKeywords $searchKeywords
     */
    public function setSearchKeywords(?SearchKeywords $searchKeywords): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
