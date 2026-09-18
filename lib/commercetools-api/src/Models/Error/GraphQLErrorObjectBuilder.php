<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitAmbiguousError;
use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitAmbiguousErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitLimitExceededError;
use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitLimitExceededErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitUnresolvedError;
use Commercetools\Api\Models\Agent\GraphQLAgentBusinessUnitUnresolvedErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentExtractionFailedError;
use Commercetools\Api\Models\Agent\GraphQLAgentExtractionFailedErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentFeatureDisabledError;
use Commercetools\Api\Models\Agent\GraphQLAgentFeatureDisabledErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingCountryError;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingCountryErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingCustomerEmailError;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingCustomerEmailErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingEntityTypeError;
use Commercetools\Api\Models\Agent\GraphQLAgentMissingEntityTypeErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentNoLineItemsExtractedError;
use Commercetools\Api\Models\Agent\GraphQLAgentNoLineItemsExtractedErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentOutOfScopeError;
use Commercetools\Api\Models\Agent\GraphQLAgentOutOfScopeErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentProductSearchNotEnabledError;
use Commercetools\Api\Models\Agent\GraphQLAgentProductSearchNotEnabledErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentProductsNotFoundError;
use Commercetools\Api\Models\Agent\GraphQLAgentProductsNotFoundErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentQuoteRequestCreationFailedError;
use Commercetools\Api\Models\Agent\GraphQLAgentQuoteRequestCreationFailedErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreAmbiguousError;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreAmbiguousErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreDistributionChannelsUnsupportedError;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreDistributionChannelsUnsupportedErrorBuilder;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreUnresolvedError;
use Commercetools\Api\Models\Agent\GraphQLAgentStoreUnresolvedErrorBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLErrorObject>
 */
final class GraphQLErrorObjectBuilder implements Builder
{
    public function build(): GraphQLErrorObject
    {
        return new GraphQLErrorObjectModel(
        );
    }

    public static function of(): GraphQLErrorObjectBuilder
    {
        return new self();
    }
}
