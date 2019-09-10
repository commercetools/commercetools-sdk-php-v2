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
 * @extends MapperSequence<StagedOrderSetCustomLineItemCustomTypeAction>
 * @method StagedOrderSetCustomLineItemCustomTypeAction current()
 * @method StagedOrderSetCustomLineItemCustomTypeAction at($offset)
 */
class StagedOrderSetCustomLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetCustomLineItemCustomTypeAction $value
     * @psalm-param StagedOrderSetCustomLineItemCustomTypeAction|stdClass $value
     * @return StagedOrderSetCustomLineItemCustomTypeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderSetCustomLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetCustomLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}