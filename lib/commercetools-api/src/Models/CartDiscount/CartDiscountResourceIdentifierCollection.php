<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<CartDiscountResourceIdentifier>
 * @method CartDiscountResourceIdentifier current()
 * @method CartDiscountResourceIdentifier at($offset)
 */
class CartDiscountResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert CartDiscountResourceIdentifier $value
     * @psalm-param CartDiscountResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountResourceIdentifier $data */
                $data = CartDiscountResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
