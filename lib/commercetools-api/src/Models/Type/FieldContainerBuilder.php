<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperMap;
use Commercetools\Base\Builder;

/**
 * @extends Builder<FieldContainer>
 */
final class FieldContainerBuilder extends MapperMap implements Builder
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
     * @return FieldContainer
     */
    public function build() {
        return new FieldContainerModel($this->toArray());
    }
}