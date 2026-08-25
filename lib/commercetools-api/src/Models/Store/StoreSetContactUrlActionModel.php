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
final class StoreSetContactUrlActionModel extends JsonObjectModel implements StoreSetContactUrlAction
{
    public const DISCRIMINATOR_VALUE = 'setContactUrl';
    /**
     *
     * @var ?string
     */
    protected $action;

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
        ?string $action = null
    ) {
        $this->contactUrl = $contactUrl;
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
     * <p>Value to set. Must be an absolute <code>https</code> URL. If empty, any existing value is removed.</p>
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
