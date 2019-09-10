<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerGroupSetCustomFieldAction>
 * @method CustomerGroupSetCustomFieldAction current()
 * @method CustomerGroupSetCustomFieldAction at($offset)
 */
class CustomerGroupSetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroupSetCustomFieldAction $value
     * @psalm-param CustomerGroupSetCustomFieldAction|stdClass $value
     * @return CustomerGroupSetCustomFieldActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupSetCustomFieldAction
     */
    protected function mapper()
    {
        return function(int $index): ?CustomerGroupSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerGroupSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}