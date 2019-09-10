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
 * @extends MapperSequence<CategoryChangeOrderHintAction>
 * @method CategoryChangeOrderHintAction current()
 * @method CategoryChangeOrderHintAction at($offset)
 */
class CategoryChangeOrderHintActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryChangeOrderHintAction $value
     * @psalm-param CategoryChangeOrderHintAction|stdClass $value
     * @return CategoryChangeOrderHintActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CategoryChangeOrderHintAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryChangeOrderHintAction
     */
    protected function mapper()
    {
        return function(int $index): ?CategoryChangeOrderHintAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryChangeOrderHintActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}