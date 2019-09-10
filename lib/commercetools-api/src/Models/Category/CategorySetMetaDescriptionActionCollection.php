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
 * @extends MapperSequence<CategorySetMetaDescriptionAction>
 * @method CategorySetMetaDescriptionAction current()
 * @method CategorySetMetaDescriptionAction at($offset)
 */
class CategorySetMetaDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategorySetMetaDescriptionAction $value
     * @psalm-param CategorySetMetaDescriptionAction|stdClass $value
     * @return CategorySetMetaDescriptionActionCollection
     * @throws InvalidArgumentException
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
        return function(int $index): ?CategorySetMetaDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategorySetMetaDescriptionActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}