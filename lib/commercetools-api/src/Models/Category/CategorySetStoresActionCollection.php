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
 * @extends CategoryUpdateActionCollection<CategorySetStoresAction>
 * @method CategorySetStoresAction current()
 * @method CategorySetStoresAction end()
 * @method CategorySetStoresAction at($offset)
 */
class CategorySetStoresActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetStoresAction $value
     * @psalm-param CategorySetStoresAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetStoresActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetStoresAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetStoresAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySetStoresAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetStoresAction $data */
                $data = CategorySetStoresActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
