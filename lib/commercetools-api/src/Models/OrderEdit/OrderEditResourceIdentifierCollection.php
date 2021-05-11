<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<OrderEditResourceIdentifier>
 * @method OrderEditResourceIdentifier current()
 * @method OrderEditResourceIdentifier at($offset)
 */
class OrderEditResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert OrderEditResourceIdentifier $value
     * @psalm-param OrderEditResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditResourceIdentifier $data */
                $data = OrderEditResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
