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
 * @extends MessagePayloadCollection<ProductTailoringNameSetMessagePayload>
 * @method ProductTailoringNameSetMessagePayload current()
 * @method ProductTailoringNameSetMessagePayload end()
 * @method ProductTailoringNameSetMessagePayload at($offset)
 */
class ProductTailoringNameSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductTailoringNameSetMessagePayload $value
     * @psalm-param ProductTailoringNameSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringNameSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringNameSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringNameSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringNameSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringNameSetMessagePayload $data */
                $data = ProductTailoringNameSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
