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
 * @extends MapperSequence<CustomerUpdateAction>
 * @method CustomerUpdateAction current()
 * @method CustomerUpdateAction at($offset)
 */
class CustomerUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerUpdateAction $value
     * @psalm-param CustomerUpdateAction|stdClass $value
     * @return CustomerUpdateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomerUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerUpdateAction
     */
    protected function mapper()
    {
        return function(int $index): ?CustomerUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerUpdateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}