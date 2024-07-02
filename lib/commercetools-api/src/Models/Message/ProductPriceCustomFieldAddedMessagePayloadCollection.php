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
 * @extends MessagePayloadCollection<ProductPriceCustomFieldAddedMessagePayload>
 * @method ProductPriceCustomFieldAddedMessagePayload current()
 * @method ProductPriceCustomFieldAddedMessagePayload end()
 * @method ProductPriceCustomFieldAddedMessagePayload at($offset)
 */
class ProductPriceCustomFieldAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductPriceCustomFieldAddedMessagePayload $value
     * @psalm-param ProductPriceCustomFieldAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPriceCustomFieldAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceCustomFieldAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceCustomFieldAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductPriceCustomFieldAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPriceCustomFieldAddedMessagePayload $data */
                $data = ProductPriceCustomFieldAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
