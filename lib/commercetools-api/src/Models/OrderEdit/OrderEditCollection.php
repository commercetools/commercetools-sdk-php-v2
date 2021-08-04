<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<OrderEdit>
 * @method OrderEdit current()
 * @method OrderEdit end()
 * @method OrderEdit at($offset)
 */
class OrderEditCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert OrderEdit $value
     * @psalm-param OrderEdit|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEdit) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEdit
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderEdit {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEdit $data */
                $data = OrderEditModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
