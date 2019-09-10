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
 * @extends MapperSequence<CategorySetExternalIdAction>
 *
 * @method CategorySetExternalIdAction current()
 * @method CategorySetExternalIdAction at($offset)
 */
class CategorySetExternalIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategorySetExternalIdAction $value
     * @psalm-param CategorySetExternalIdAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CategorySetExternalIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetExternalIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetExternalIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?CategorySetExternalIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategorySetExternalIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
