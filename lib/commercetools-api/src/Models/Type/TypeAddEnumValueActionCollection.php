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
 * @extends MapperSequence<TypeAddEnumValueAction>
 * @method TypeAddEnumValueAction current()
 * @method TypeAddEnumValueAction at($offset)
 */
class TypeAddEnumValueActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeAddEnumValueAction $value
     * @psalm-param TypeAddEnumValueAction|stdClass $value
     * @return TypeAddEnumValueActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof TypeAddEnumValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeAddEnumValueAction
     */
    protected function mapper()
    {
        return function(int $index): ?TypeAddEnumValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeAddEnumValueActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}