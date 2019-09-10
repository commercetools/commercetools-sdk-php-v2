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
 * @extends MapperSequence<CustomerSetLocaleAction>
 * @method CustomerSetLocaleAction current()
 * @method CustomerSetLocaleAction at($offset)
 */
class CustomerSetLocaleActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetLocaleAction $value
     * @psalm-param CustomerSetLocaleAction|stdClass $value
     * @return CustomerSetLocaleActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetLocaleAction
     */
    protected function mapper()
    {
        return function(int $index): ?CustomerSetLocaleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetLocaleActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}