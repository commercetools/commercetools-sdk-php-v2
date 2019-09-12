<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CategoryOrderHints>
 *
 * @method CategoryOrderHints current()
 * @method CategoryOrderHints at($offset)
 */
class CategoryOrderHintsCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryOrderHints $value
     * @psalm-param CategoryOrderHints|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CategoryOrderHintsCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryOrderHints) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryOrderHints
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryOrderHints {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryOrderHintsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
