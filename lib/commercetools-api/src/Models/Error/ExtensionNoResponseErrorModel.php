<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ExtensionNoResponseErrorModel extends JsonObjectModel implements ExtensionNoResponseError
{
    const DISCRIMINATOR_VALUE = 'ExtensionNoResponse';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?LocalizedString
     */
    protected $localizedMessage;

    /**
     * @var ?JsonObject
     */
    protected $extensionExtraInfo;

    /**
     * @var ?ErrorByExtension
     */
    protected $errorByExtension;

    public function __construct(
        string $message = null,
        LocalizedString $localizedMessage = null,
        JsonObject $extensionExtraInfo = null,
        ErrorByExtension $errorByExtension = null
    ) {
        $this->message = $message;
        $this->localizedMessage = $localizedMessage;
        $this->extensionExtraInfo = $extensionExtraInfo;
        $this->errorByExtension = $errorByExtension;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * @return null|LocalizedString
     */
    public function getLocalizedMessage()
    {
        if (is_null($this->localizedMessage)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ExtensionNoResponseError::FIELD_LOCALIZED_MESSAGE);
            if (is_null($data)) {
                return null;
            }

            $this->localizedMessage = LocalizedStringModel::of($data);
        }

        return $this->localizedMessage;
    }

    /**
     * @return null|JsonObject
     */
    public function getExtensionExtraInfo()
    {
        if (is_null($this->extensionExtraInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ExtensionNoResponseError::FIELD_EXTENSION_EXTRA_INFO);
            if (is_null($data)) {
                return null;
            }
            $this->extensionExtraInfo = JsonObjectModel::of($data);
        }

        return $this->extensionExtraInfo;
    }

    /**
     * @return null|ErrorByExtension
     */
    public function getErrorByExtension()
    {
        if (is_null($this->errorByExtension)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ExtensionNoResponseError::FIELD_ERROR_BY_EXTENSION);
            if (is_null($data)) {
                return null;
            }

            $this->errorByExtension = ErrorByExtensionModel::of($data);
        }

        return $this->errorByExtension;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setLocalizedMessage(?LocalizedString $localizedMessage): void
    {
        $this->localizedMessage = $localizedMessage;
    }

    public function setExtensionExtraInfo(?JsonObject $extensionExtraInfo): void
    {
        $this->extensionExtraInfo = $extensionExtraInfo;
    }

    public function setErrorByExtension(?ErrorByExtension $errorByExtension): void
    {
        $this->errorByExtension = $errorByExtension;
    }
}
