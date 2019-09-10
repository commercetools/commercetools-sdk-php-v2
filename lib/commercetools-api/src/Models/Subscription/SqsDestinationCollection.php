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
 * @extends MapperSequence<SqsDestination>
 *
 * @method SqsDestination current()
 * @method SqsDestination at($offset)
 */
class SqsDestinationCollection extends MapperSequence
{
    /**
     * @psalm-assert SqsDestination $value
     * @psalm-param SqsDestination|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return SqsDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof SqsDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SqsDestination
     */
    protected function mapper()
    {
        return function (int $index): ?SqsDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SqsDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
