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
 * @extends ErrorObjectCollection<InvalidFieldsUpdateError>
 * @method InvalidFieldsUpdateError current()
 * @method InvalidFieldsUpdateError end()
 * @method InvalidFieldsUpdateError at($offset)
 */
class InvalidFieldsUpdateErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InvalidFieldsUpdateError $value
     * @psalm-param InvalidFieldsUpdateError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidFieldsUpdateErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidFieldsUpdateError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidFieldsUpdateError
     */
    protected function mapper()
    {
        return function (?int $index): ?InvalidFieldsUpdateError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidFieldsUpdateError $data */
                $data = InvalidFieldsUpdateErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
