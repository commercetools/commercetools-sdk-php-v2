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
 * @implements Builder<ExtensionUpdateActionsFailedError>
 */
final class ExtensionUpdateActionsFailedErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

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
     * <p><code>&quot;The extension returned update actions that could not be executed.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

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
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
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

    public function build(): ExtensionUpdateActionsFailedError
    {
        return new ExtensionUpdateActionsFailedErrorModel(
            $this->message,
            $this->localizedMessage instanceof LocalizedStringBuilder ? $this->localizedMessage->build() : $this->localizedMessage,
            $this->extensionExtraInfo,
            $this->extensionErrors
        );
    }

    public static function of(): ExtensionUpdateActionsFailedErrorBuilder
    {
        return new self();
    }
}
