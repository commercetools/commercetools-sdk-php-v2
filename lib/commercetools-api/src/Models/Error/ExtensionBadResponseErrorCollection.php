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
 * @extends ErrorObjectCollection<ExtensionBadResponseError>
 * @method ExtensionBadResponseError current()
 * @method ExtensionBadResponseError at($offset)
 */
class ExtensionBadResponseErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ExtensionBadResponseError $value
     * @psalm-param ExtensionBadResponseError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionBadResponseErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionBadResponseError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionBadResponseError
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionBadResponseError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionBadResponseError $data */
                $data = ExtensionBadResponseErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
