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
 * @extends ErrorObjectCollection<AssociateMissingPermissionError>
 * @method AssociateMissingPermissionError current()
 * @method AssociateMissingPermissionError end()
 * @method AssociateMissingPermissionError at($offset)
 */
class AssociateMissingPermissionErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AssociateMissingPermissionError $value
     * @psalm-param AssociateMissingPermissionError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssociateMissingPermissionErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssociateMissingPermissionError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssociateMissingPermissionError
     */
    protected function mapper()
    {
        return function (?int $index): ?AssociateMissingPermissionError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssociateMissingPermissionError $data */
                $data = AssociateMissingPermissionErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
