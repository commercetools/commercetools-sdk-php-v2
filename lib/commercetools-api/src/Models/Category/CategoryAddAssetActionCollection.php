<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CategoryAddAssetAction>
 *
 * @method CategoryAddAssetAction current()
 * @method CategoryAddAssetAction at($offset)
 */
class CategoryAddAssetActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryAddAssetAction $value
     * @psalm-param CategoryAddAssetAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CategoryAddAssetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryAddAssetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryAddAssetAction
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryAddAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryAddAssetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
