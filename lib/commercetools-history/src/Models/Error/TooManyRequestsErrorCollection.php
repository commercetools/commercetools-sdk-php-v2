<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Error;

use Commercetools\History\Models\ChangeHistory\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<TooManyRequestsError>
 * @method TooManyRequestsError current()
 * @method TooManyRequestsError end()
 * @method TooManyRequestsError at($offset)
 */
class TooManyRequestsErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert TooManyRequestsError $value
     * @psalm-param TooManyRequestsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TooManyRequestsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof TooManyRequestsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TooManyRequestsError
     */
    protected function mapper()
    {
        return function (?int $index): ?TooManyRequestsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TooManyRequestsError $data */
                $data = TooManyRequestsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
