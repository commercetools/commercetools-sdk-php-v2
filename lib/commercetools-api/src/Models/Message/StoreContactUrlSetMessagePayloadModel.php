<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreContactUrlSetMessagePayloadModel extends JsonObjectModel implements StoreContactUrlSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreContactUrlSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $contactUrl;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $contactUrl = null,
        ?string $type = null
    ) {
        $this->contactUrl = $contactUrl;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The <code>contactUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetContactUrlAction">Set Contact Url</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getContactUrl()
    {
        if (is_null($this->contactUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONTACT_URL);
            if (is_null($data)) {
                return null;
            }
            $this->contactUrl = (string) $data;
        }

        return $this->contactUrl;
    }


    /**
     * @param ?string $contactUrl
     */
    public function setContactUrl(?string $contactUrl): void
    {
        $this->contactUrl = $contactUrl;
    }
}
