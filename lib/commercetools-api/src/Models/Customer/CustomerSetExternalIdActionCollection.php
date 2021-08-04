<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Customer\CustomerUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CustomerUpdateActionCollection<CustomerSetExternalIdAction>
 * @method CustomerSetExternalIdAction current()
 * @method CustomerSetExternalIdAction at($offset)
 */
class CustomerSetExternalIdActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetExternalIdAction $value
     * @psalm-param CustomerSetExternalIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetExternalIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetExternalIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetExternalIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetExternalIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetExternalIdAction $data */
                $data = CustomerSetExternalIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
