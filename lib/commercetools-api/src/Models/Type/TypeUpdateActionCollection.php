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
 * @extends MapperSequence<TypeUpdateAction>
 * @method TypeUpdateAction current()
 * @method TypeUpdateAction at($offset)
 */
class TypeUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeUpdateAction $value
     * @psalm-param TypeUpdateAction|stdClass $value
     * @return TypeUpdateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof TypeUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeUpdateAction
     */
    protected function mapper()
    {
        return function(int $index): ?TypeUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeUpdateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}