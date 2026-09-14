<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierModel;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AgentResponsesPayloadModel extends JsonObjectModel implements AgentResponsesPayload
{
    /**
     *
     * @var ?string
     */
    protected $outputType;

    /**
     *
     * @var ?string
     */
    protected $locale;

    /**
     *
     * @var ?string
     */
    protected $prompt;

    /**
     *
     * @var ?BusinessUnitResourceIdentifier
     */
    protected $businessUnit;

    /**
     *
     * @var ?StoreResourceIdentifier
     */
    protected $store;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $outputType = null,
        ?string $locale = null,
        ?string $prompt = null,
        ?BusinessUnitResourceIdentifier $businessUnit = null,
        ?StoreResourceIdentifier $store = null
    ) {
        $this->outputType = $outputType;
        $this->locale = $locale;
        $this->prompt = $prompt;
        $this->businessUnit = $businessUnit;
        $this->store = $store;
    }

    /**
     * <p>The entity to create.</p>
     *
     *
     * @return null|string
     */
    public function getOutputType()
    {
        if (is_null($this->outputType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OUTPUT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->outputType = (string) $data;
        }

        return $this->outputType;
    }

    /**
     * <p>A valid BCP 47 language tag, for example <code>en-US</code>.</p>
     *
     *
     * @return null|string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LOCALE);
            if (is_null($data)) {
                return null;
            }
            $this->locale = (string) $data;
        }

        return $this->locale;
    }

    /**
     * <p>Natural-language description of the desired Cart or Quote Request, such as the body of an email or a note. Required if no file is attached.</p>
     *
     *
     * @return null|string
     */
    public function getPrompt()
    {
        if (is_null($this->prompt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PROMPT);
            if (is_null($data)) {
                return null;
            }
            $this->prompt = (string) $data;
        }

        return $this->prompt;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnit">BusinessUnit</a> to use for the request. If omitted, the Intake Agent resolves it from the input.</p>
     *
     *
     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        if (is_null($this->businessUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnit = BusinessUnitResourceIdentifierModel::of($data);
        }

        return $this->businessUnit;
    }

    /**
     * <p><a href="ctp:api:type:Store">Store</a> to use for the request. If omitted, the Intake Agent resolves it from the input.</p>
     *
     *
     * @return null|StoreResourceIdentifier
     */
    public function getStore()
    {
        if (is_null($this->store)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STORE);
            if (is_null($data)) {
                return null;
            }

            $this->store = StoreResourceIdentifierModel::of($data);
        }

        return $this->store;
    }


    /**
     * @param ?string $outputType
     */
    public function setOutputType(?string $outputType): void
    {
        $this->outputType = $outputType;
    }

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @param ?string $prompt
     */
    public function setPrompt(?string $prompt): void
    {
        $this->prompt = $prompt;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void
    {
        $this->businessUnit = $businessUnit;
    }

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void
    {
        $this->store = $store;
    }
}
