<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\MapperMap;
use stdClass;

/**
 * @implements Builder<FieldContainer>
 * @extends MapperMap<FieldContainer>
 */
final class FieldContainerBuilder extends MapperMap implements Builder
{
    /**
     * @return FieldContainer
     */
    public function build()
    {
        return new FieldContainerModel($this->toArray());
    }

    /**
     * @psalm-return callable(string):?FieldContainer
     */
    protected function mapper()
    {
        return
            /**
             * @psalm-return ?FieldContainer
             */
            function (string $key) {
                $data = $this->get($key);
                if ($data instanceof stdClass) {
                    $data = FieldContainerModel::of($data);
                }

                return $data;
            };
    }
}
