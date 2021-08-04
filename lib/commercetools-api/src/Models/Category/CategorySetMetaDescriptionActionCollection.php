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
 * @extends CategoryUpdateActionCollection<CategorySetMetaDescriptionAction>
 * @method CategorySetMetaDescriptionAction current()
 * @method CategorySetMetaDescriptionAction end()
 * @method CategorySetMetaDescriptionAction at($offset)
 */
class CategorySetMetaDescriptionActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetMetaDescriptionAction $value
     * @psalm-param CategorySetMetaDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetMetaDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetMetaDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetMetaDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySetMetaDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetMetaDescriptionAction $data */
                $data = CategorySetMetaDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
