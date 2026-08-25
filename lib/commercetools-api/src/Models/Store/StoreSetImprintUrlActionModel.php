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
final class StoreSetImprintUrlActionModel extends JsonObjectModel implements StoreSetImprintUrlAction
{
    public const DISCRIMINATOR_VALUE = 'setImprintUrl';
    /**
     *
     * @var ?string
     */
    protected $action;

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
        ?string $action = null
    ) {
        $this->imprintUrl = $imprintUrl;
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
