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
final class StoreOrderUrlTemplateSetMessagePayloadModel extends JsonObjectModel implements StoreOrderUrlTemplateSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreOrderUrlTemplateSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $orderUrlTemplate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $orderUrlTemplate = null,
        ?string $type = null
    ) {
        $this->orderUrlTemplate = $orderUrlTemplate;
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
     * <p>The <code>orderUrlTemplate</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetOrderUrlTemplateAction">Set Order Url Template</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOrderUrlTemplate()
    {
        if (is_null($this->orderUrlTemplate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_URL_TEMPLATE);
            if (is_null($data)) {
                return null;
            }
            $this->orderUrlTemplate = (string) $data;
        }

        return $this->orderUrlTemplate;
    }


    /**
     * @param ?string $orderUrlTemplate
     */
    public function setOrderUrlTemplate(?string $orderUrlTemplate): void
    {
        $this->orderUrlTemplate = $orderUrlTemplate;
    }
}
