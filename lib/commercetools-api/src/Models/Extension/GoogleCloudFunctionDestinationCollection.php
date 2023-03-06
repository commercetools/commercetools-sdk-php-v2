<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Extension\ExtensionDestinationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ExtensionDestinationCollection<GoogleCloudFunctionDestination>
 * @method GoogleCloudFunctionDestination current()
 * @method GoogleCloudFunctionDestination end()
 * @method GoogleCloudFunctionDestination at($offset)
 */
class GoogleCloudFunctionDestinationCollection extends ExtensionDestinationCollection
{
    /**
     * @psalm-assert GoogleCloudFunctionDestination $value
     * @psalm-param GoogleCloudFunctionDestination|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GoogleCloudFunctionDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof GoogleCloudFunctionDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GoogleCloudFunctionDestination
     */
    protected function mapper()
    {
        return function (?int $index): ?GoogleCloudFunctionDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GoogleCloudFunctionDestination $data */
                $data = GoogleCloudFunctionDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
