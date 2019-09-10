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
 * @extends MapperSequence<CategoryRemoveAssetAction>
 *
 * @method CategoryRemoveAssetAction current()
 * @method CategoryRemoveAssetAction at($offset)
 */
class CategoryRemoveAssetActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryRemoveAssetAction $value
     * @psalm-param CategoryRemoveAssetAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CategoryRemoveAssetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryRemoveAssetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryRemoveAssetAction
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryRemoveAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryRemoveAssetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
