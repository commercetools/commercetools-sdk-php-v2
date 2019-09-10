<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TypeSetDescriptionAction>
 * @method TypeSetDescriptionAction current()
 * @method TypeSetDescriptionAction at($offset)
 */
class TypeSetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeSetDescriptionAction $value
     * @psalm-param TypeSetDescriptionAction|stdClass $value
     * @return TypeSetDescriptionActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof TypeSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeSetDescriptionAction
     */
    protected function mapper()
    {
        return function(int $index): ?TypeSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}