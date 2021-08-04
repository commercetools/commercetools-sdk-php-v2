<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use stdClass;

/**
 * @extends ErrorObjectCollection<InvalidStateTransitionError>
 * @method InvalidStateTransitionError current()
 * @method InvalidStateTransitionError end()
 * @method InvalidStateTransitionError at($offset)
 */
class InvalidStateTransitionErrorCollection extends ErrorObjectCollection
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
        return function (?int $index): ?InvalidStateTransitionError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidStateTransitionError $data */
                $data = InvalidStateTransitionErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
