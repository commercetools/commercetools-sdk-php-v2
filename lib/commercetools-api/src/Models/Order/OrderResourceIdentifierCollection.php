<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<OrderResourceIdentifier>
 * @method OrderResourceIdentifier current()
 * @method OrderResourceIdentifier at($offset)
 */
class OrderResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert OrderResourceIdentifier $value
     * @psalm-param OrderResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?OrderResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderResourceIdentifier $data */
                $data = OrderResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
