<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RemoveFromCategoryAction>
 * @method RemoveFromCategoryAction current()
 * @method RemoveFromCategoryAction at($offset)
 */
class RemoveFromCategoryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveFromCategoryAction $value
     * @psalm-param RemoveFromCategoryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveFromCategoryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveFromCategoryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveFromCategoryAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveFromCategoryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveFromCategoryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
