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
 * @extends CategoryUpdateActionCollection<CategoryRemoveStoreAction>
 * @method CategoryRemoveStoreAction current()
 * @method CategoryRemoveStoreAction end()
 * @method CategoryRemoveStoreAction at($offset)
 */
class CategoryRemoveStoreActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategoryRemoveStoreAction $value
     * @psalm-param CategoryRemoveStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryRemoveStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryRemoveStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryRemoveStoreAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategoryRemoveStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryRemoveStoreAction $data */
                $data = CategoryRemoveStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
