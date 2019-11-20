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
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<ExtensionBadResponseError>
 */
final class ExtensionBadResponseErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $localizedMessage;

    /**
     * @var ?JsonObject
     */
    private $extensionExtraInfo;

    /**
     * @var ErrorByExtension|?ErrorByExtensionBuilder
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
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLocalizedMessage(?LocalizedString $localizedMessage)
    {
        $this->localizedMessage = $localizedMessage;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExtensionExtraInfo(?JsonObject $extensionExtraInfo)
    {
        $this->extensionExtraInfo = $extensionExtraInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withErrorByExtension(?ErrorByExtension $errorByExtension)
    {
        $this->errorByExtension = $errorByExtension;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLocalizedMessageBuilder(?LocalizedStringBuilder $localizedMessage)
    {
        $this->localizedMessage = $localizedMessage;

        return $this;
    }

    /**
     * @return $this
     */
    public function withErrorByExtensionBuilder(?ErrorByExtensionBuilder $errorByExtension)
    {
        $this->errorByExtension = $errorByExtension;

        return $this;
    }

    public function build(): ExtensionBadResponseError
    {
        return new ExtensionBadResponseErrorModel(
            $this->message,
            ($this->localizedMessage instanceof LocalizedStringBuilder ? $this->localizedMessage->build() : $this->localizedMessage),
            $this->extensionExtraInfo,
            ($this->errorByExtension instanceof ErrorByExtensionBuilder ? $this->errorByExtension->build() : $this->errorByExtension)
        );
    }

    public static function of(): ExtensionBadResponseErrorBuilder
    {
        return new self();
    }
}
