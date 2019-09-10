<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Category>
 *
 * @method Category current()
 * @method Category at($offset)
 */
class CategoryCollection extends MapperSequence
{
    /**
     * @psalm-assert Category $value
     * @psalm-param Category|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CategoryCollection
     */
    public function add($value)
    {
        if (!$value instanceof Category) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Category
     */
    protected function mapper()
    {
        return function (int $index): ?Category {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
