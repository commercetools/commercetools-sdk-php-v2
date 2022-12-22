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
 * @extends MessageCollection<ProductPriceModeSetMessage>
 * @method ProductPriceModeSetMessage current()
 * @method ProductPriceModeSetMessage end()
 * @method ProductPriceModeSetMessage at($offset)
 */
class ProductPriceModeSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductPriceModeSetMessage $value
     * @psalm-param ProductPriceModeSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceModeSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceModeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceModeSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceModeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceModeSetMessage $data */
                $data = ProductPriceModeSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
