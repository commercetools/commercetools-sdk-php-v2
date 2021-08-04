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
 * @extends CategoryUpdateActionCollection<CategorySetMetaTitleAction>
 * @method CategorySetMetaTitleAction current()
 * @method CategorySetMetaTitleAction end()
 * @method CategorySetMetaTitleAction at($offset)
 */
class CategorySetMetaTitleActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetMetaTitleAction $value
     * @psalm-param CategorySetMetaTitleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetMetaTitleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetMetaTitleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetMetaTitleAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySetMetaTitleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetMetaTitleAction $data */
                $data = CategorySetMetaTitleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
