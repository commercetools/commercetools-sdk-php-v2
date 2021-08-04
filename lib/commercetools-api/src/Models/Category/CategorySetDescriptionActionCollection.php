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
 * @extends CategoryUpdateActionCollection<CategorySetDescriptionAction>
 * @method CategorySetDescriptionAction current()
 * @method CategorySetDescriptionAction at($offset)
 */
class CategorySetDescriptionActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetDescriptionAction $value
     * @psalm-param CategorySetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetDescriptionAction $data */
                $data = CategorySetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
