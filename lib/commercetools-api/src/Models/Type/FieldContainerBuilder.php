<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use stdClass;
use Commercetools\Base\MapperMap;
use Commercetools\Base\Builder;

/**
 * @implements Builder<FieldContainer>
 * @extends MapperMap<FieldContainer>
 */
final class FieldContainerBuilder extends MapperMap implements Builder
{
    /**
     * @psalm-return callable(string):?FieldContainer
     */
    protected function mapper()
    {
        return
            /**
             * @psalm-return ?FieldContainer
             */
            function(string $key) {
                $data = $this->get($key);
                if ($data instanceof stdClass) {
                    $data = FieldContainerModel::of($data);
                }
                return $data;
            };
    }

    /**
     * @return FieldContainer
     */
    public function build()
    {
        return new FieldContainerModel($this->toArray());
    }
}
