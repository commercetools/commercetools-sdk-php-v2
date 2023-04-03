<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLMissingTaxRateForCountryError>
 */
final class GraphQLMissingTaxRateForCountryErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $taxCategoryId;

    /**

     * @var ?string
     */
    private $country;

    /**

     * @var ?string
     */
    private $state;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:TaxCategory">TaxCategory</a>.</p>
     *

     * @return null|string
     */
    public function getTaxCategoryId()
    {
        return $this->taxCategoryId;
    }

    /**
     * <p>Country code of the geographic location.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>State within the country, such as Texas in the United States.</p>
     *

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param ?string $taxCategoryId
     * @return $this
     */
    public function withTaxCategoryId(?string $taxCategoryId)
    {
        $this->taxCategoryId = $taxCategoryId;

        return $this;
    }

    /**
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }


    public function build(): GraphQLMissingTaxRateForCountryError
    {
        return new GraphQLMissingTaxRateForCountryErrorModel(
            $this->taxCategoryId,
            $this->country,
            $this->state
        );
    }

    public static function of(): GraphQLMissingTaxRateForCountryErrorBuilder
    {
        return new self();
    }
}
