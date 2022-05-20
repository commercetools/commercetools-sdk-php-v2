<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ExtensionUpdateActionsFailedErrorModel extends JsonObjectModel implements ExtensionUpdateActionsFailedError
{
    public const DISCRIMINATOR_VALUE = 'ExtensionUpdateActionsFailed';
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
     * @var ?mixed
     */
    protected $extensionExtraInfo;

    /**
     * @var ?ErrorByExtension
     */
    protected $errorByExtension;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?LocalizedString $localizedMessage = null,
        ?JsonObject $extensionExtraInfo = null,
        ?ErrorByExtension $errorByExtension = null
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
            $data = $this->raw(self::FIELD_CODE);
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
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * <p>JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values are the corresponding strings used for that language.</p>
     *
     * @return null|LocalizedString
     */
    public function getLocalizedMessage()
    {
        if (is_null($this->localizedMessage)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LOCALIZED_MESSAGE);
            if (is_null($data)) {
                return null;
            }

            $this->localizedMessage = LocalizedStringModel::of($data);
        }

        return $this->localizedMessage;
    }

    /**
     * @return null|mixed
     */
    public function getExtensionExtraInfo()
    {
        if (is_null($this->extensionExtraInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTENSION_EXTRA_INFO);
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
            $data = $this->raw(self::FIELD_ERROR_BY_EXTENSION);
            if (is_null($data)) {
                return null;
            }

            $this->errorByExtension = ErrorByExtensionModel::of($data);
        }

        return $this->errorByExtension;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?LocalizedString $localizedMessage
     */
    public function setLocalizedMessage(?LocalizedString $localizedMessage): void
    {
        $this->localizedMessage = $localizedMessage;
    }

    /**
     * @param ?JsonObject $extensionExtraInfo
     */
    public function setExtensionExtraInfo(?JsonObject $extensionExtraInfo): void
    {
        $this->extensionExtraInfo = $extensionExtraInfo;
    }

    /**
     * @param ?ErrorByExtension $errorByExtension
     */
    public function setErrorByExtension(?ErrorByExtension $errorByExtension): void
    {
        $this->errorByExtension = $errorByExtension;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
