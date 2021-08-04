<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsummaries;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OperationStates>
 * @method OperationStates current()
 * @method OperationStates end()
 * @method OperationStates at($offset)
 */
class OperationStatesCollection extends MapperSequence
{
    /**
     * @psalm-assert OperationStates $value
     * @psalm-param OperationStates|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OperationStatesCollection
     */
    public function add($value)
    {
        if (!$value instanceof OperationStates) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OperationStates
     */
    protected function mapper()
    {
        return function (?int $index): ?OperationStates {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OperationStates $data */
                $data = OperationStatesModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
