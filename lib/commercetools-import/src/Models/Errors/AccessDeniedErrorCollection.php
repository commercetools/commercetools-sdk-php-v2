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
 * @extends ErrorObjectCollection<AccessDeniedError>
 * @method AccessDeniedError current()
 * @method AccessDeniedError at($offset)
 */
class AccessDeniedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AccessDeniedError $value
     * @psalm-param AccessDeniedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AccessDeniedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AccessDeniedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AccessDeniedError
     */
    protected function mapper()
    {
        return function (?int $index): ?AccessDeniedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AccessDeniedError $data */
                $data = AccessDeniedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
