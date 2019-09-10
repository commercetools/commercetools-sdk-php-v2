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
 * @extends MapperSequence<StagedOrderSetCustomerEmailAction>
 * @method StagedOrderSetCustomerEmailAction current()
 * @method StagedOrderSetCustomerEmailAction at($offset)
 */
class StagedOrderSetCustomerEmailActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetCustomerEmailAction $value
     * @psalm-param StagedOrderSetCustomerEmailAction|stdClass $value
     * @return StagedOrderSetCustomerEmailActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomerEmailAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomerEmailAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderSetCustomerEmailAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetCustomerEmailActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}