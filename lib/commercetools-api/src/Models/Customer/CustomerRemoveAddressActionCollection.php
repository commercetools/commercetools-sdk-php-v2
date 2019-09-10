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
 * @extends MapperSequence<CustomerRemoveAddressAction>
 * @method CustomerRemoveAddressAction current()
 * @method CustomerRemoveAddressAction at($offset)
 */
class CustomerRemoveAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerRemoveAddressAction $value
     * @psalm-param CustomerRemoveAddressAction|stdClass $value
     * @return CustomerRemoveAddressActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomerRemoveAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerRemoveAddressAction
     */
    protected function mapper()
    {
        return function(int $index): ?CustomerRemoveAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerRemoveAddressActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}