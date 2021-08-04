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
 * @extends MessagePayloadCollection<ProductStateTransitionMessagePayload>
 * @method ProductStateTransitionMessagePayload current()
 * @method ProductStateTransitionMessagePayload end()
 * @method ProductStateTransitionMessagePayload at($offset)
 */
class ProductStateTransitionMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductStateTransitionMessagePayload $value
     * @psalm-param ProductStateTransitionMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductStateTransitionMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductStateTransitionMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductStateTransitionMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductStateTransitionMessagePayload $data */
                $data = ProductStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
