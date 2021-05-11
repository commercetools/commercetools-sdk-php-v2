<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\OrderEdit\OrderEditResultCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderEditResultCollection<OrderEditPreviewFailure>
 * @method OrderEditPreviewFailure current()
 * @method OrderEditPreviewFailure at($offset)
 */
class OrderEditPreviewFailureCollection extends OrderEditResultCollection
{
    /**
     * @psalm-assert OrderEditPreviewFailure $value
     * @psalm-param OrderEditPreviewFailure|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditPreviewFailureCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditPreviewFailure) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditPreviewFailure
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditPreviewFailure {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditPreviewFailure $data */
                $data = OrderEditPreviewFailureModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
