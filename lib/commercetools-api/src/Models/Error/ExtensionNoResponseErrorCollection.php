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
 * @extends ErrorObjectCollection<ExtensionNoResponseError>
 * @method ExtensionNoResponseError current()
 * @method ExtensionNoResponseError at($offset)
 */
class ExtensionNoResponseErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ExtensionNoResponseError $value
     * @psalm-param ExtensionNoResponseError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionNoResponseErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionNoResponseError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionNoResponseError
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionNoResponseError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionNoResponseError $data */
                $data = ExtensionNoResponseErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
