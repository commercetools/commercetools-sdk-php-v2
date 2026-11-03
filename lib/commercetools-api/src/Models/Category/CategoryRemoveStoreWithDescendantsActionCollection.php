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
 * @extends CategoryUpdateActionCollection<CategoryRemoveStoreWithDescendantsAction>
 * @method CategoryRemoveStoreWithDescendantsAction current()
 * @method CategoryRemoveStoreWithDescendantsAction end()
 * @method CategoryRemoveStoreWithDescendantsAction at($offset)
 */
class CategoryRemoveStoreWithDescendantsActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategoryRemoveStoreWithDescendantsAction $value
     * @psalm-param CategoryRemoveStoreWithDescendantsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryRemoveStoreWithDescendantsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryRemoveStoreWithDescendantsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryRemoveStoreWithDescendantsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategoryRemoveStoreWithDescendantsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryRemoveStoreWithDescendantsAction $data */
                $data = CategoryRemoveStoreWithDescendantsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
