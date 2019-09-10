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
 * @extends MapperSequence<CategorySetKeyAction>
 * @method CategorySetKeyAction current()
 * @method CategorySetKeyAction at($offset)
 */
class CategorySetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategorySetKeyAction $value
     * @psalm-param CategorySetKeyAction|stdClass $value
     * @return CategorySetKeyActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetKeyAction
     */
    protected function mapper()
    {
        return function(int $index): ?CategorySetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategorySetKeyActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}