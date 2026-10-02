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
 * @extends CategoryUpdateActionCollection<CategoryAddStoreAction>
 * @method CategoryAddStoreAction current()
 * @method CategoryAddStoreAction end()
 * @method CategoryAddStoreAction at($offset)
 */
class CategoryAddStoreActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategoryAddStoreAction $value
     * @psalm-param CategoryAddStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryAddStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryAddStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryAddStoreAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategoryAddStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryAddStoreAction $data */
                $data = CategoryAddStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
