<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MissingTaxRateForCountryError>
 */
final class MissingTaxRateForCountryErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $code;

    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?string
     */
    private $country;

    /**
     * @var ?string
     */
    private $state;

    /**
     * @var ?string
     */
    private $taxCategoryId;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return null|string
     */
    public function getTaxCategoryId()
    {
        return $this->taxCategoryId;
    }

    /**
     * @return $this
     */
    public function withCode(?string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxCategoryId(?string $taxCategoryId)
    {
        $this->taxCategoryId = $taxCategoryId;

        return $this;
    }

    public function build(): MissingTaxRateForCountryError
    {
        return new MissingTaxRateForCountryErrorModel(
            $this->code,
            $this->message,
            $this->country,
            $this->state,
            $this->taxCategoryId
        );
    }

    public static function of(): MissingTaxRateForCountryErrorBuilder
    {
        return new self();
    }
}
