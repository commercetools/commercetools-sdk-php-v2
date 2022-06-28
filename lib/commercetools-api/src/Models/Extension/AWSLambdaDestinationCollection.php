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
 * @extends ExtensionDestinationCollection<AWSLambdaDestination>
 * @method AWSLambdaDestination current()
 * @method AWSLambdaDestination end()
 * @method AWSLambdaDestination at($offset)
 */
class AWSLambdaDestinationCollection extends ExtensionDestinationCollection
{
    /**
     * @psalm-assert AWSLambdaDestination $value
     * @psalm-param AWSLambdaDestination|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AWSLambdaDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof AWSLambdaDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AWSLambdaDestination
     */
    protected function mapper()
    {
        return function (?int $index): ?AWSLambdaDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AWSLambdaDestination $data */
                $data = AWSLambdaDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
