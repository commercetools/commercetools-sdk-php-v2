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
 * @extends OrderEditResultCollection<OrderEditPreviewSuccess>
 * @method OrderEditPreviewSuccess current()
 * @method OrderEditPreviewSuccess at($offset)
 */
class OrderEditPreviewSuccessCollection extends OrderEditResultCollection
{
    /**
     * @psalm-assert OrderEditPreviewSuccess $value
     * @psalm-param OrderEditPreviewSuccess|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditPreviewSuccessCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditPreviewSuccess) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditPreviewSuccess
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditPreviewSuccess {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditPreviewSuccess $data */
                $data = OrderEditPreviewSuccessModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
