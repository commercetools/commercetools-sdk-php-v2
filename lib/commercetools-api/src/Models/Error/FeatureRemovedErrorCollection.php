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
 * @extends ErrorObjectCollection<FeatureRemovedError>
 * @method FeatureRemovedError current()
 * @method FeatureRemovedError at($offset)
 */
class FeatureRemovedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert FeatureRemovedError $value
     * @psalm-param FeatureRemovedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return FeatureRemovedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof FeatureRemovedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?FeatureRemovedError
     */
    protected function mapper()
    {
        return function (?int $index): ?FeatureRemovedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var FeatureRemovedError $data */
                $data = FeatureRemovedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
