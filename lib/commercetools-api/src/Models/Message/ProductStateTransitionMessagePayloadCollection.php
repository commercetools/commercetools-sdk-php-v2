<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductStateTransitionMessagePayload>
 *
 * @method ProductStateTransitionMessagePayload current()
 * @method ProductStateTransitionMessagePayload at($offset)
 */
class ProductStateTransitionMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductStateTransitionMessagePayload $value
     * @psalm-param ProductStateTransitionMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?ProductStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
