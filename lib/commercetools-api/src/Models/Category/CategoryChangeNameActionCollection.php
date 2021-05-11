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
 * @extends CategoryUpdateActionCollection<CategoryChangeNameAction>
 * @method CategoryChangeNameAction current()
 * @method CategoryChangeNameAction at($offset)
 */
class CategoryChangeNameActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategoryChangeNameAction $value
     * @psalm-param CategoryChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryChangeNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryChangeNameAction $data */
                $data = CategoryChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
