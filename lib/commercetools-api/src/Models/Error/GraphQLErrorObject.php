<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitAmbiguousError;
use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitLimitExceededError;
use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitUnresolvedError;
use Commercetools\Api\Models\Agent\GraphQLAgentExtractionFailedError;
use Commercetools\Api\Models\Agent\GraphQLAgentFeatureDisabledError;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingCountryError;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingCustomerEmailError;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingEntityTypeError;
use Commercetools\Api\Models\Agent\GraphQLAgentNoLineItemsExtractedError;
use Commercetools\Api\Models\Agent\GraphQLAgentOutOfScopeError;
use Commercetools\Api\Models\Agent\GraphQLAgentProductSearchNotEnabledError;
use Commercetools\Api\Models\Agent\GraphQLAgentProductsNotFoundError;
use Commercetools\Api\Models\Agent\GraphQLAgentQuoteRequestCreationFailedError;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreAmbiguousError;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreDistributionChannelsUnsupportedError;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreUnresolvedError;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLErrorObject extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'code';
    public const FIELD_CODE = 'code';
    public const FIELD_PATTERN1 = '//';

    /**
     * <p>One of the error codes that is listed on the <a href="/errors">Errors</a> page.</p>
     *

     * @return null|string
     */
    public function getCode();
}
