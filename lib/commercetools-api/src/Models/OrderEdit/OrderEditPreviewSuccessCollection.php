<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderEditPreviewSuccess>
 *
 * @method OrderEditPreviewSuccess current()
 * @method OrderEditPreviewSuccess at($offset)
 */
class OrderEditPreviewSuccessCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditPreviewSuccess $value
     * @psalm-param OrderEditPreviewSuccess|stdClass $value
     *
     * @param mixed $value
     *
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
                $data = OrderEditPreviewSuccessModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
