<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperMap;
use Commercetools\Base\Builder;

/**
 * @extends Builder<CategoryOrderHints>
 */
final class CategoryOrderHintsBuilder extends MapperMap implements Builder
{
    /**
     * @psalm-return callable(string):?mixed
     */
    protected function mapper()
    {
        return
            /**
             * @psalm-return ?mixed
             */
            function(string $key) {
               return $this->get($key);
            };
    }
    
    /**
     * @return CategoryOrderHints
     */
    public function build() {
        return new CategoryOrderHintsModel($this->toArray());
    }
}