<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\MapperMap;
use stdClass;

/**
 * @implements Builder<SearchKeywords>
 * @extends MapperMap<SearchKeywords>
 */
final class SearchKeywordsBuilder extends MapperMap implements Builder
{
    /**
     * @psalm-return callable(string):?SearchKeywords
     */
    protected function mapper()
    {
        return
            /**
             * @psalm-return ?SearchKeywords
             */
            function (string $key) {
                $data = $this->get($key);
                if ($data instanceof stdClass) {
                    $data = SearchKeywordsModel::of($data);
                }
                return $data;
            };
    }

    /**
     * @return SearchKeywords
     */
    public function build()
    {
        return new SearchKeywordsModel($this->toArray());
    }
}
