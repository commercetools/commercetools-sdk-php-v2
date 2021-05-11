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
 * @extends ErrorObjectCollection<SyntaxErrorError>
 * @method SyntaxErrorError current()
 * @method SyntaxErrorError at($offset)
 */
class SyntaxErrorErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert SyntaxErrorError $value
     * @psalm-param SyntaxErrorError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SyntaxErrorErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof SyntaxErrorError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SyntaxErrorError
     */
    protected function mapper()
    {
        return function (int $index): ?SyntaxErrorError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SyntaxErrorError $data */
                $data = SyntaxErrorErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
