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
final class StoreTermsOfServiceUrlSetMessagePayloadModel extends JsonObjectModel implements StoreTermsOfServiceUrlSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreTermsOfServiceUrlSet';
    /**
     *
     * @var ?string
     */
    protected $type;

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
        ?string $type = null
    ) {
        $this->termsOfServiceUrl = $termsOfServiceUrl;
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
     * <p>The <code>termsOfServiceUrl</code> of the <a href="ctp:api:type:Store">Store</a> after the <a href="ctp:api:type:StoreSetTermsOfServiceUrlAction">Set Terms Of Service Url</a> update action.</p>
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
