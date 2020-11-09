<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExternalOAuthFailedError>
 * @method ExternalOAuthFailedError current()
 * @method ExternalOAuthFailedError at($offset)
 */
class ExternalOAuthFailedErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert ExternalOAuthFailedError $value
     * @psalm-param ExternalOAuthFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExternalOAuthFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExternalOAuthFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExternalOAuthFailedError
     */
    protected function mapper()
    {
        return function (int $index): ?ExternalOAuthFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExternalOAuthFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
