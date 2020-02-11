<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use stdClass;
use Commercetools\Base\MapperMap;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CategoryOrderHints>
 * @extends MapperMap<CategoryOrderHints>
 */
final class CategoryOrderHintsBuilder extends MapperMap implements Builder
{
    /**
     * @psalm-return callable(string):?CategoryOrderHints
     */
    protected function mapper()
    {
        return
            /**
             * @psalm-return ?CategoryOrderHints
             */
            function(string $key) {
                $data = $this->get($key);
                if ($data instanceof stdClass) {
                    $data = CategoryOrderHintsModel::of($data);
                }
                return $data;
            };
    }

    /**
     * @return CategoryOrderHints
     */
    public function build()
    {
        return new CategoryOrderHintsModel($this->toArray());
    }
}
