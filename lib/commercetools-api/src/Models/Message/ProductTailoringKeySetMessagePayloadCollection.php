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
 * @extends MessagePayloadCollection<ProductTailoringKeySetMessagePayload>
 * @method ProductTailoringKeySetMessagePayload current()
 * @method ProductTailoringKeySetMessagePayload end()
 * @method ProductTailoringKeySetMessagePayload at($offset)
 */
class ProductTailoringKeySetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductTailoringKeySetMessagePayload $value
     * @psalm-param ProductTailoringKeySetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringKeySetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringKeySetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringKeySetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringKeySetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringKeySetMessagePayload $data */
                $data = ProductTailoringKeySetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
