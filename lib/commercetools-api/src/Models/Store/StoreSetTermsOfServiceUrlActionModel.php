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
final class StoreSetTermsOfServiceUrlActionModel extends JsonObjectModel implements StoreSetTermsOfServiceUrlAction
{
    public const DISCRIMINATOR_VALUE = 'setTermsOfServiceUrl';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $termsOfServiceUrl;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $termsOfServiceUrl = null,
        ?string $action = null
    ) {
        $this->termsOfServiceUrl = $termsOfServiceUrl;
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
    public function getTermsOfServiceUrl()
    {
        if (is_null($this->termsOfServiceUrl)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TERMS_OF_SERVICE_URL);
            if (is_null($data)) {
                return null;
            }
            $this->termsOfServiceUrl = (string) $data;
        }

        return $this->termsOfServiceUrl;
    }


    /**
     * @param ?string $termsOfServiceUrl
     */
    public function setTermsOfServiceUrl(?string $termsOfServiceUrl): void
    {
        $this->termsOfServiceUrl = $termsOfServiceUrl;
    }
}
