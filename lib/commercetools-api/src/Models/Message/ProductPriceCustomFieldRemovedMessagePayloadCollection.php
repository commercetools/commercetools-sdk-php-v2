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
 * @extends MessagePayloadCollection<ProductPriceCustomFieldRemovedMessagePayload>
 * @method ProductPriceCustomFieldRemovedMessagePayload current()
 * @method ProductPriceCustomFieldRemovedMessagePayload end()
 * @method ProductPriceCustomFieldRemovedMessagePayload at($offset)
 */
class ProductPriceCustomFieldRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPriceCustomFieldRemovedMessagePayload $value
     * @psalm-param ProductPriceCustomFieldRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceCustomFieldRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceCustomFieldRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceCustomFieldRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceCustomFieldRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceCustomFieldRemovedMessagePayload $data */
                $data = ProductPriceCustomFieldRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
