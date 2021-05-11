<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<ProductPriceExternalDiscountSetMessage>
 * @method ProductPriceExternalDiscountSetMessage current()
 * @method ProductPriceExternalDiscountSetMessage at($offset)
 */
class ProductPriceExternalDiscountSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPriceExternalDiscountSetMessage $value
     * @psalm-param ProductPriceExternalDiscountSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceExternalDiscountSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceExternalDiscountSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceExternalDiscountSetMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ProductPriceExternalDiscountSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceExternalDiscountSetMessage $data */
                $data = ProductPriceExternalDiscountSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
