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
 * @extends MapperSequence<StagedOrderAddItemShippingAddressAction>
 * @method StagedOrderAddItemShippingAddressAction current()
 * @method StagedOrderAddItemShippingAddressAction at($offset)
 */
class StagedOrderAddItemShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderAddItemShippingAddressAction $value
     * @psalm-param StagedOrderAddItemShippingAddressAction|stdClass $value
     * @return StagedOrderAddItemShippingAddressActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderAddItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderAddItemShippingAddressAction
     */
    protected function mapper()
    {
        return function(int $index): ?StagedOrderAddItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderAddItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}