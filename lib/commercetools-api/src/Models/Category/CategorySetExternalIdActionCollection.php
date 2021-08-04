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
 * @extends CategoryUpdateActionCollection<CategorySetExternalIdAction>
 * @method CategorySetExternalIdAction current()
 * @method CategorySetExternalIdAction end()
 * @method CategorySetExternalIdAction at($offset)
 */
class CategorySetExternalIdActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetExternalIdAction $value
     * @psalm-param CategorySetExternalIdAction|stdClass $value
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
        return function (?int $index): ?CategorySetExternalIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetExternalIdAction $data */
                $data = CategorySetExternalIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
