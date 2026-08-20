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
final class StoreSetOrderUrlTemplateActionModel extends JsonObjectModel implements StoreSetOrderUrlTemplateAction
{
    public const DISCRIMINATOR_VALUE = 'setOrderUrlTemplate';
    /**
     *
     * @var ?string
     */
    protected $action;

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
        ?string $action = null
    ) {
        $this->orderUrlTemplate = $orderUrlTemplate;
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
     * <p>Value to set. Must be an <a href="https://datatracker.ietf.org/doc/html/rfc6570">RFC 6570</a> URI template containing the <code>orderId</code> variable.
     * If empty, any existing value is removed.</p>
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
