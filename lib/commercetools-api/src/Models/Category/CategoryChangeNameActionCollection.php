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
 * @extends MapperSequence<CategoryChangeNameAction>
 * @method CategoryChangeNameAction current()
 * @method CategoryChangeNameAction at($offset)
 */
class CategoryChangeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryChangeNameAction $value
     * @psalm-param CategoryChangeNameAction|stdClass $value
     * @return CategoryChangeNameActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CategoryChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryChangeNameAction
     */
    protected function mapper()
    {
        return function(int $index): ?CategoryChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryChangeNameActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}