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
final class StoreImprintUrlSetMessagePayloadModel extends JsonObjectModel implements StoreImprintUrlSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreImprintUrlSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $imprintUrl;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $imprintUrl = null,
        ?string $type = null
    ) {
        $this->imprintUrl = $imprintUrl;
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
     * <p>The <code>imprintUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetImprintUrlAction">Set Imprint Url</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getImprintUrl()
    {
        if (is_null($this->imprintUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_IMPRINT_URL);
            if (is_null($data)) {
                return null;
            }
            $this->imprintUrl = (string) $data;
        }

        return $this->imprintUrl;
    }


    /**
     * @param ?string $imprintUrl
     */
    public function setImprintUrl(?string $imprintUrl): void
    {
        $this->imprintUrl = $imprintUrl;
    }
}
