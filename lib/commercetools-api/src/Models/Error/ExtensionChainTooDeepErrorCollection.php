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
 * @extends ErrorObjectCollection<ExtensionChainTooDeepError>
 * @method ExtensionChainTooDeepError current()
 * @method ExtensionChainTooDeepError end()
 * @method ExtensionChainTooDeepError at($offset)
 */
class ExtensionChainTooDeepErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert ExtensionChainTooDeepError $value
     * @psalm-param ExtensionChainTooDeepError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionChainTooDeepErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionChainTooDeepError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionChainTooDeepError
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionChainTooDeepError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionChainTooDeepError $data */
                $data = ExtensionChainTooDeepErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
