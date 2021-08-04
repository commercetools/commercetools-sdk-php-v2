<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShippingMethodPagedQueryResponse>
 * @method ShippingMethodPagedQueryResponse current()
 * @method ShippingMethodPagedQueryResponse end()
 * @method ShippingMethodPagedQueryResponse at($offset)
 */
class ShippingMethodPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodPagedQueryResponse $value
     * @psalm-param ShippingMethodPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodPagedQueryResponse $data */
                $data = ShippingMethodPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
