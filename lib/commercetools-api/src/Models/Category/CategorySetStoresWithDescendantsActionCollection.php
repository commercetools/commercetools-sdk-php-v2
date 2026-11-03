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
 * @extends CategoryUpdateActionCollection<CategorySetStoresWithDescendantsAction>
 * @method CategorySetStoresWithDescendantsAction current()
 * @method CategorySetStoresWithDescendantsAction end()
 * @method CategorySetStoresWithDescendantsAction at($offset)
 */
class CategorySetStoresWithDescendantsActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetStoresWithDescendantsAction $value
     * @psalm-param CategorySetStoresWithDescendantsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetStoresWithDescendantsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetStoresWithDescendantsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetStoresWithDescendantsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySetStoresWithDescendantsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetStoresWithDescendantsAction $data */
                $data = CategorySetStoresWithDescendantsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
