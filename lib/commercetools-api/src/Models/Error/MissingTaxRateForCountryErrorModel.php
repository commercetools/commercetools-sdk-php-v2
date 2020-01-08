<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObjectModel;

final class MissingTaxRateForCountryErrorModel extends JsonObjectModel implements MissingTaxRateForCountryError
{
    const DISCRIMINATOR_VALUE = 'MissingTaxRateForCountry';

    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?string
     */
    protected $taxCategoryId;

    /**
     * @var ?string
     */
    protected $country;

    /**
     * @var ?string
     */
    protected $state;

    public function __construct(
        string $message = null,
        string $taxCategoryId = null,
        string $country = null,
        string $state = null
    ) {
        $this->message = $message;
        $this->taxCategoryId = $taxCategoryId;
        $this->country = $country;
        $this->state = $state;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getTaxCategoryId()
    {
        if (is_null($this->taxCategoryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MissingTaxRateForCountryError::FIELD_TAX_CATEGORY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->taxCategoryId = (string) $data;
        }

        return $this->taxCategoryId;
    }

    /**
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MissingTaxRateForCountryError::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MissingTaxRateForCountryError::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setTaxCategoryId(?string $taxCategoryId): void
    {
        $this->taxCategoryId = $taxCategoryId;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }
}
