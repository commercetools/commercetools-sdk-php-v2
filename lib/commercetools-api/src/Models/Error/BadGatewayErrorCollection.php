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
 * @extends ErrorObjectCollection<BadGatewayError>
 * @method BadGatewayError current()
 * @method BadGatewayError end()
 * @method BadGatewayError at($offset)
 */
class BadGatewayErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert BadGatewayError $value
     * @psalm-param BadGatewayError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BadGatewayErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof BadGatewayError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BadGatewayError
     */
    protected function mapper()
    {
        return function (?int $index): ?BadGatewayError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BadGatewayError $data */
                $data = BadGatewayErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
