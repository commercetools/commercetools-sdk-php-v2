<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<InvalidSubjectError>
 * @method InvalidSubjectError current()
 * @method InvalidSubjectError at($offset)
 */
class InvalidSubjectErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InvalidSubjectError $value
     * @psalm-param InvalidSubjectError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidSubjectErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidSubjectError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidSubjectError
     */
    protected function mapper()
    {
        return function (int $index): ?InvalidSubjectError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidSubjectError $data */
                $data = InvalidSubjectErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
