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
 * @extends CategoryUpdateActionCollection<CategorySetKeyAction>
 * @method CategorySetKeyAction current()
 * @method CategorySetKeyAction at($offset)
 */
class CategorySetKeyActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetKeyAction $value
     * @psalm-param CategorySetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetKeyAction $data */
                $data = CategorySetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
