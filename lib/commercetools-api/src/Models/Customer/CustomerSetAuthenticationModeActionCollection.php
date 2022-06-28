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
 * @extends CustomerUpdateActionCollection<CustomerSetAuthenticationModeAction>
 * @method CustomerSetAuthenticationModeAction current()
 * @method CustomerSetAuthenticationModeAction end()
 * @method CustomerSetAuthenticationModeAction at($offset)
 */
class CustomerSetAuthenticationModeActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetAuthenticationModeAction $value
     * @psalm-param CustomerSetAuthenticationModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetAuthenticationModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetAuthenticationModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetAuthenticationModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetAuthenticationModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetAuthenticationModeAction $data */
                $data = CustomerSetAuthenticationModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
