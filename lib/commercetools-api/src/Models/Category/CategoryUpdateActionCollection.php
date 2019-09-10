<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CategoryUpdateAction>
 * @method CategoryUpdateAction current()
 * @method CategoryUpdateAction at($offset)
 */
class CategoryUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryUpdateAction $value
     * @psalm-param CategoryUpdateAction|stdClass $value
     * @return CategoryUpdateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CategoryUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryUpdateAction
     */
    protected function mapper()
    {
        return function(int $index): ?CategoryUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryUpdateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}