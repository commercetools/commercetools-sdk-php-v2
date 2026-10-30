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
 * @extends CategoryUpdateActionCollection<CategoryAddStoreWithDescendantsAction>
 * @method CategoryAddStoreWithDescendantsAction current()
 * @method CategoryAddStoreWithDescendantsAction end()
 * @method CategoryAddStoreWithDescendantsAction at($offset)
 */
class CategoryAddStoreWithDescendantsActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategoryAddStoreWithDescendantsAction $value
     * @psalm-param CategoryAddStoreWithDescendantsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryAddStoreWithDescendantsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryAddStoreWithDescendantsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryAddStoreWithDescendantsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategoryAddStoreWithDescendantsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryAddStoreWithDescendantsAction $data */
                $data = CategoryAddStoreWithDescendantsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
