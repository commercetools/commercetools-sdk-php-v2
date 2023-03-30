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
final class GraphQLExtensionBadResponseErrorModel extends JsonObjectModel implements GraphQLExtensionBadResponseError
{
    public const DISCRIMINATOR_VALUE = 'ExtensionBadResponse';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?LocalizedString
     */
    protected $localizedMessage;

    /**
     *
     * @var ?mixed
     */
    protected $extensionExtraInfo;

    /**
     *
     * @var ?ExtensionErrorCollection
     */
    protected $extensionErrors;

    /**
     *
     * @var ?string
     */
    protected $extensionBody;

    /**
     *
     * @var ?int
     */
    protected $extensionStatusCode;

    /**
     *
     * @var ?string
     */
    protected $extensionId;

    /**
     *
     * @var ?string
     */
    protected $extensionKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $localizedMessage = null,
        ?JsonObject $extensionExtraInfo = null,
        ?ExtensionErrorCollection $extensionErrors = null,
        ?string $extensionBody = null,
        ?int $extensionStatusCode = null,
        ?string $extensionId = null,
        ?string $extensionKey = null,
        ?string $code = null
    ) {
        $this->localizedMessage = $localizedMessage;
        $this->extensionExtraInfo = $extensionExtraInfo;
        $this->extensionErrors = $extensionErrors;
        $this->extensionBody = $extensionBody;
        $this->extensionStatusCode = $extensionStatusCode;
        $this->extensionId = $extensionId;
        $this->extensionKey = $extensionKey;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p>User-defined localized description of the error.</p>
     *
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
     * <p>Any information that should be returned to the API caller.</p>
     *
     *
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
     * <p>Additional errors related to the API Extension.</p>
     *
     *
     * @return null|ExtensionErrorCollection
     */
    public function getExtensionErrors()
    {
        if (is_null($this->extensionErrors)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_EXTENSION_ERRORS);
            if (is_null($data)) {
                return null;
            }
            $this->extensionErrors = ExtensionErrorCollection::fromArray($data);
        }

        return $this->extensionErrors;
    }

    /**
     * <p>The response body returned by the Extension.</p>
     *
     *
     * @return null|string
     */
    public function getExtensionBody()
    {
        if (is_null($this->extensionBody)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTENSION_BODY);
            if (is_null($data)) {
                return null;
            }
            $this->extensionBody = (string) $data;
        }

        return $this->extensionBody;
    }

    /**
     * <p>Http status code returned by the Extension.</p>
     *
     *
     * @return null|int
     */
    public function getExtensionStatusCode()
    {
        if (is_null($this->extensionStatusCode)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_EXTENSION_STATUS_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->extensionStatusCode = (int) $data;
        }

        return $this->extensionStatusCode;
    }

    /**
     * <p>Unique identifier of the Extension.</p>
     *
     *
     * @return null|string
     */
    public function getExtensionId()
    {
        if (is_null($this->extensionId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTENSION_ID);
            if (is_null($data)) {
                return null;
            }
            $this->extensionId = (string) $data;
        }

        return $this->extensionId;
    }

    /**
     * <p>User-defined unique identifier of the Extension.</p>
     *
     *
     * @return null|string
     */
    public function getExtensionKey()
    {
        if (is_null($this->extensionKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTENSION_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->extensionKey = (string) $data;
        }

        return $this->extensionKey;
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
     * @param ?ExtensionErrorCollection $extensionErrors
     */
    public function setExtensionErrors(?ExtensionErrorCollection $extensionErrors): void
    {
        $this->extensionErrors = $extensionErrors;
    }

    /**
     * @param ?string $extensionBody
     */
    public function setExtensionBody(?string $extensionBody): void
    {
        $this->extensionBody = $extensionBody;
    }

    /**
     * @param ?int $extensionStatusCode
     */
    public function setExtensionStatusCode(?int $extensionStatusCode): void
    {
        $this->extensionStatusCode = $extensionStatusCode;
    }

    /**
     * @param ?string $extensionId
     */
    public function setExtensionId(?string $extensionId): void
    {
        $this->extensionId = $extensionId;
    }

    /**
     * @param ?string $extensionKey
     */
    public function setExtensionKey(?string $extensionKey): void
    {
        $this->extensionKey = $extensionKey;
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
