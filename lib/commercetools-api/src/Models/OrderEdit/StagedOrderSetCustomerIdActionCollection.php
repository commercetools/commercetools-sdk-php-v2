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
 * @extends MapperSequence<StagedOrderSetCustomerIdAction>
 * @method StagedOrderSetCustomerIdAction current()
 * @method StagedOrderSetCustomerIdAction at($offset)
 */
class StagedOrderSetCustomerIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetCustomerIdAction $value
     * @psalm-param StagedOrderSetCustomerIdAction|stdClass $value
     * @return StagedOrderSetCustomerIdActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomerIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomerIdAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderSetCustomerIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetCustomerIdActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}