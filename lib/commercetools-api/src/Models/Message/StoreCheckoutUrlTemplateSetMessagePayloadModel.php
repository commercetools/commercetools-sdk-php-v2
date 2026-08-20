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
final class StoreCheckoutUrlTemplateSetMessagePayloadModel extends JsonObjectModel implements StoreCheckoutUrlTemplateSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreCheckoutUrlTemplateSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $checkoutUrlTemplate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $checkoutUrlTemplate = null,
        ?string $type = null
    ) {
        $this->checkoutUrlTemplate = $checkoutUrlTemplate;
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
     * <p>The <code>checkoutUrlTemplate</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetCheckoutUrlTemplateAction">Set Checkout Url Template</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getCheckoutUrlTemplate()
    {
        if (is_null($this->checkoutUrlTemplate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHECKOUT_URL_TEMPLATE);
            if (is_null($data)) {
                return null;
            }
            $this->checkoutUrlTemplate = (string) $data;
        }

        return $this->checkoutUrlTemplate;
    }


    /**
     * @param ?string $checkoutUrlTemplate
     */
    public function setCheckoutUrlTemplate(?string $checkoutUrlTemplate): void
    {
        $this->checkoutUrlTemplate = $checkoutUrlTemplate;
    }
}
