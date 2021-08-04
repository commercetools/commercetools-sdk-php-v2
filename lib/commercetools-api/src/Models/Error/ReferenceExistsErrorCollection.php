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
 * @extends ErrorObjectCollection<ReferenceExistsError>
 * @method ReferenceExistsError current()
 * @method ReferenceExistsError end()
 * @method ReferenceExistsError at($offset)
 */
class ReferenceExistsErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ReferenceExistsError $value
     * @psalm-param ReferenceExistsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReferenceExistsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReferenceExistsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReferenceExistsError
     */
    protected function mapper()
    {
        return function (?int $index): ?ReferenceExistsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReferenceExistsError $data */
                $data = ReferenceExistsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
