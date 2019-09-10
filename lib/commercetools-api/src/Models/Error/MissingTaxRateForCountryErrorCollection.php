<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MissingTaxRateForCountryError>
 *
 * @method MissingTaxRateForCountryError current()
 * @method MissingTaxRateForCountryError at($offset)
 */
class MissingTaxRateForCountryErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingTaxRateForCountryError $value
     * @psalm-param MissingTaxRateForCountryError|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MissingTaxRateForCountryErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingTaxRateForCountryError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingTaxRateForCountryError
     */
    protected function mapper()
    {
        return function (int $index): ?MissingTaxRateForCountryError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MissingTaxRateForCountryErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
