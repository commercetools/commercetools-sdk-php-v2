<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<Category>
 * @method Category current()
 * @method Category at($offset)
 */
class CategoryCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert Category $value
     * @psalm-param Category|stdClass $value
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
        return function (?int $index): ?Category {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Category $data */
                $data = CategoryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
