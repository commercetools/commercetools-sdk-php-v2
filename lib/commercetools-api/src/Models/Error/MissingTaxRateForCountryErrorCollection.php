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
 * @extends ErrorObjectCollection<MissingTaxRateForCountryError>
 * @method MissingTaxRateForCountryError current()
 * @method MissingTaxRateForCountryError end()
 * @method MissingTaxRateForCountryError at($offset)
 */
class MissingTaxRateForCountryErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert MissingTaxRateForCountryError $value
     * @psalm-param MissingTaxRateForCountryError|stdClass $value
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
        return function (?int $index): ?MissingTaxRateForCountryError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingTaxRateForCountryError $data */
                $data = MissingTaxRateForCountryErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
