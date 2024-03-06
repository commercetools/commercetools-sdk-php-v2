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
 * @extends MessagePayloadCollection<ProductTailoringDeletedMessagePayload>
 * @method ProductTailoringDeletedMessagePayload current()
 * @method ProductTailoringDeletedMessagePayload end()
 * @method ProductTailoringDeletedMessagePayload at($offset)
 */
class ProductTailoringDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductTailoringDeletedMessagePayload $value
     * @psalm-param ProductTailoringDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringDeletedMessagePayload $data */
                $data = ProductTailoringDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
