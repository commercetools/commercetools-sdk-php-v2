<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Agent\AgentBusinessUnitAmbiguousError;
use Commercetools\Api\Models\Agent\AgentBusinessUnitAmbiguousErrorBuilder;
use Commercetools\Api\Models\Agent\AgentBusinessUnitLimitExceededError;
use Commercetools\Api\Models\Agent\AgentBusinessUnitLimitExceededErrorBuilder;
use Commercetools\Api\Models\Agent\AgentBusinessUnitUnresolvedError;
use Commercetools\Api\Models\Agent\AgentBusinessUnitUnresolvedErrorBuilder;
use Commercetools\Api\Models\Agent\AgentExtractionFailedError;
use Commercetools\Api\Models\Agent\AgentExtractionFailedErrorBuilder;
use Commercetools\Api\Models\Agent\AgentFeatureDisabledError;
use Commercetools\Api\Models\Agent\AgentFeatureDisabledErrorBuilder;
use Commercetools\Api\Models\Agent\AgentMissingCountryError;
use Commercetools\Api\Models\Agent\AgentMissingCountryErrorBuilder;
use Commercetools\Api\Models\Agent\AgentMissingCustomerEmailError;
use Commercetools\Api\Models\Agent\AgentMissingCustomerEmailErrorBuilder;
use Commercetools\Api\Models\Agent\AgentMissingEntityTypeError;
use Commercetools\Api\Models\Agent\AgentMissingEntityTypeErrorBuilder;
use Commercetools\Api\Models\Agent\AgentNoLineItemsExtractedError;
use Commercetools\Api\Models\Agent\AgentNoLineItemsExtractedErrorBuilder;
use Commercetools\Api\Models\Agent\AgentOutOfScopeError;
use Commercetools\Api\Models\Agent\AgentOutOfScopeErrorBuilder;
use Commercetools\Api\Models\Agent\AgentProductSearchNotEnabledError;
use Commercetools\Api\Models\Agent\AgentProductSearchNotEnabledErrorBuilder;
use Commercetools\Api\Models\Agent\AgentProductsNotFoundError;
use Commercetools\Api\Models\Agent\AgentProductsNotFoundErrorBuilder;
use Commercetools\Api\Models\Agent\AgentQuoteRequestCreationFailedError;
use Commercetools\Api\Models\Agent\AgentQuoteRequestCreationFailedErrorBuilder;
use Commercetools\Api\Models\Agent\AgentStoreAmbiguousError;
use Commercetools\Api\Models\Agent\AgentStoreAmbiguousErrorBuilder;
use Commercetools\Api\Models\Agent\AgentStoreDistributionChannelsUnsupportedError;
use Commercetools\Api\Models\Agent\AgentStoreDistributionChannelsUnsupportedErrorBuilder;
use Commercetools\Api\Models\Agent\AgentStoreUnresolvedError;
use Commercetools\Api\Models\Agent\AgentStoreUnresolvedErrorBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ErrorObject>
 */
final class ErrorObjectBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p>Plain text description of the cause of the error.</p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }


    public function build(): ErrorObject
    {
        return new ErrorObjectModel(
            $this->message
        );
    }

    public static function of(): ErrorObjectBuilder
    {
        return new self();
    }
}
