<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AgentResponsesPayload extends JsonObject
{
    public const FIELD_OUTPUT_TYPE = 'outputType';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_PROMPT = 'prompt';
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_STORE = 'store';

    /**
     * <p>The entity to create.</p>
     *

     * @return null|string
     */
    public function getOutputType();

    /**
     * <p>A valid BCP 47 language tag, for example <code>en-US</code>.</p>
     *

     * @return null|string
     */
    public function getLocale();

    /**
     * <p>Natural-language description of the desired Cart or Quote Request, such as the body of an email or a note. Required if no file is attached.</p>
     *

     * @return null|string
     */
    public function getPrompt();

    /**
     * <p><a href="ctp:api:type:BusinessUnit">BusinessUnit</a> to use for the request. If omitted, the Intake Agent resolves it from the input.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit();

    /**
     * <p><a href="ctp:api:type:Store">Store</a> to use for the request. If omitted, the Intake Agent resolves it from the input.</p>
     *

     * @return null|StoreResourceIdentifier
     */
    public function getStore();

    /**
     * @param ?string $outputType
     */
    public function setOutputType(?string $outputType): void;

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;

    /**
     * @param ?string $prompt
     */
    public function setPrompt(?string $prompt): void;

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit): void;

    /**
     * @param ?StoreResourceIdentifier $store
     */
    public function setStore(?StoreResourceIdentifier $store): void;
}
