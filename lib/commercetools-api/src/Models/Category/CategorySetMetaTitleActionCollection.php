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
 * @extends MapperSequence<CategorySetMetaTitleAction>
 * @method CategorySetMetaTitleAction current()
 * @method CategorySetMetaTitleAction at($offset)
 */
class CategorySetMetaTitleActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategorySetMetaTitleAction $value
     * @psalm-param CategorySetMetaTitleAction|stdClass $value
     * @return CategorySetMetaTitleActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetMetaTitleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetMetaTitleAction
     */
    protected function mapper()
    {
        return function(int $index): ?CategorySetMetaTitleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategorySetMetaTitleActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}