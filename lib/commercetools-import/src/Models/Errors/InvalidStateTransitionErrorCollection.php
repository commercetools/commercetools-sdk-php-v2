<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InvalidStateTransitionError>
 * @method InvalidStateTransitionError current()
 * @method InvalidStateTransitionError at($offset)
 */
class InvalidStateTransitionErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert InvalidStateTransitionError $value
     * @psalm-param InvalidStateTransitionError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidStateTransitionErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidStateTransitionError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidStateTransitionError
     */
    protected function mapper()
    {
        return function (int $index): ?InvalidStateTransitionError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InvalidStateTransitionErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
