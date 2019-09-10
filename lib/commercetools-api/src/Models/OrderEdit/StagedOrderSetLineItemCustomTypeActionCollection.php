<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StagedOrderSetLineItemCustomTypeAction>
 * @method StagedOrderSetLineItemCustomTypeAction current()
 * @method StagedOrderSetLineItemCustomTypeAction at($offset)
 */
class StagedOrderSetLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetLineItemCustomTypeAction $value
     * @psalm-param StagedOrderSetLineItemCustomTypeAction|stdClass $value
     * @return StagedOrderSetLineItemCustomTypeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderSetLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}