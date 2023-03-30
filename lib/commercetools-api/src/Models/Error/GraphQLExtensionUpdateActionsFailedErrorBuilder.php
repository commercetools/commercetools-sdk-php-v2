<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLExtensionUpdateActionsFailedError>
 */
final class GraphQLExtensionUpdateActionsFailedErrorBuilder implements Builder
{
    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $localizedMessage;

    /**

     * @var ?JsonObject
     */
    private $extensionExtraInfo;

    /**

     * @var ?ExtensionErrorCollection
     */
    private $extensionErrors;

    /**
     * <p>User-defined localized description of the error.</p>
     *

     * @return null|LocalizedString
     */
    public function getLocalizedMessage()
    {
        return $this->localizedMessage instanceof LocalizedStringBuilder ? $this->localizedMessage->build() : $this->localizedMessage;
    }

    /**
     * <p>Any information that should be returned to the API caller.</p>
     *

     * @return null|JsonObject
     */
    public function getExtensionExtraInfo()
    {
        return $this->extensionExtraInfo;
    }

    /**
     * <p>Additional errors related to the API Extension.</p>
     *

     * @return null|ExtensionErrorCollection
     */
    public function getExtensionErrors()
    {
        return $this->extensionErrors;
    }

    /**
     * @param ?LocalizedString $localizedMessage
     * @return $this
     */
    public function withLocalizedMessage(?LocalizedString $localizedMessage)
    {
        $this->localizedMessage = $localizedMessage;

        return $this;
    }

    /**
     * @param ?JsonObject $extensionExtraInfo
     * @return $this
     */
    public function withExtensionExtraInfo(?JsonObject $extensionExtraInfo)
    {
        $this->extensionExtraInfo = $extensionExtraInfo;

        return $this;
    }

    /**
     * @param ?ExtensionErrorCollection $extensionErrors
     * @return $this
     */
    public function withExtensionErrors(?ExtensionErrorCollection $extensionErrors)
    {
        $this->extensionErrors = $extensionErrors;

        return $this;
    }

    /**
     * @deprecated use withLocalizedMessage() instead
     * @return $this
     */
    public function withLocalizedMessageBuilder(?LocalizedStringBuilder $localizedMessage)
    {
        $this->localizedMessage = $localizedMessage;

        return $this;
    }

    public function build(): GraphQLExtensionUpdateActionsFailedError
    {
        return new GraphQLExtensionUpdateActionsFailedErrorModel(
            $this->localizedMessage instanceof LocalizedStringBuilder ? $this->localizedMessage->build() : $this->localizedMessage,
            $this->extensionExtraInfo,
            $this->extensionErrors
        );
    }

    public static function of(): GraphQLExtensionUpdateActionsFailedErrorBuilder
    {
        return new self();
    }
}
