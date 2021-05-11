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
 * @extends ErrorObjectCollection<DuplicateFieldError>
 * @method DuplicateFieldError current()
 * @method DuplicateFieldError at($offset)
 */
class DuplicateFieldErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert DuplicateFieldError $value
     * @psalm-param DuplicateFieldError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DuplicateFieldErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof DuplicateFieldError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DuplicateFieldError
     */
    protected function mapper()
    {
        return function (int $index): ?DuplicateFieldError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DuplicateFieldError $data */
                $data = DuplicateFieldErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
