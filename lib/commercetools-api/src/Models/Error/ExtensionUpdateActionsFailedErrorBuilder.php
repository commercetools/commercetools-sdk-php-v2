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
     * @var null|ErrorByExtension|ErrorByExtensionBuilder
     */
    private $errorByExtension;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values are the corresponding strings used for that language.</p>
     *
     * @return null|LocalizedString
     */
    public function getLocalizedMessage()
    {
        return $this->localizedMessage instanceof LocalizedStringBuilder ? $this->localizedMessage->build() : $this->localizedMessage;
    }

    /**
     * @return null|JsonObject
     */
    public function getExtensionExtraInfo()
    {
        return $this->extensionExtraInfo;
    }

    /**
     * @return null|ErrorByExtension
     */
    public function getErrorByExtension()
    {
        return $this->errorByExtension instanceof ErrorByExtensionBuilder ? $this->errorByExtension->build() : $this->errorByExtension;
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
     * @param ?ErrorByExtension $errorByExtension
     * @return $this
     */
    public function withErrorByExtension(?ErrorByExtension $errorByExtension)
    {
        $this->errorByExtension = $errorByExtension;

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

    /**
     * @deprecated use withErrorByExtension() instead
     * @return $this
     */
    public function withErrorByExtensionBuilder(?ErrorByExtensionBuilder $errorByExtension)
    {
        $this->errorByExtension = $errorByExtension;

        return $this;
    }

    public function build(): ExtensionUpdateActionsFailedError
    {
        return new ExtensionUpdateActionsFailedErrorModel(
            $this->message,
            $this->localizedMessage instanceof LocalizedStringBuilder ? $this->localizedMessage->build() : $this->localizedMessage,
            $this->extensionExtraInfo,
            $this->errorByExtension instanceof ErrorByExtensionBuilder ? $this->errorByExtension->build() : $this->errorByExtension
        );
    }

    public static function of(): ExtensionUpdateActionsFailedErrorBuilder
    {
        return new self();
    }
}
