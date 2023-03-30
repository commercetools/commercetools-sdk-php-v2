<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\GraphQLErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends GraphQLErrorObjectCollection<GraphQLMissingTaxRateForCountryError>
 * @method GraphQLMissingTaxRateForCountryError current()
 * @method GraphQLMissingTaxRateForCountryError end()
 * @method GraphQLMissingTaxRateForCountryError at($offset)
 */
class GraphQLMissingTaxRateForCountryErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLMissingTaxRateForCountryError $value
     * @psalm-param GraphQLMissingTaxRateForCountryError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLMissingTaxRateForCountryErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLMissingTaxRateForCountryError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLMissingTaxRateForCountryError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLMissingTaxRateForCountryError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLMissingTaxRateForCountryError $data */
                $data = GraphQLMissingTaxRateForCountryErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
