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
 * @extends MapperSequence<TypeAddLocalizedEnumValueAction>
 * @method TypeAddLocalizedEnumValueAction current()
 * @method TypeAddLocalizedEnumValueAction at($offset)
 */
class TypeAddLocalizedEnumValueActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeAddLocalizedEnumValueAction $value
     * @psalm-param TypeAddLocalizedEnumValueAction|stdClass $value
     * @return TypeAddLocalizedEnumValueActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof TypeAddLocalizedEnumValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeAddLocalizedEnumValueAction
     */
    protected function mapper()
    {
        return function(int $index): ?TypeAddLocalizedEnumValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeAddLocalizedEnumValueActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}