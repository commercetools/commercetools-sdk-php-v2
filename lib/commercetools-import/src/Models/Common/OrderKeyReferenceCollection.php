<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\KeyReferenceCollection;
use stdClass;

/**
 * @extends KeyReferenceCollection<OrderKeyReference>
 * @method OrderKeyReference current()
 * @method OrderKeyReference at($offset)
 */
class OrderKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert OrderKeyReference $value
     * @psalm-param OrderKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?OrderKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderKeyReference $data */
                $data = OrderKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
