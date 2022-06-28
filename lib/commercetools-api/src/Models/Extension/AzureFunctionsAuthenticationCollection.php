<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Extension\HttpDestinationAuthenticationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends HttpDestinationAuthenticationCollection<AzureFunctionsAuthentication>
 * @method AzureFunctionsAuthentication current()
 * @method AzureFunctionsAuthentication end()
 * @method AzureFunctionsAuthentication at($offset)
 */
class AzureFunctionsAuthenticationCollection extends HttpDestinationAuthenticationCollection
{
    /**
     * @psalm-assert AzureFunctionsAuthentication $value
     * @psalm-param AzureFunctionsAuthentication|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AzureFunctionsAuthenticationCollection
     */
    public function add($value)
    {
        if (!$value instanceof AzureFunctionsAuthentication) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AzureFunctionsAuthentication
     */
    protected function mapper()
    {
        return function (?int $index): ?AzureFunctionsAuthentication {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AzureFunctionsAuthentication $data */
                $data = AzureFunctionsAuthenticationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
