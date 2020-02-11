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
 * @extends MapperSequence<CategoryChangeSlugAction>
 * @method CategoryChangeSlugAction current()
 * @method CategoryChangeSlugAction at($offset)
 */
class CategoryChangeSlugActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryChangeSlugAction $value
     * @psalm-param CategoryChangeSlugAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryChangeSlugActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryChangeSlugAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryChangeSlugAction
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryChangeSlugAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryChangeSlugActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
