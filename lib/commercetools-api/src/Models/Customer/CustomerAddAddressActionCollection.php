<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerAddAddressAction>
 * @method CustomerAddAddressAction current()
 * @method CustomerAddAddressAction at($offset)
 */
class CustomerAddAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerAddAddressAction $value
     * @psalm-param CustomerAddAddressAction|stdClass $value
     * @return CustomerAddAddressActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddAddressAction
     */
    protected function mapper()
    {
        return function(int $index): ?CustomerAddAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerAddAddressActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}