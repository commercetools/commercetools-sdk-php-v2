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
final class ProductPriceModeSetMessagePayloadModel extends JsonObjectModel implements ProductPriceModeSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductPriceModeSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $to;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $to = null,
        ?string $type = null
    ) {
        $this->to = $to;
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
     * <p>The <a href="ctp:api:type:ProductPriceModeEnum">PriceMode</a> that was set.</p>
     *
     *
     * @return null|string
     */
    public function getTo()
    {
        if (is_null($this->to)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TO);
            if (is_null($data)) {
                return null;
            }
            $this->to = (string) $data;
        }

        return $this->to;
    }


    /**
     * @param ?string $to
     */
    public function setTo(?string $to): void
    {
        $this->to = $to;
    }
}
