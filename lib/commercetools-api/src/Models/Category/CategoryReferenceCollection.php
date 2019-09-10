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
 * @extends MapperSequence<CategoryReference>
 *
 * @method CategoryReference current()
 * @method CategoryReference at($offset)
 */
class CategoryReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryReference $value
     * @psalm-param CategoryReference|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CategoryReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryReference
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
