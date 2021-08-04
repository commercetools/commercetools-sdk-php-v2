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
 * @extends CategoryUpdateActionCollection<CategorySetCustomTypeAction>
 * @method CategorySetCustomTypeAction current()
 * @method CategorySetCustomTypeAction at($offset)
 */
class CategorySetCustomTypeActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetCustomTypeAction $value
     * @psalm-param CategorySetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetCustomTypeAction $data */
                $data = CategorySetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
