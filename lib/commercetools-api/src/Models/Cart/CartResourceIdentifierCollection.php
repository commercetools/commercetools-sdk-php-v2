<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<CartResourceIdentifier>
 * @method CartResourceIdentifier current()
 * @method CartResourceIdentifier at($offset)
 */
class CartResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert CartResourceIdentifier $value
     * @psalm-param CartResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?CartResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartResourceIdentifier $data */
                $data = CartResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
