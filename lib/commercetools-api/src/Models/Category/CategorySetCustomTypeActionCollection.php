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
 * @extends MapperSequence<CategorySetCustomTypeAction>
 * @method CategorySetCustomTypeAction current()
 * @method CategorySetCustomTypeAction at($offset)
 */
class CategorySetCustomTypeActionCollection extends MapperSequence
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
        return function (int $index): ?CategorySetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategorySetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
