<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Category\CategoryUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CategoryUpdateActionCollection<CategoryAddAssetAction>
 * @method CategoryAddAssetAction current()
 * @method CategoryAddAssetAction at($offset)
 */
class CategoryAddAssetActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategoryAddAssetAction $value
     * @psalm-param CategoryAddAssetAction|stdClass $value
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
        return function (?int $index): ?CategoryAddAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryAddAssetAction $data */
                $data = CategoryAddAssetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
