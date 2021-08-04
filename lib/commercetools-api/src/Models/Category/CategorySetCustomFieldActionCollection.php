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
 * @extends CategoryUpdateActionCollection<CategorySetCustomFieldAction>
 * @method CategorySetCustomFieldAction current()
 * @method CategorySetCustomFieldAction end()
 * @method CategorySetCustomFieldAction at($offset)
 */
class CategorySetCustomFieldActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetCustomFieldAction $value
     * @psalm-param CategorySetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetCustomFieldAction $data */
                $data = CategorySetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
