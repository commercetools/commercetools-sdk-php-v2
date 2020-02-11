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
 * @extends MapperSequence<CategoryUpdate>
 * @method CategoryUpdate current()
 * @method CategoryUpdate at($offset)
 */
class CategoryUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryUpdate $value
     * @psalm-param CategoryUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryUpdate
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
