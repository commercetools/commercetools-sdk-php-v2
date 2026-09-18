<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Agent\AgentBusinessUnitAmbiguousError;
use Commercetools\Api\Models\Agent\AgentBusinessUnitLimitExceededError;
use Commercetools\Api\Models\Agent\AgentBusinessUnitUnresolvedError;
use Commercetools\Api\Models\Agent\AgentExtractionFailedError;
use Commercetools\Api\Models\Agent\AgentFeatureDisabledError;
use Commercetools\Api\Models\Agent\AgentMissingCountryError;
use Commercetools\Api\Models\Agent\AgentMissingCustomerEmailError;
use Commercetools\Api\Models\Agent\AgentMissingEntityTypeError;
use Commercetools\Api\Models\Agent\AgentNoLineItemsExtractedError;
use Commercetools\Api\Models\Agent\AgentOutOfScopeError;
use Commercetools\Api\Models\Agent\AgentProductSearchNotEnabledError;
use Commercetools\Api\Models\Agent\AgentProductsNotFoundError;
use Commercetools\Api\Models\Agent\AgentQuoteRequestCreationFailedError;
use Commercetools\Api\Models\Agent\AgentStoreAmbiguousError;
use Commercetools\Api\Models\Agent\AgentStoreDistributionChannelsUnsupportedError;
use Commercetools\Api\Models\Agent\AgentStoreUnresolvedError;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ErrorObject extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'code';
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_PATTERN2 = '//';

    /**
     * <p>Error identifier.</p>
     *

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Plain text description of the cause of the error.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
