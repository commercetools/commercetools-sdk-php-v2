<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TaxCategoryDraft>
 */
final class TaxCategoryDraftBuilder implements Builder
{
    /**
     * @var ?TaxRateDraftCollection
     */
    private $rates;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $description;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|TaxRateDraftCollection
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withRates(?TaxRateDraftCollection $rates)
    {
        $this->rates = $rates;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescription(?string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    public function build(): TaxCategoryDraft
    {
        return new TaxCategoryDraftModel(
            $this->rates,
            $this->name,
            $this->description,
            $this->key
        );
    }

    public static function of(): TaxCategoryDraftBuilder
    {
        return new self();
    }
}
