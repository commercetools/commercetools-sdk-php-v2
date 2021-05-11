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
 * @extends ExtensionDestinationCollection<ExtensionAWSLambdaDestination>
 * @method ExtensionAWSLambdaDestination current()
 * @method ExtensionAWSLambdaDestination at($offset)
 */
class ExtensionAWSLambdaDestinationCollection extends ExtensionDestinationCollection
{
    /**
     * @psalm-assert ExtensionAWSLambdaDestination $value
     * @psalm-param ExtensionAWSLambdaDestination|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionAWSLambdaDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionAWSLambdaDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionAWSLambdaDestination
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionAWSLambdaDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionAWSLambdaDestination $data */
                $data = ExtensionAWSLambdaDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
