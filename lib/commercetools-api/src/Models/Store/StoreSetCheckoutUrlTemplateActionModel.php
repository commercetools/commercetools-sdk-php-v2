<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreSetCheckoutUrlTemplateActionModel extends JsonObjectModel implements StoreSetCheckoutUrlTemplateAction
{
    public const DISCRIMINATOR_VALUE = 'setCheckoutUrlTemplate';
    /**
     *
     * @var ?string
     */
    protected $action;

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
        ?string $action = null
    ) {
        $this->checkoutUrlTemplate = $checkoutUrlTemplate;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set. Must be an <a href="https://datatracker.ietf.org/doc/html/rfc6570">RFC 6570</a> URI template containing the <code>checkoutId</code> variable.
     * If empty, any existing value is removed.</p>
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
