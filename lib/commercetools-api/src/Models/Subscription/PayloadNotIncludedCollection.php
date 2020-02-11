<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PayloadNotIncluded>
 * @method PayloadNotIncluded current()
 * @method PayloadNotIncluded at($offset)
 */
class PayloadNotIncludedCollection extends MapperSequence
{
    /**
     * @psalm-assert PayloadNotIncluded $value
     * @psalm-param PayloadNotIncluded|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PayloadNotIncludedCollection
     */
    public function add($value)
    {
        if (!$value instanceof PayloadNotIncluded) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PayloadNotIncluded
     */
    protected function mapper()
    {
        return function (int $index): ?PayloadNotIncluded {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PayloadNotIncludedModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
