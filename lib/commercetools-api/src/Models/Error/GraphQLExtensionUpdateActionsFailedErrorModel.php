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
final class GraphQLExtensionUpdateActionsFailedErrorModel extends JsonObjectModel implements GraphQLExtensionUpdateActionsFailedError
{
    public const DISCRIMINATOR_VALUE = 'ExtensionUpdateActionsFailed';
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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $localizedMessage = null,
        ?JsonObject $extensionExtraInfo = null,
        ?ExtensionErrorCollection $extensionErrors = null,
        ?string $code = null
    ) {
        $this->localizedMessage = $localizedMessage;
        $this->extensionExtraInfo = $extensionExtraInfo;
        $this->extensionErrors = $extensionErrors;
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
