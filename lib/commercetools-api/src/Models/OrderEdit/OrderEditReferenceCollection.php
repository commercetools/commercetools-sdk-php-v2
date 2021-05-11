<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<OrderEditReference>
 * @method OrderEditReference current()
 * @method OrderEditReference at($offset)
 */
class OrderEditReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert OrderEditReference $value
     * @psalm-param OrderEditReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditReference
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditReference $data */
                $data = OrderEditReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
