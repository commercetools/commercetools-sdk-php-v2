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
 * @extends MessagePayloadCollection<ProductTailoringDescriptionSetMessagePayload>
 * @method ProductTailoringDescriptionSetMessagePayload current()
 * @method ProductTailoringDescriptionSetMessagePayload end()
 * @method ProductTailoringDescriptionSetMessagePayload at($offset)
 */
class ProductTailoringDescriptionSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductTailoringDescriptionSetMessagePayload $value
     * @psalm-param ProductTailoringDescriptionSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringDescriptionSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringDescriptionSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringDescriptionSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringDescriptionSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringDescriptionSetMessagePayload $data */
                $data = ProductTailoringDescriptionSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
