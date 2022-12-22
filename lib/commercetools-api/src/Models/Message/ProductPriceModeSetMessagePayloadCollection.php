<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<ProductPriceModeSetMessagePayload>
 * @method ProductPriceModeSetMessagePayload current()
 * @method ProductPriceModeSetMessagePayload end()
 * @method ProductPriceModeSetMessagePayload at($offset)
 */
class ProductPriceModeSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPriceModeSetMessagePayload $value
     * @psalm-param ProductPriceModeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceModeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceModeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceModeSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceModeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceModeSetMessagePayload $data */
                $data = ProductPriceModeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
