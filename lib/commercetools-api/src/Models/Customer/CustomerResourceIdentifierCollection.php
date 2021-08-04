<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<CustomerResourceIdentifier>
 * @method CustomerResourceIdentifier current()
 * @method CustomerResourceIdentifier end()
 * @method CustomerResourceIdentifier at($offset)
 */
class CustomerResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert CustomerResourceIdentifier $value
     * @psalm-param CustomerResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerResourceIdentifier $data */
                $data = CustomerResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
