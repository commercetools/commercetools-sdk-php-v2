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
 * @extends MessagePayloadCollection<ProductSelectionDeletedMessagePayload>
 * @method ProductSelectionDeletedMessagePayload current()
 * @method ProductSelectionDeletedMessagePayload end()
 * @method ProductSelectionDeletedMessagePayload at($offset)
 */
class ProductSelectionDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductSelectionDeletedMessagePayload $value
     * @psalm-param ProductSelectionDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionDeletedMessagePayload $data */
                $data = ProductSelectionDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
