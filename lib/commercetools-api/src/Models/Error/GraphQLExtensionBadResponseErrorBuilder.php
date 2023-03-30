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
 * @implements Builder<GraphQLExtensionBadResponseError>
 */
final class GraphQLExtensionBadResponseErrorBuilder implements Builder
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

     * @var ?string
     */
    private $extensionBody;

    /**

     * @var ?int
     */
    private $extensionStatusCode;

    /**

     * @var ?string
     */
    private $extensionId;

    /**

     * @var ?string
     */
    private $extensionKey;

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
     * <p>The response body returned by the Extension.</p>
     *

     * @return null|string
     */
    public function getExtensionBody()
    {
        return $this->extensionBody;
    }

    /**
     * <p>Http status code returned by the Extension.</p>
     *

     * @return null|int
     */
    public function getExtensionStatusCode()
    {
        return $this->extensionStatusCode;
    }

    /**
     * <p>Unique identifier of the Extension.</p>
     *

     * @return null|string
     */
    public function getExtensionId()
    {
        return $this->extensionId;
    }

    /**
     * <p>User-defined unique identifier of the Extension.</p>
     *

     * @return null|string
     */
    public function getExtensionKey()
    {
        return $this->extensionKey;
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
     * @param ?string $extensionBody
     * @return $this
     */
    public function withExtensionBody(?string $extensionBody)
    {
        $this->extensionBody = $extensionBody;

        return $this;
    }

    /**
     * @param ?int $extensionStatusCode
     * @return $this
     */
    public function withExtensionStatusCode(?int $extensionStatusCode)
    {
        $this->extensionStatusCode = $extensionStatusCode;

        return $this;
    }

    /**
     * @param ?string $extensionId
     * @return $this
     */
    public function withExtensionId(?string $extensionId)
    {
        $this->extensionId = $extensionId;

        return $this;
    }

    /**
     * @param ?string $extensionKey
     * @return $this
     */
    public function withExtensionKey(?string $extensionKey)
    {
        $this->extensionKey = $extensionKey;

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

    public function build(): GraphQLExtensionBadResponseError
    {
        return new GraphQLExtensionBadResponseErrorModel(
            $this->localizedMessage instanceof LocalizedStringBuilder ? $this->localizedMessage->build() : $this->localizedMessage,
            $this->extensionExtraInfo,
            $this->extensionErrors,
            $this->extensionBody,
            $this->extensionStatusCode,
            $this->extensionId,
            $this->extensionKey
        );
    }

    public static function of(): GraphQLExtensionBadResponseErrorBuilder
    {
        return new self();
    }
}
