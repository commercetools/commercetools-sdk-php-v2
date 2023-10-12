<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<CustomerEmailTokenReference>
 * @method CustomerEmailTokenReference current()
 * @method CustomerEmailTokenReference end()
 * @method CustomerEmailTokenReference at($offset)
 */
class CustomerEmailTokenReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert CustomerEmailTokenReference $value
     * @psalm-param CustomerEmailTokenReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerEmailTokenReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerEmailTokenReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerEmailTokenReference
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerEmailTokenReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerEmailTokenReference $data */
                $data = CustomerEmailTokenReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
